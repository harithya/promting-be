<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

Route::get('/success', function () {
    if (!session('lead_email')) {
        return redirect('/#pricing');
    }
    return view('success');
})->name('success');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/refund-policy', function () {
    return view('refund-policy');
});
