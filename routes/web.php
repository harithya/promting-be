<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, "index"]);

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

Route::get('/success/{merchant_ref}', [LeadController::class, 'success'])->name('success');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/refund-policy', function () {
    return view('refund-policy');
});
