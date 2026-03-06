<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\TripayService;

class TransactionController extends Controller
{
    protected TripayService $tripayService;

    public function __construct(TripayService $tripayService)
    {
        $this->tripayService = $tripayService;
    }

    public function payment()
    {
        $result = $this->tripayService->getPaymentChannels();

        return response()->json([
            'status' => 'success',
            'data' => $result
        ]);
    }

    public function store() {}
}
