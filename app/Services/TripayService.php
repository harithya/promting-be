<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TripayService
{
    protected string $apiKey;
    protected string $privateKey;
    protected string $merchantCode;
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiKey = env('TRIPAY_API_KEY');
        $this->privateKey = env('TRIPAY_PRIVATE_KEY');
        $this->merchantCode = env('TRIPAY_MERCHANT_CODE');
        $this->apiUrl = rtrim(env('TRIPAY_URL'), '/');
    }

    /**
     * Get payment channels from Tripay.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPaymentChannels()
    {
        return Http::withToken($this->apiKey)
            ->get($this->apiUrl . '/merchant/payment-channel');
    }

    /**
     * Generate signature for transaction.
     *
     * @param string $merchantRef
     * @param int $amount
     * @return string
     */
    protected function generateSignature(string $merchantRef, int $amount): string
    {
        return hash_hmac('sha256', $this->merchantCode . $merchantRef . $amount, $this->privateKey);
    }

    /**
     * Create transaction request to Tripay.
     *
     * @param array $data
     * @return array
     */
    public function createTransaction(array $data): array
    {
        $merchantRef = $data['merchant_ref'] ?? 'TRX-' . time();
        $amount = $data['amount'];

        $payload = [
            'method' => $data['method'],
            'merchant_ref' => $merchantRef,
            'amount' => $amount,
            'customer_name' => $data['customer_name'],
            'customer_email' => $data['customer_email'],
            'customer_phone' => $data['customer_phone'],
            'order_items' => $data['order_items'],
            'return_url' => $data['return_url'] ?? url('/'),
            'expired_time' => $data['expired_time'] ?? (time() + (24 * 60 * 60)), // 24 jam
            'signature' => $this->generateSignature($merchantRef, $amount)
        ];

        $response = Http::withToken($this->apiKey)
            ->asForm()
            ->post($this->apiUrl . '/transaction/create', $payload);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => $response->json('message') ?? 'Transaction failed',
                'data' => []
            ];
        }

        return [
            'success' => $response->json('success') ?? false,
            'message' => $response->json('message') ?? '',
            'data' => $response->json('data') ?? []
        ];
    }

    /**
     * Get transaction detail.
     *
     * @param string $reference
     * @return array
     */
    public function getTransactionDetail(string $reference): array
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->apiUrl . '/transaction/detail', [
                'reference' => $reference
            ]);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => $response->json('message') ?? 'Failed to get transaction detail',
                'data' => []
            ];
        }

        return [
            'success' => $response->json('success') ?? false,
            'message' => $response->json('message') ?? '',
            'data' => $response->json('data') ?? []
        ];
    }
}
