<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TripayCallbackController;
use App\Http\Controllers\Transaction\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('change-password', [AuthController::class, 'changePassword']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Tripay Callback
Route::post('/tripay/callback', [TripayCallbackController::class, 'handle'])->name('tripay.callback');
