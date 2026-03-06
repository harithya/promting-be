<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TripayService
{
    protected string $apiKey;
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiKey = env('TRIPAY_API_KEY');
        $this->apiUrl = rtrim(env('TRIPAY_API_URL'), '/');
    }

    /**
     * Get payment channels from Tripay.
     *
     * @return array
     */
    public function getPaymentChannels(): array
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->apiUrl . '/merchant/payment-channel');
        return $response->json('data');
    }

    /**
     * Request a transaction from Tripay.
     *
     * @param array $payload
     * @return array
     */
    public function requestTransaction(array $payload): array
    {
        $response = Http::withToken($this->apiKey)
            ->post($this->apiUrl . '/transaction/create', $payload);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => $response->reason(),
                'data' => []
            ];
        }

        return [
            'success' => true,
            'data' => $response->json('data')
        ];
    }
}
