<?php

namespace App\Filament\Resources\Transactions\Pages;

use App\Filament\Resources\Transactions\TransactionResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewTransaction extends ViewRecord
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('checkout')
                ->label('Buka Link Pembayaran')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->color('primary')
                ->url(fn() => $this->record->checkout_url)
                ->openUrlInNewTab()
                ->visible(fn() => $this->record->status === 'UNPAID' && $this->record->checkout_url),
        ];
    }
}
