@extends('layouts.app')

@section('title', 'Kebijakan Refund - Hade Hub')

@section('content')
    <main class="pt-32 pb-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-8">Kebijakan Refund</h1>

            <div class="prose prose-slate max-w-none space-y-6 text-slate-600 leading-relaxed">
                <p>Terakhir diperbarui: {{ date('d F Y') }}</p>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">1. Kebijakan Tidak Ada Refund</h2>
                    <p>Hade Hub tidak menyediakan refund atau pengembalian dana untuk semua pembelian. Setelah pembayaran berhasil dilakukan, transaksi dianggap final dan tidak dapat dibatalkan.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">2. Akses Digital</h2>
                    <p>Produk Hade Hub merupakan produk digital yang memberikan akses lifetime. Dengan membeli, Anda mendapatkan akses penuh ke seluruh fitur dan konten. Kami menyarankan Anda untuk mencoba demo atau mempelajari informasi produk sebelum melakukan pembelian.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">3. Pertanyaan atau Keluhan</h2>
                    <p>Jika Anda mengalami kendala teknis, masalah akses, atau memiliki pertanyaan terkait produk, silakan hubungi kami melalui WhatsApp atau halaman kontak. Tim kami siap membantu menyelesaikan masalah Anda.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">4. Kontak Kami</h2>
                    <p>Untuk pertanyaan lebih lanjut mengenai Kebijakan Refund ini, silakan hubungi kami melalui WhatsApp atau halaman kontak di website.</p>
                </section>
            </div>
        </div>
    </main>
@endsection
