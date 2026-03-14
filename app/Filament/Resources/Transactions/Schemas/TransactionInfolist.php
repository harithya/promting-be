<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TransactionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Transaksi')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('merchant_ref')
                            ->label('No. Transaksi')
                            ->copyable()
                            ->fontFamily('mono'),

                        TextEntry::make('reference')
                            ->label('Referensi Tripay')
                            ->copyable()
                            ->fontFamily('mono')
                            ->placeholder('-'),

                        TextEntry::make('payment_method')
                            ->label('Metode Pembayaran')
                            ->badge()
                            ->color('info'),

                        TextEntry::make('status')
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
                            }),

                        TextEntry::make('amount')
                            ->label('Total Tagihan')
                            ->money('IDR'),

                        TextEntry::make('amount_received')
                            ->label('Diterima')
                            ->money('IDR'),

                        TextEntry::make('created_at')
                            ->label('Tanggal Transaksi')
                            ->dateTime('d M Y, H:i'),

                        TextEntry::make('updated_at')
                            ->label('Terakhir Diupdate')
                            ->dateTime('d M Y, H:i'),
                    ]),

                Section::make('Informasi Pelanggan')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('customer_name')
                            ->label('Nama'),

                        TextEntry::make('customer_email')
                            ->label('Email')
                            ->copyable(),

                        TextEntry::make('customer_phone')
                            ->label('No. HP')
                            ->copyable(),

                        TextEntry::make('user.name')
                            ->label('Akun Terdaftar')
                            ->placeholder('Belum ada akun'),
                    ]),
            ]);
    }
}
