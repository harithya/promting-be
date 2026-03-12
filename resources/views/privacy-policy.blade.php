@extends('layouts.app')

@section('title', 'Kebijakan Privasi - RIA Prompt')

@section('content')
    <main class="pt-32 pb-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-8">Kebijakan Privasi</h1>

            <div class="prose prose-slate max-w-none space-y-6 text-slate-600 leading-relaxed">
                <p>Terakhir diperbarui: {{ date('d F Y') }}</p>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">1. Informasi yang Kami Kumpulkan</h2>
                    <p>Kami mengumpulkan informasi yang Anda berikan langsung kepada kami saat mendaftar, menggunakan
                        layanan kami, atau berkomunikasi dengan kami. Ini mungkin termasuk nama, alamat email, dan
                        informasi profil lainnya.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">2. Penggunaan Informasi</h2>
                    <p>Kami menggunakan informasi yang dikumpulkan untuk menyediakan, memelihara, dan meningkatkan
                        layanan kami, untuk mengembangkan layanan baru, dan untuk melindungi RIA Prompt serta pengguna
                        kami.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">3. Keamanan Data</h2>
                    <p>Kami bekerja keras untuk melindungi RIA Prompt dan pengguna kami dari akses tanpa izin,
                        perubahan, pengungkapan, atau penghancuran informasi yang kami miliki.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">4. Perubahan Kebijakan</h2>
                    <p>Kebijakan Privasi kami dapat berubah dari waktu ke waktu. Kami tidak akan mengurangi hak Anda
                        berdasarkan Kebijakan Privasi ini tanpa persetujuan eksplisit dari Anda.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">5. Kontak Kami</h2>
                    <p>Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, silakan hubungi kami melalui halaman
                        kontak.</p>
                </section>
            </div>
        </div>
    </main>
@endsection
