<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TransactionStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalRevenue = Transaction::where('status', 'PAID')->sum('amount_received');
        $totalTransactions = Transaction::count();
        $paidTransactions = Transaction::where('status', 'PAID')->count();
        $unpaidTransactions = Transaction::where('status', 'UNPAID')->count();

        $successRate = $totalTransactions > 0
            ? round(($paidTransactions / $totalTransactions) * 100, 1)
            : 0;

        // Revenue trend (last 7 days vs previous 7 days)
        $revenueThisWeek = Transaction::where('status', 'PAID')
            ->whereBetween('created_at', [now()->subDays(7), now()])
            ->sum('amount_received');

        $revenuePrevWeek = Transaction::where('status', 'PAID')
            ->whereBetween('created_at', [now()->subDays(14), now()->subDays(7)])
            ->sum('amount_received');

        $revenueTrend = collect(
            Transaction::where('status', 'PAID')
                ->selectRaw('DATE(created_at) as date, SUM(amount_received) as total')
                ->groupBy('date')
                ->orderBy('date')
                ->take(7)
                ->pluck('total', 'date')
                ->values()
                ->toArray()
        );

        return [
            Stat::make('Total Pendapatan', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->description($revenueThisWeek >= $revenuePrevWeek ? 'Naik dari minggu lalu' : 'Turun dari minggu lalu')
                ->descriptionIcon($revenueThisWeek >= $revenuePrevWeek ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($revenueThisWeek >= $revenuePrevWeek ? 'success' : 'danger')
                ->chart($revenueTrend->toArray()),

            Stat::make('Total Transaksi', number_format($totalTransactions))
                ->description('Semua transaksi masuk')
                ->descriptionIcon('heroicon-m-credit-card')
                ->color('info'),

            Stat::make('Transaksi Lunas', number_format($paidTransactions))
                ->description("Success rate {$successRate}%")
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Menunggu Pembayaran', number_format($unpaidTransactions))
                ->description('Belum diselesaikan')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
        ];
    }
}
