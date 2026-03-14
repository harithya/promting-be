<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\UserStatus;
use Filament\Widgets\DoughnutChartWidget;

class UserStatusChartWidget extends DoughnutChartWidget
{
    protected ?string $heading = 'Status User';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $active   = User::where('status', UserStatus::ACTIVE->value)->count();
        $inactive = User::where('status', UserStatus::INACTIVE->value)->count();
        $banned   = User::where('status', UserStatus::BANNED->value)->count();

        return [
            'datasets' => [
                [
                    'data' => [$active, $inactive, $banned],
                    'backgroundColor' => [
                        '#22c55e', // green - Active
                        '#f59e0b', // amber - Inactive
                        '#ef4444', // red - Banned
                    ],
                    'hoverOffset' => 6,
                ],
            ],
            'labels' => ['Aktif', 'Tidak Aktif', 'Banned'],
        ];
    }
}
