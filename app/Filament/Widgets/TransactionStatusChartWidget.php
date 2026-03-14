<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\DoughnutChartWidget;

class TransactionStatusChartWidget extends DoughnutChartWidget
{
    protected ?string $heading = 'Status Transaksi';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $paid    = Transaction::where('status', 'PAID')->count();
        $unpaid  = Transaction::where('status', 'UNPAID')->count();
        $expired = Transaction::where('status', 'EXPIRED')->count();
        $failed  = Transaction::where('status', 'FAILED')->count();

        return [
            'datasets' => [
                [
                    'data' => [$paid, $unpaid, $expired, $failed],
                    'backgroundColor' => [
                        '#22c55e', // green - PAID
                        '#f59e0b', // amber - UNPAID
                        '#ef4444', // red - EXPIRED
                        '#6b7280', // gray - FAILED
                    ],
                    'hoverOffset' => 6,
                ],
            ],
            'labels' => ['Lunas', 'Belum Bayar', 'Kadaluarsa', 'Gagal'],
        ];
    }
}
