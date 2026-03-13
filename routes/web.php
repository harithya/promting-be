<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/leads', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
    ]);

    session([
        'lead_name' => $request->name,
        'lead_email' => $request->email,
        'lead_phone' => $request->phone,
    ]);

    return redirect('/checkout');
})->name('leads.store');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});
