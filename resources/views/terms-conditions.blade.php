@extends('layouts.app')

@section('title', 'Syarat & Ketentuan - Hade Hub')

@section('content')
    <main class="pt-32 pb-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-8">Syarat & Ketentuan</h1>

            <div class="prose prose-slate max-w-none space-y-6 text-slate-600 leading-relaxed">
                <p>Terakhir diperbarui: {{ date('d F Y') }}</p>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">1. Penerimaan Ketentuan</h2>
                    <p>Dengan mengakses dan menggunakan Hade Hub, Anda setuju untuk terikat oleh Syarat & Ketentuan
                        ini. Jika Anda tidak setuju dengan bagian mana pun dari ketentuan ini, Anda tidak boleh
                        menggunakan layanan kami.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">2. Penggunaan Layanan</h2>
                    <p>Anda setuju untuk menggunakan layanan kami hanya untuk tujuan yang sah dan sesuai dengan Syarat &
                        Ketentuan ini. Anda bertanggung jawab atas semua aktivitas yang terjadi di bawah akun Anda.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">3. Kekayaan Intelektual</h2>
                    <p>Seluruh konten, fitur, dan fungsionalitas Hade Hub adalah milik eksklusif kami dan dilindungi
                        oleh hukum hak cipta dan merek dagang internasional.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">4. Batasan Tanggung Jawab</h2>
                    <p>Dalam hal apa pun Hade Hub tidak bertanggung jawab atas kerusakan tidak langsung, insidental,
                        khusus, konsekuensial, atau punitif yang timbul dari penggunaan layanan oleh Anda.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">5. Hukum yang Mengatur</h2>
                    <p>Syarat & Ketentuan ini diatur oleh dan ditafsirkan sesuai dengan hukum negara Republik Indonesia,
                        tanpa memperhatikan pertentangan prinsip hukum.</p>
                </section>
            </div>
        </div>
    </main>
@endsection
