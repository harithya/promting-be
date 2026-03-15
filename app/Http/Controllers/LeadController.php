<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\PushWaService;
use App\Services\TripayService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    protected TripayService $tripayService;
    protected PushWaService $pushWaService;

    public function __construct(TripayService $tripayService, PushWaService $pushWaService)
    {
        $this->tripayService = $tripayService;
        $this->pushWaService = $pushWaService;
    }

    public function index()
    {
        $payments = $this->tripayService->getPaymentChannels();

        return view('welcome', [
            'payments' => $payments
        ]);
    }

    /**
     * Show success page after transaction created.
     */
    public function success(string $merchantRef)
    {
        $data['transaction'] = Transaction::where('merchant_ref', $merchantRef)->firstOrFail();
        return view('success', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'payment_method' => ['required', 'string'],
        ]);

        // Generate merchant reference
        $merchantRef = 'RIA-' . time() . '-' . rand(1000, 9999);

        // Create transaction via Tripay
        $transactionData = [
            'method' => $validated['payment_method'],
            'merchant_ref' => $merchantRef,
            'amount' => 110000, // Rp 110.000
            'customer_name' => $validated['name'],
            'customer_email' => $validated['email'],
            'customer_phone' => $validated['phone'],
            'order_items' => [
                [
                    'sku' => 'RIA-LIFETIME',
                    'name' => 'Hade Hub - Lifetime Access',
                    'price' => 110000,
                    'quantity' => 1,
                    'product_url' => url('/'),
                    'image_url' => asset('images/logo.png'),
                ]
            ],
            'return_url' => route('success', ['merchant_ref' => $merchantRef]),
            'expired_time' => time() + (24 * 60 * 60), // 24 jam
        ];

        $result = $this->tripayService->createTransaction($transactionData);

        if (!$result['success']) {
            return back()->withErrors(['error' => $result['message']])->withInput();
        }

        // Save transaction to database
        $transaction = Transaction::create([
            'merchant_ref' => $merchantRef,
            'reference' => $result['data']['reference'] ?? null,
            'amount' => $result['data']['amount'],
            'amount_received' => $result['data']['amount_received'] ?? 0,
            'payment_method' => $validated['payment_method'],
            'status' => 'UNPAID',
            'customer_name' => $validated['name'],
            'customer_email' => $validated['email'],
            'customer_phone' => $validated['phone'],
            'checkout_url' => $result['data']['checkout_url'] ?? null,
        ]);

        // Send WA notification - transaction created
        $this->pushWaService->sendTransactionCreated(
            phone: $validated['phone'],
            name: $validated['name'],
            merchantRef: $merchantRef,
            amount: 110000,
            checkoutUrl: $result['data']['checkout_url'] ?? url('/')
        );

        // Redirect to checkout URL
        if (isset($result['data']['checkout_url'])) {
            return redirect()->away($result['data']['checkout_url']);
        }

        return redirect()->route('success', ['merchant_ref' => $merchantRef]);
    }
}
