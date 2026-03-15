@extends('layouts.app')

@section('title',
    $transaction->status === 'PAID' ? 'Pembayaran Berhasil - Hade Hub' :
    ($transaction->status === 'UNPAID' ? 'Menunggu Pembayaran - Hade Hub' : 'Pembayaran Gagal - Hade Hub')
)

@section('styles')
<style>
    @keyframes scale-in {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    @keyframes fade-up {
        0% { transform: translateY(20px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }
    .animate-scale-in { animation: scale-in 0.6s ease-out forwards; }
    .animate-fade-up-delay-1 { animation: fade-up 0.6s ease-out 0.2s forwards; opacity: 0; }
    .animate-fade-up-delay-2 { animation: fade-up 0.6s ease-out 0.4s forwards; opacity: 0; }
    .animate-fade-up-delay-3 { animation: fade-up 0.6s ease-out 0.6s forwards; opacity: 0; }
</style>
@endsection

@section('content')
<section class="min-h-screen flex items-center justify-center py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-slate-50 -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl">
                <div class="p-8 sm:p-12">

                    {{-- ===================== ICON ===================== --}}
                    <div class="relative flex justify-center mb-8 animate-scale-in">
                        @if($transaction->status === 'PAID')
                            <img src="{{ asset('images/Success.gif') }}" alt="Paid" class="w-32 h-32 object-contain">
                        @elseif($transaction->status === 'UNPAID')
                            <div class="w-24 h-24 bg-amber-100 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        @else
                            <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    {{-- ===================== TITLE ===================== --}}
                    <div class="text-center mb-8">
                        @if($transaction->status === 'PAID')
                            <h1 class="text-3xl font-extrabold text-slate-900 mb-3 animate-fade-up-delay-1">Pembayaran Berhasil!</h1>
                            <p class="text-slate-600 animate-fade-up-delay-2">Akses lifetime Hade Hub Anda sudah aktif. Cek WhatsApp untuk kredensial login.</p>
                        @elseif($transaction->status === 'UNPAID')
                            <h1 class="text-3xl font-extrabold text-slate-900 mb-3 animate-fade-up-delay-1">Menunggu Pembayaran</h1>
                            <p class="text-slate-600 animate-fade-up-delay-2">Silakan selesaikan pembayaran untuk mengaktifkan akses lifetime Anda.</p>
                        @else
                            <h1 class="text-3xl font-extrabold text-slate-900 mb-3 animate-fade-up-delay-1">Pembayaran Gagal</h1>
                            <p class="text-slate-600 animate-fade-up-delay-2">Transaksi Anda telah kadaluarsa atau dibatalkan. Silakan buat transaksi baru.</p>
                        @endif
                    </div>

                    {{-- ===================== STATE CONTENT ===================== --}}
                    @if($transaction->status === 'PAID')
                        {{-- PAID: WA notification info --}}
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-green-50 border border-green-200 mb-6 animate-fade-up-delay-3">
                            <div class="w-10 h-10 bg-[#25D366]/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#25D366">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <p class="text-slate-700 text-sm">Kredensial akses telah dikirim ke WhatsApp Anda.</p>
                        </div>

                    @elseif($transaction->status === 'UNPAID')
                        {{-- UNPAID: alert + pay button --}}
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-amber-50 border border-amber-200 mb-6 animate-fade-up-delay-3">
                            <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-amber-900 text-sm mb-1">Selesaikan Pembayaran</p>
                                <p class="text-amber-700 text-sm">Transaksi akan kadaluarsa dalam 24 jam.</p>
                            </div>
                        </div>

                        @if($transaction->checkout_url)
                        <div class="mb-6 animate-fade-up-delay-3">
                            <a href="{{ $transaction->checkout_url }}" target="_blank"
                                class="block w-full py-4 bg-primary text-white text-center font-bold rounded-xl hover:bg-primary-dark transition-all shadow-lg shadow-primary/30 text-lg">
                                Bayar Sekarang
                            </a>
                        </div>
                        @endif

                    @else
                        {{-- FAILED/EXPIRED: retry button --}}
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-red-50 border border-red-200 mb-6 animate-fade-up-delay-3">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-red-900 text-sm mb-1">Transaksi Tidak Valid</p>
                                <p class="text-red-700 text-sm">Silakan buat transaksi baru untuk melanjutkan pembelian.</p>
                            </div>
                        </div>

                        <div class="mb-6 animate-fade-up-delay-3">
                            <a href="/#pricing"
                                class="block w-full py-4 bg-primary text-white text-center font-bold rounded-xl hover:bg-primary-dark transition-all shadow-lg shadow-primary/30 text-lg">
                                Coba Lagi
                            </a>
                        </div>
                    @endif

                    {{-- ===================== AMOUNT ===================== --}}
                    <div class="bg-slate-50 rounded-xl p-5 mb-6 animate-fade-up-delay-3">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600 text-sm">Total Pembayaran</span>
                            <span class="font-extrabold text-primary text-xl">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-slate-600 text-sm">Status</span>
                            @if($transaction->status === 'PAID')
                                <span class="text-xs font-bold px-3 py-1 rounded-full bg-green-100 text-green-700">Lunas</span>
                            @elseif($transaction->status === 'UNPAID')
                                <span class="text-xs font-bold px-3 py-1 rounded-full bg-amber-100 text-amber-700">Menunggu Pembayaran</span>
                            @else
                                <span class="text-xs font-bold px-3 py-1 rounded-full bg-red-100 text-red-700">{{ $transaction->status }}</span>
                            @endif
                        </div>
                    </div>

                    {{-- ===================== BACK LINK ===================== --}}
                    <div class="text-center">
                        <a href="/" class="inline-flex items-center justify-center gap-2 text-slate-500 hover:text-slate-900 transition-colors text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali ke Beranda
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
