<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    public function index()
    {
        $payments = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TRIPAY_API_KEY')
        ])->get(env('TRIPAY_URL') . '/merchant/payment-channel');

        return view('welcome', [
            'payments' => $payments
        ]);
    }
    /**
     * Store lead data - validation only, no backend process.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
        ]);

        // INTERGRASI TRIPAY


        session([
            'lead_name' => $validated['name'],
            'lead_email' => $validated['email'],
            'lead_phone' => $validated['phone'],
        ]);

        return redirect()->route('success');
    }
}
