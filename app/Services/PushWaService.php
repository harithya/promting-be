<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PushWaService
{
    protected string $token;
    protected string $apiUrl = 'https://dash.pushwa.com/api/kirimPesan';

    public function __construct()
    {
        $this->token = env('WA_PUSH_API');
    }

    /**
     * Send WhatsApp message.
     *
     * @param string $phone
     * @param string $message
     * @return bool
     */
    public function send(string $phone, string $message): bool
    {
        // Normalize phone number (remove +, spaces, dashes)
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Convert 08xx to 628xx
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($this->apiUrl, [
                'token'   => $this->token,
                'target'  => $phone,
                'type'    => 'text',
                'delay'   => '1',
                'message' => $message,
            ]);

            if ($response->failed()) {
                Log::warning('PushWA send failed', [
                    'phone'    => $phone,
                    'response' => $response->body()
                ]);
                return false;
            }

            Log::info('PushWA message sent', ['phone' => $phone]);
            return true;
        } catch (\Exception $e) {
            Log::error('PushWA error', [
                'phone' => $phone,
                'error' => $e->getMessage()
            ]);
            return false;
        }
    }

    /**
     * Send transaction created notification.
     *
     * @param string $phone
     * @param string $name
     * @param string $merchantRef
     * @param int $amount
     * @param string $checkoutUrl
     * @return bool
     */
    public function sendTransactionCreated(string $phone, string $name, string $merchantRef, int $amount, string $checkoutUrl): bool
    {
        $message = "Halo *{$name}*! 👋\n\n";
        $message .= "Transaksi Anda berhasil dibuat.\n\n";
        $message .= "📋 *Detail Transaksi:*\n";
        $message .= "• No. Transaksi: `{$merchantRef}`\n";
        $message .= "• Total: *Rp " . number_format($amount, 0, ',', '.') . "*\n\n";
        $message .= "⏳ Segera selesaikan pembayaran dalam *24 jam*.\n\n";
        $message .= "💳 *Link Pembayaran:*\n{$checkoutUrl}\n\n";
        $message .= "_Jangan bagikan link ini ke siapapun._";

        return $this->send($phone, $message);
    }

    /**
     * Send payment success notification with credentials.
     *
     * @param string $phone
     * @param string $name
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function sendPaymentSuccess(string $phone, string $name, string $email, string $password): bool
    {
        $message = "Halo *{$name}*! 🎉\n\n";
        $message .= "Pembayaran Anda telah *berhasil dikonfirmasi*!\n\n";
        $message .= "🔑 *Kredensial Akses Hade Hub:*\n";
        $message .= "• Email: `{$email}`\n";
        $message .= "• Password: `{$password}`\n\n";
        $message .= "🚀 Mulai generate konten visual profesional sekarang!\n\n";
        $message .= "_Simpan kredensial ini dengan aman dan jangan bagikan ke siapapun._";

        return $this->send($phone, $message);
    }
}
