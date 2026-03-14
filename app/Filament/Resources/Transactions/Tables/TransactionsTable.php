<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('merchant_ref')
                    ->label('No. Transaksi')
                    ->searchable()
                    ->copyable()
                    ->fontFamily('mono')
                    ->sortable(),

                TextColumn::make('customer_name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('customer_email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('customer_phone')
                    ->label('No. HP')
                    ->searchable(),

                TextColumn::make('payment_method')
                    ->label('Metode')
                    ->searchable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('amount')
                    ->label('Total')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'PAID'    => 'success',
                        'UNPAID'  => 'warning',
                        'EXPIRED' => 'danger',
                        'FAILED'  => 'danger',
                        default   => 'gray',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'PAID'    => 'Lunas',
                        'UNPAID'  => 'Belum Bayar',
                        'EXPIRED' => 'Kadaluarsa',
                        'FAILED'  => 'Gagal',
                        default   => $state,
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'PAID'    => 'Lunas',
                        'UNPAID'  => 'Belum Bayar',
                        'EXPIRED' => 'Kadaluarsa',
                        'FAILED'  => 'Gagal',
                    ]),

                Filter::make('created_at')
                    ->label('Tanggal')
                    ->form([
                        DatePicker::make('from')->label('Dari'),
                        DatePicker::make('until')->label('Sampai'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn($q) => $q->whereDate('created_at', '>=', $data['from']))
                            ->when($data['until'], fn($q) => $q->whereDate('created_at', '<=', $data['until']));
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['from'] ?? null) {
                            $indicators[] = 'Dari: ' . \Carbon\Carbon::parse($data['from'])->format('d M Y');
                        }
                        if ($data['until'] ?? null) {
                            $indicators[] = 'Sampai: ' . \Carbon\Carbon::parse($data['until'])->format('d M Y');
                        }
                        return $indicators;
                    }),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                ])->iconButton(),
            ]);
    }
}
