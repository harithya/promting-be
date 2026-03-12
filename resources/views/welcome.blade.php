@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://unpkg.com/@lucide/web-icons"></script>
<style>
    .hero-grid {
        mask-image: radial-gradient(circle at center, black, transparent 80%);
    }

    @keyframes float-particle {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        33% {
            transform: translate(10px, -15px) rotate(10deg);
        }

        66% {
            transform: translate(-10px, 5px) rotate(-10deg);
        }
    }

    .animate-float-particle {
        animation: float-particle 8s ease-in-out infinite;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section id="home" class="pt-32 pb-16 sm:pt-48 sm:pb-32 overflow-hidden relative">
    <!-- Background Linear Grid Pattern -->
    <div
        class="absolute inset-0 opacity-[0.05] hero-grid -z-10 bg-[linear-gradient(to_right,#279b84_1px,transparent_1px),linear-gradient(to_bottom,#279b84_1px,transparent_1px)] bg-size-[40px_40px]">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
        <!-- Enhanced decorative blobs -->
        <div class="absolute -top-24 -left-20 w-96 h-96 bg-primary/10 rounded-full blur-[120px] -z-10 animate-pulse">
        </div>
        <div class="absolute top-40 -right-20 w-120 h-120 bg-indigo-500/10 rounded-full blur-[140px] -z-10 animate-pulse"
            style="animation-delay: 2s;"></div>

        <!-- Removed Particles - Cleaner Aesthetic -->

        <div class="max-w-3xl mx-auto relative z-10">
            <span
                class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-primary-light text-primary text-xs font-bold tracking-wider uppercase mb-6 border border-primary/20 shadow-sm animate-bounce-slow">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                #1 AI Content Generator for Creators
            </span>
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                Generate Konten Visual <span class="text-gradient">Profesional</span> dengan AI
            </h1>
            <p class="text-lg sm:text-xl text-slate-600 leading-relaxed mb-10 px-4">
                Platform AI yang mudah digunakan dengan kategori konten lengkap. Support ChatGPT, Gemini, dan AI
                provider lainnya. Prompt terstruktur, customizable output, dan ratusan contoh siap pakai.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="#cta"
                    class="w-full sm:w-auto bg-primary text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-primary-dark transition-all shadow-xl shadow-primary/30 active:scale-95 flex items-center justify-center gap-2">
                    Mulai Generate Konten
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </a>
                <a href="#templates"
                    class="w-full sm:w-auto bg-white border-2 border-slate-100 text-slate-700 px-8 py-4 rounded-full text-lg font-bold hover:border-primary hover:text-primary transition-all active:scale-95 flex items-center justify-center gap-2">
                    Lihat Kategori
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Trust Badges -->
            <div
                class="pt-2 flex flex-wrap justify-center items-center gap-x-8 gap-y-4 opacity-60 grayscale hover:grayscale-0 transition-all duration-700 pointer-events-none">
                <span class="text-sm font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22.28 12c0-5.68-4.6-10.28-10.28-10.28S1.72 6.32 1.72 12c0 4.86 3.39 8.93 7.9 9.94v-7.03H7.1v-2.91h2.52v-2.21c0-2.49 1.48-3.87 3.76-3.87 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.77l-.44 2.91h-2.33v7.03c4.51-1.01 7.9-5.08 7.9-9.94z" />
                    </svg>
                    Optimized
                </span>
                <span class="text-sm font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                    Professional
                </span>
                <span class="text-sm font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                    </svg>
                    Secure AI
                </span>
            </div>
        </div>

        <!-- Hero Image Container -->
        <div class="mt-20 relative mx-auto max-w-5xl group p-4">
            <div
                class="absolute inset-0 bg-primary/20 blur-[120px] -z-10 opacity-50 group-hover:opacity-80 transition-opacity duration-1000">
            </div>

            <!-- Extra Decorative Borders -->
            <div
                class="absolute -inset-2 bg-linear-to-r from-primary/5 via-primary/20 to-indigo-500/5 rounded-[2.5rem] blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700">
            </div>

            <div
                class="relative bg-white rounded-3xl p-2 sm:p-3 shadow-[0_32px_96px_-16px_rgba(39,155,132,0.15)] border border-slate-100 overflow-hidden transform group-hover:-translate-y-3 transition-transform duration-700">
                <img src="{{ asset('images/dashboard-mockup2.png') }}" alt="RIA Prompt Dashboard"
                    class="w-full rounded-2xl shadow-inner border border-slate-50">
            </div>

            <!-- Floating elements - Enhanced & Grouped -->
            <!-- Left Top -->
            <div class="absolute -top-6 -left-6 hidden lg:block animate-bounce-slow" style="animation-duration: 4s;">
                <div
                    class="backdrop-blur-md bg-white/80 p-5 rounded-3xl shadow-2xl border border-white/50 flex items-center gap-4 transform hover:scale-105 transition-transform">
                    <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Content Hub</p>
                        <p class="text-sm font-extrabold text-slate-800">8+ Kategori Lengkap</p>
                    </div>
                </div>
            </div>

            <!-- Left Bottom -->
            <div class="absolute -bottom-10 -left-12 hidden lg:block animate-bounce-slow" style="animation-delay: 1s;">
                <div
                    class="backdrop-blur-md bg-white/80 p-5 rounded-3xl shadow-2xl border border-white/50 flex items-center gap-4 transform hover:scale-105 transition-transform">
                    <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Success Rate</p>
                        <p class="text-sm font-extrabold text-slate-800">99% Prompt Valid!</p>
                    </div>
                </div>
            </div>

            <!-- Right Center -->
            <div class="absolute top-1/2 -right-12 hidden xl:block animate-bounce-slow"
                style="animation-delay: 2s; animation-duration: 5s;">
                <div
                    class="backdrop-blur-md bg-white/80 p-5 rounded-3xl shadow-2xl border border-white/50 flex items-center gap-4 transform hover:scale-105 transition-transform">
                    <div class="w-12 h-12 bg-indigo-50 rounded-2xl flex items-center justify-center">
                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Speed Optimized
                        </p>
                        <p class="text-sm font-extrabold text-slate-800">Generate 2x Lebih Cepat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section (The Hook) -->
<section class="py-24 bg-slate-50 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <span class="text-red-500 font-bold tracking-widest uppercase text-xs mb-4 block">The Brutal
                Truth</span>
            <h2 class="text-4xl sm:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Konten Visual Anda
                <br> Bergantung pada <span class="text-primary italic">Prompt yang Tepat</span>
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg leading-relaxed">Banyak creator gagal bukan karena
                AI-nya buruk, tapi karena tidak tahu cara membuat prompt yang efektif. Apakah Anda sering mengalami
                ini?</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Pain Point 1 -->
            <div
                class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-200/50 border border-slate-100 hover:border-red-200 transition-all group overflow-hidden relative">
                <div
                    class="absolute -top-10 -right-10 w-32 h-32 bg-red-50 rounded-full group-hover:scale-150 transition-transform duration-700 opacity-50">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-8 rotate-3 group-hover:rotate-0 transition-transform shadow-lg shadow-red-500/10 text-3xl">
                        🥱
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-900 leading-tight">Prompt Biasa Saja? <br> Hasil
                        Biasa Saja.</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Menggunakan prompt tanpa struktur yang jelas
                        hanya akan menghasilkan konten yang tidak sesuai ekspektasi dan membuang waktu.</p>
                </div>
            </div>
            <!-- Pain Point 2 -->
            <div
                class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-200/50 border border-slate-100 hover:border-red-200 transition-all group overflow-hidden relative md:translate-y-6">
                <div
                    class="absolute -top-10 -right-10 w-32 h-32 bg-red-50 rounded-full group-hover:scale-150 transition-transform duration-700 opacity-50">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-8 -rotate-3 group-hover:rotate-0 transition-transform shadow-lg shadow-red-500/10 text-3xl">
                        💸
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-900 leading-tight">Membuang Waktu <br> Secara
                        Percuma.</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Berapa banyak waktu yang Anda habiskan hanya
                        untuk "menebak-nebak" prompt yang tepat untuk setiap kategori konten?</p>
                </div>
            </div>
            <!-- Pain Point 3 -->
            <div
                class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-200/50 border border-slate-100 hover:border-red-200 transition-all group overflow-hidden relative">
                <div
                    class="absolute -top-10 -right-10 w-32 h-32 bg-red-50 rounded-full group-hover:scale-150 transition-transform duration-700 opacity-50">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center mb-8 rotate-6 group-hover:rotate-0 transition-transform shadow-lg shadow-red-500/10 text-3xl">
                        🤯
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-slate-900 leading-tight">Bingung Pilih <br> Tone &
                        Style.</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Tidak tahu harus pakai tone apa untuk
                        marketing, edukasi, atau konten lainnya. Hasilnya konten tidak tepat sasaran.</p>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center">
            <p class="text-slate-900 font-extrabold text-2xl mb-8 leading-tight">Sudah saatnya Anda berhenti
                menebak <br> dan mulai menciptakan <span class="text-primary italic">dengan presisi.</span></p>
            <div class="flex justify-center">
                <svg class="w-10 h-10 text-primary animate-bounce" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section id="features" class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="absolute -inset-4 bg-primary/10 rounded-4xl -z-10 rotate-3"></div>
                <div class="bg-white p-6 rounded-4xl shadow-xl border border-slate-100">
                    <div class="space-y-4">
                        <!-- Feature 1 -->
                        <div
                            class="flex items-start gap-4 p-5 rounded-2xl bg-slate-50 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shrink-0 text-white shadow-lg text-2xl">
                                📝
                            </div>
                            <div class="pt-1">
                                <h4 class="font-black text-slate-900 mb-1">Builder Berbasis Logika</h4>
                                <p class="text-sm text-slate-600 leading-relaxed">Berhenti mengetik manual! Cukup
                                    jawab beberapa pertanyaan, biarkan sistem merangkum struktur prompt yang <span
                                        class="text-primary font-bold">sempurna</span>.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="flex items-start gap-4 p-5 rounded-2xl bg-slate-50 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shrink-0 text-white shadow-lg text-2xl">
                                📚
                            </div>
                            <div class="pt-1">
                                <h4 class="font-black text-slate-900 mb-1">Katalog Gaya Terlengkap</h4>
                                <p class="text-sm text-slate-600 leading-relaxed">Akses instan ratusan gaya visual!
                                    Dari Portrait Fotorealistik hingga Concept Art futuristik, <span
                                        class="text-blue-600 font-bold italic">semua ada polanya</span>.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="flex items-start gap-4 p-5 rounded-2xl bg-slate-50 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center shrink-0 text-white shadow-lg text-2xl">
                                ⚡
                            </div>
                            <div class="pt-1">
                                <h4 class="font-black text-slate-900 mb-1">Output Level Engineering</h4>
                                <p class="text-sm text-slate-600 leading-relaxed">Prompt yang dioptimasi dengan
                                    parameter khusus untuk hasil AI <span
                                        class="text-amber-600 font-bold underline decoration-amber-200">terbaik &
                                        akurat</span>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <!-- Decorative vertical line -->
                <div
                    class="absolute -left-6 top-0 bottom-0 w-1 bg-linear-to-b from-primary/50 to-transparent rounded-full hidden lg:block">
                </div>

                <span
                    class="inline-block py-1 px-4 rounded-full bg-slate-100 text-slate-500 text-[10px] font-bold tracking-widest uppercase mb-6 border border-slate-200 shadow-sm">
                    Library Konten Terbesar
                </span>

                <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 leading-[1.15] mb-8">
                    Satu Hub, <span class="text-gradient italic">Ribuan Kemungkinan</span> Konten Visual
                </h2>

                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                    Hentikan kebuntuan kreatif sekarang juga. RIA Prompt memberikan Anda akses ke struktur prompt
                    profesional yang mencakup <span class="font-bold text-slate-900 italic">setiap sudut</span>
                    kebutuhan konten digital Anda.
                </p>

                <ul class="space-y-6 mb-12">
                    <li class="flex items-start gap-4 group/item">
                        <div
                            class="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 mb-1 group-hover/item:text-primary transition-colors">
                                Kategori Strategis</p>
                            <p class="text-sm text-slate-500">Mulai dari Marketing hingga Storytelling, semua ada
                                blueprint-nya.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 group/item">
                        <div
                            class="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 mb-1 group-hover/item:text-primary transition-colors">
                                Kompatibilitas Total</p>
                            <p class="text-sm text-slate-500">Copy-paste langsung ke ChatGPT, Gemini, Midjourney,
                                ampe Claude.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 group/item">
                        <div
                            class="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary group-hover/item:text-white transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 mb-1 group-hover/item:text-primary transition-colors">
                                Visual Style Eksklusif</p>
                            <p class="text-sm text-slate-500">Dilengkapi panduan visual dan tone yang bikin hasil
                                AI makin "nyawa".</p>
                        </div>
                    </li>
                </ul>

                <a href="#cta"
                    class="inline-flex items-center gap-3 bg-primary text-white px-10 py-5 rounded-full text-lg font-extrabold hover:bg-primary-dark transition-all shadow-2xl shadow-primary/30 group active:scale-95">
                    Eksplorasi Semua Kategori
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-24 bg-slate-900 text-white overflow-hidden relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
    </div>
    <div
        class="absolute bottom-0 left-0 w-96 h-96 bg-primary/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-4xl sm:text-5xl font-extrabold mb-6 tracking-tight">Hanya 3 Langkah Untuk Konten
                Sempurna</h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg leading-relaxed">Pilih kategori, tentukan tone, dan
                biarkan AI bekerja untuk Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Step 1 -->
            <div
                class="relative group p-8 bg-white/5 border border-white/10 rounded-[2.5rem] backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-primary/20 rotate-3 group-hover:rotate-0 transition-transform">
                    1</div>
                <h3 class="text-2xl font-bold mb-4">Pilih Kategori</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Pilih dari kategori: Promosi, Edukasi, Event,
                    Entertainment, Motivasi, Lifestyle, Berita, atau Corporate.</p>
                <div
                    class="hidden md:block absolute top-1/2 -right-4 translate-x-1/2 -translate-y-1/2 text-primary/30 z-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </div>
            </div>
            <!-- Step 2 -->
            <div
                class="relative group p-8 bg-white/5 border border-white/10 rounded-[2.5rem] backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-primary/20 -rotate-3 group-hover:rotate-0 transition-transform">
                    2</div>
                <h3 class="text-2xl font-bold mb-4">Tentukan Tone & Detail</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Pilih tone yang sesuai (Persuasif, Ramah,
                    Profesional, dll) dan isi detail konten yang Anda inginkan.</p>
                <div
                    class="hidden md:block absolute top-1/2 -right-4 translate-x-1/2 -translate-y-1/2 text-primary/30 z-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </div>
            </div>
            <!-- Step 3 -->
            <div
                class="relative group p-8 bg-white/5 border border-white/10 rounded-[2.5rem] backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-primary/20 rotate-6 group-hover:rotate-0 transition-transform">
                    3</div>
                <h3 class="text-2xl font-bold mb-4">Generate & Gunakan</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Dapatkan prompt terstruktur yang siap digunakan
                    di ChatGPT, Gemini, atau AI provider favorit Anda!</p>
            </div>
        </div>
    </div>
</section>

<!-- Template Section -->
<section id="templates" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
            <div class="max-w-xl">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Kategori Konten Lengkap</h2>
                <p class="text-slate-600">Setiap kategori dilengkapi dengan contoh penggunaan dan berbagai pilihan
                    tone yang bisa disesuaikan.</p>
            </div>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4 sm:gap-6">
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🎯</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Promosi / Marketing</h4>
                <p class="text-xs text-slate-500">Poster produk, banner diskon, iklan</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📚</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Edukasi / Informasi</h4>
                <p class="text-xs text-slate-500">Infografis, tips & trik, tutorial</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📢</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Event / Pengumuman</h4>
                <p class="text-xs text-slate-500">Poster event, undangan digital</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🎉</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Hiburan / Fun</h4>
                <p class="text-xs text-slate-500">Meme, komik, konten viral</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">✨</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Motivasi / Inspirasi</h4>
                <p class="text-xs text-slate-500">Quotes motivasi, storytelling</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🍽️</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Lifestyle & Kuliner</h4>
                <p class="text-xs text-slate-500">Review resto, travel guide, OOTD</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📰</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Berita & Update</h4>
                <p class="text-xs text-slate-500">Berita singkat, press release</p>
            </div>
            <div
                class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🏢</div>
                <h4 class="font-bold text-slate-800 text-sm mb-2">Company / Corporate</h4>
                <p class="text-xs text-slate-500">Company profile, internal campaign</p>
            </div>
        </div>
    </div>
</section>

<!-- Example Results Section -->
<section class="py-24 bg-gradient-to-br from-slate-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Hasil Nyata</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Hasil Konten Visual dari Prompt
                Kami</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Lihat berbagai contoh konten yang dihasilkan menggunakan
                RIA Prompt untuk berbagai kategori</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Promo -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/promo.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Promo 2 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/promo2.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Edukasi -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/edukasi.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Edukasi 2 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/edukasi2.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Edukasi 3 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/edukasi3.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Event -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/event.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Event 2 -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/event2.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Hiburan -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/hiburan.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Lifestyle -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/lifestyle.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>

            <!-- Motivasi -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/motivasi.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <!-- Motivasi -->
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/contoh1.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/contoh2.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/contoh3.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/contoh4.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
            <div
                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class=" overflow-hidden">
                    <img src="/images/result/contoh5.png" alt="Contoh Hasil Generate"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI vs Designer Section -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">The Game
                Changer</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold mb-6 leading-tight">Masih Mau Bayar <span
                    class="text-red-500">Jutaan Rupiah</span> <br> Untuk Sekali Desain?</h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">Bandingkan sendiri efisiensi antara menggunakan
                jasa desainer konvensional dengan kekuatan AI di RIA Prompt.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            <!-- Traditional Designer -->
            <div
                class="bg-white/5 border border-red-500/20 p-8 sm:p-12 rounded-[3rem] relative group hover:bg-white/10 transition-all">
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-12 h-12 bg-red-500/20 text-red-500 rounded-2xl flex items-center justify-center text-2xl">
                        🎨
                    </div>
                    <h3 class="text-2xl font-bold">Hire Desainer Profesional</h3>
                </div>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-200">Biaya Mahal</p>
                            <p class="text-sm text-slate-400">Rp 500rb - Rp 2 Juta+ per satu desain konten.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-200">Waktu Tunggu Lama</p>
                            <p class="text-sm text-slate-400">Proses pengerjaan 1-3 hari, belum termasuk revisi.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-200">Ketergantungan Tinggi</p>
                            <p class="text-sm text-slate-400">Harus briefing berulang kali jika hasil belum sesuai.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- RIA Prompt AI -->
            <div
                class="bg-primary/10 border-2 border-primary p-8 sm:p-12 rounded-[3rem] relative group overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex items-center gap-4 mb-8">
                    <div
                        class="w-12 h-12 bg-primary text-white rounded-2xl flex items-center justify-center text-2xl shadow-lg shadow-primary/30">
                        ⚡
                    </div>
                    <h3 class="text-2xl font-bold">RIA Prompt + AI Power</h3>
                </div>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-white">Investasi Sangat Murah</p>
                            <p class="text-sm text-slate-300 italic">Hanya Rp 99rb (Lifetime!) untuk ribuan konten.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-white">Instan & Tanpa Batas</p>
                            <p class="text-sm text-slate-300">Hasil keluar dalam hitungan detik, kapanpun Anda mau.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-white">Kontrol Penuh</p>
                            <p class="text-sm text-slate-300">Anda desainer-nya. Ubah style, tone, dan detail semau
                                Anda.</p>
                        </div>
                    </li>
                </ul>
                <div class="mt-10">
                    <div
                        class="inline-block py-2 px-4 rounded-xl bg-primary text-white font-bold text-sm animate-pulse">
                        Hemat 95% Biaya Opsional!</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefit Section -->
<section class="py-24 bg-slate-50/50 relative overflow-hidden">
    <!-- Subtle background element -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-linear-to-l from-primary/5 to-transparent -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Kenapa RIA
                Prompt?</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                Bukan Sekadar Prompt, Tapi <span class="text-gradient italic">Senjata Rahasia</span> Kreator Modern
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Hentikan kebiasaan menebak-nebak. Mulailah
                membangun konten yang beneran <span class="font-bold text-slate-900 text-sm">menghasilkan</span> dengan
                struktur yang teruji.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Benefit 1 -->
            <div
                class="group p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:border-primary/20 hover:shadow-[0_20px_50px_rgba(39,155,132,0.1)] transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-primary-light text-primary rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Berhenti Menebak</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Jangan buang waktu 2 jam cuma buat nyari 1
                    prompt. Pilih kategori, beresin dalam <span class="text-primary font-bold">detik</span>.</p>
            </div>

            <!-- Benefit 2 -->
            <div
                class="group p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:border-primary/20 hover:shadow-[0_20px_50px_rgba(39,155,132,0.1)] transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-primary-light text-primary rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Struktur Level Pro</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Prompt kami dirancang dengan <span
                        class="text-primary font-bold">Logic Terstruktur</span>. Hasil AI jadi lebih akurat, bukan
                    asal-asalan.</p>
            </div>

            <!-- Benefit 3 -->
            <div
                class="group p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:border-primary/20 hover:shadow-[0_20px_50px_rgba(39,155,132,0.1)] transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-primary-light text-primary rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Inspirasi Tanpa Batas</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Buntu ide? Ada ratusan contoh nyata yang siap
                    kamu <span class="text-primary font-bold">Modifikasi</span> dalam hitungan detik.</p>
            </div>

            <!-- Benefit 4 -->
            <div
                class="group p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:border-primary/20 hover:shadow-[0_20px_50px_rgba(39,155,132,0.1)] transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-primary-light text-primary rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Satu Untuk Semua</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Bisa dipake di ChatGPT, Gemini, Claude, ampe
                    Midjourney. <span class="text-primary font-bold">Universal access</span> tanpa batas platform.
                </p>
            </div>
        </div>
    </div>
</section>





<!-- Testimonials Section -->
<section class="py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Testimonials</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-4">Apa Kata Mereka?</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Ribuan creator telah membuktikan kemudahan membuat konten visual profesional dengan RIA Prompt.</p>
        </div>

        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Sangat terbantu! Hasil AI jadi lebih variatif dengan RIA Prompt."</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Siska Putri</p>
                                <p class="text-[10px] text-slate-500">Beauty Influencer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Investasi terbaik! Prompt terstruktur, AI jadi akurat."</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Budi Santoso</p>
                                <p class="text-[10px] text-slate-500">Digital Marketer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"AI jadi keren dengan prompt yang tepat. Solusi UMKM!"</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Andini Rahma</p>
                                <p class="text-[10px] text-slate-500">Fashion Brand Owner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Budget terbatas? RIA Prompt jadi penyelamat konten profesional!"</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Lina Marlina</p>
                                <p class="text-[10px] text-slate-500">Shop Owner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Prompt engineering sendiri sering meleset. RIA Prompt lebih presisi!"</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Hadi Wijaya</p>
                                <p class="text-[10px] text-slate-500">Digital Strategist</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Game changer! Bikin konten edukasi jadi lebih mudah."</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Maya Kusuma</p>
                                <p class="text-[10px] text-slate-500">Content Creator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 7 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Value luar biasa! Detail, tinggal copy paste dan edit."</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Rizki Pratama</p>
                                <p class="text-[10px] text-slate-500">Freelance Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 8 -->
                <div class="swiper-slide">
                    <div class="bg-slate-50 p-5 rounded-2xl hover:shadow-lg transition-all group h-full flex flex-col">
                        <div class="flex gap-1 text-amber-400 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                @endfor
                        </div>
                        <p class="text-slate-600 text-xs italic flex-grow mb-3">"Social media manager terbantu bikin konten konsisten!"</p>
                        <div class="flex items-center gap-2 mt-auto">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=128&h=128&q=80" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <p class="font-bold text-slate-900 text-xs">Dina Amelia</p>
                                <p class="text-[10px] text-slate-500">Social Media Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination -->
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</section>

<!-- Pricing Section -->

<section id="pricing" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-4">Investasi Terbaik untuk Kreativitas
                Anda</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Akses lifetime dengan harga spesial. Bayar sekali,
                gunakan selamanya!</p>
        </div>

        <div class="max-w-2xl mx-auto">
            <div style="background-color: #279b84;"
                class="p-10 rounded-[3rem] shadow-2xl text-left relative overflow-hidden group">
                <!-- Badge -->
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-bl-full flex items-center justify-center pl-6 pt-4">
                    <svg class="w-12 h-12 text-white group-hover:scale-110 transition-transform" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                </div>

                <div class="relative z-10">
                    <span
                        class="inline-block px-4 py-1 bg-white/20 rounded-full text-white text-xs font-bold uppercase tracking-wider mb-4">Lifetime
                        Access</span>
                    <h3 class="text-2xl font-bold text-white mb-2">RIA Prompt Premium</h3>
                    <p class="text-white/80 text-sm mb-8">Akses selamanya tanpa biaya berlangganan bulanan</p>

                    <div class="flex items-end gap-2 mb-8">
                        <span class="text-6xl font-extrabold text-white">Rp 99rb</span>
                        <span class="text-white/60 font-medium mb-3 line-through">Rp 299rb</span>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 mb-8">
                        <h4 class="text-white font-bold mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Yang Anda Dapatkan:
                        </h4>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Unlimited Generate</strong> - Generate prompt tanpa batas</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Kategori Lengkap</strong> - Akses semua kategori konten</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Semua Tone & Style</strong> - Berbagai pilihan tone untuk setiap
                                    kategori</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Multi AI Support</strong> - Compatible dengan ChatGPT, Gemini, Claude,
                                    dll</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Update Gratis</strong> - Dapatkan fitur dan kategori baru tanpa biaya
                                    tambahan</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Priority Support</strong> - Dukungan prioritas dari tim kami</span>
                            </li>
                        </ul>
                    </div>

                    <a href="/checkout" style="background-color: white; color: #279b84;"
                        class="block w-full text-center py-5 font-bold rounded-2xl hover:bg-slate-50 transition-all transform active:scale-95 shadow-xl text-lg">
                        Dapatkan Akses Lifetime Sekarang
                    </a>

                    <p class="text-center text-white/60 text-xs mt-4">
                        💳 Pembayaran aman & terpercaya • 🔒 Garansi 7 hari uang kembali
                    </p>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-12 text-center">
                <p class="text-slate-500 text-sm mb-4">Dipercaya oleh 5,000+ content creators</p>
                <div class="flex justify-center items-center gap-8 flex-wrap">
                    <div class="flex items-center gap-2 text-slate-600">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm font-semibold">Pembayaran Aman</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm font-semibold">Akses Instant</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm font-semibold">Garansi 7 Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section id="cta" class="py-32 relative overflow-hidden">
    <!-- SVG Pattern -->
    <div
        class="absolute inset-0 opacity-[0.03] -z-10 bg-[radial-gradient(#279b84_1.5px,transparent_1.5px)] [background-size:32px_32px]">
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl sm:text-6xl font-extrabold text-slate-900 mb-8 leading-[1.2]">Buat Konten Visual
            Berkualitas <span class="text-primary italic">Dengan Mudah</span></h2>
        <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">Gabung dengan ribuan creator yang
            sudah menggunakan RIA Prompt untuk menghasilkan konten profesional dengan cepat dan efisien.</p>

        <a href="/register"
            class="inline-flex items-center justify-center bg-primary text-white px-12 py-5 rounded-full text-xl font-bold hover:bg-primary-dark transition-all shadow-2xl shadow-primary/30 active:scale-95 mb-8">
            Mulai Secara Gratis Sekarang
        </a>

        <div class="flex items-center justify-center gap-6">
            <div class="flex -space-x-3 overflow-hidden">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                    alt="">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
            </div>
            <div class="text-sm text-slate-500">
                <span class="font-bold text-slate-900 italic">5,000+</span> creator telah bergabung
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-24 bg-slate-50 border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Help Center</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-6">Pusat Bantuan & FAQ</h2>
            <p class="text-slate-600 text-lg mb-16">Temukan jawaban untuk semua pertanyaan Anda tentang RIA Prompt.
            </p>
        </div>

        <div class="space-y-4" id="faqList">
            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apa itu RIA
                        Prompt?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    RIA Prompt adalah platform pembangunan prompt terstruktur untuk membantu Anda menghasilkan
                    konten visual berkualitas tinggi di berbagai platform AI (seperti Midjourney, DALL-E, ChatGPT)
                    tanpa perlu keahlian teknis khusus.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Bagaimana
                        cara menggunakannya?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    Cukup pilih kategori konten (misal: Marketing), pilih tone yang diinginkan, isi detail konten
                    Anda, dan RIA Prompt akan membuatkan prompt terstruktur yang siap Anda copy-paste ke AI favorit
                    Anda.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apakah ini
                        sistem berlangganan?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    Tidak! Kami menawarkan model "Lifetime Access". Anda cukup membayar sekali (Rp 99rb saat promo)
                    dan dapat menikmati akses premium selamanya tanpa biaya bulanan.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">AI apa saja
                        yang didukung?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    RIA Prompt bersifat universal. Prompt yang dihasilkan dioptimalkan untuk Midjourney, DALL-E 3,
                    Stable Diffusion, Leonardo AI, serta LLM seperti ChatGPT, Gemini, dan Claude.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apakah bisa
                        digunakan di HP?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    Tentu! RIA Prompt responsif penuh. Anda bisa membukanya melalui browser di smartphone Anda dan
                    langsung menyalin prompt di sana.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Metode
                        pembayaran apa saja?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    Kami mendukung pembayaran melalui Transfer Bank (Virtual Account), QRIS (Gopay, OVO, Dana,
                    LinkAja), dan Kartu Kredit melalui payment gateway terpercaya.
                </div>
            </div>

            <div
                class="faq-item bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all hover:shadow-md">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                    <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apakah ada
                        jaminan uang kembali?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed hidden">
                    Ya, kami memberikan jaminan kepuasan. Jika Anda merasa layanan kami tidak sesuai harapan dalam 7
                    hari pertama, Anda dapat mengajukan refund penuh.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper for Testimonials
    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // FAQ Accordion Logic
    document.querySelectorAll('.faq-item button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            // Toggle current item
            const isHidden = content.classList.contains('hidden');

            // Close other items
            document.querySelectorAll('.faq-item div').forEach(div => {
                if (div !== content && div.classList.contains('pb-5')) {
                    div.classList.add('hidden');
                }
            });
            document.querySelectorAll('.faq-item svg').forEach(svg => {
                if (svg !== icon && svg.classList.contains('transition-transform')) {
                    svg.classList.remove('rotate-180');
                }
            });

            if (isHidden) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });
    });


    // Simple bounce horizontal animation
    const style = document.createElement('style');
    style.innerHTML = `
            @keyframes bounce-horizontal {
                0%, 100% { transform: translateX(0); }
                50% { transform: translateX(5px); }
            }
            .animate-bounce-horizontal {
                animation: bounce-horizontal 1s infinite;
            }
            @keyframes bounce-slow {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }
            .animate-bounce-slow {
                animation: bounce-slow 3s infinite;
            }
        `;
    document.head.appendChild(style);
</script>
@endsection
</body>

</html>