@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://unpkg.com/@lucide/web-icons"></script>
<style>
    .hero-grid-container {
        mask-image: radial-gradient(circle at center, black, transparent 85%);
    }

    .hero-grid-subtle {
        background-image:
            linear-gradient(to right, rgba(39, 155, 132, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(39, 155, 132, 0.1) 1px, transparent 1px);
        background-size: 80px 80px;
    }

    .hero-grid-primary {
        background-image:
            linear-gradient(to right, rgba(39, 155, 132, 0.2) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(39, 155, 132, 0.2) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    .hero-dots {
        background-image: radial-gradient(rgba(39, 155, 132, 0.3) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    @keyframes grid-move {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(10px, 10px);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    .animate-grid {
        animation: grid-move 20s ease-in-out infinite;
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

    /* Testimonial - Equal height cards */
    .testimonialSwiper .swiper-slide {
        height: 100%;
    }

    /* Testimonial Swiper Pagination - Visible & Styled */
    .testimonialSwiper .swiper-pagination {
        position: relative !important;
        margin-top: 2rem !important;
        bottom: auto !important;
    }

    .testimonialSwiper .swiper-pagination-bullet {
        width: 12px !important;
        height: 12px !important;
        background: #cbd5e1 !important;
        opacity: 1 !important;
        transition: all 0.3s ease;
    }

    .testimonialSwiper .swiper-pagination-bullet-active {
        background: var(--primary) !important;
        width: 32px !important;
        border-radius: 6px !important;
    }

    /* Benefit Cards - Premium Design */
    .benefit-card {
        position: relative;
        background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.95) 100%);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255,255,255,0.8);
        box-shadow: 0 4px 24px rgba(0,0,0,0.06), 0 0 0 1px rgba(0,0,0,0.03), inset 0 1px 0 rgba(255,255,255,0.8);
    }
    .benefit-card:hover {
        box-shadow: 0 30px 60px -15px rgba(39,155,132,0.3), 0 0 0 2px rgba(39,155,132,0.15), inset 0 1px 0 rgba(255,255,255,1);
        border-color: rgba(39,155,132,0.2);
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section id="home" class="pt-32 pb-16 sm:pt-48 sm:pb-32 overflow-hidden relative">
    <!-- Enhanced Background Grid Layers -->
    <div class="absolute inset-0 -z-10 overflow-hidden hero-grid-container px-4">
        <div class="absolute inset-[-100px] hero-grid-subtle opacity-50"></div>
        <div class="absolute inset-[-100px] hero-grid-primary opacity-70 animate-grid"></div>
        <div class="absolute inset-[-100px] hero-dots opacity-40"></div>
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
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
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
                <a href="#hasil-generate"
                    class="w-full sm:w-auto bg-white border-2 border-slate-100 text-slate-700 px-8 py-4 rounded-full text-lg font-bold hover:border-primary hover:text-primary transition-all active:scale-95 flex items-center justify-center gap-2">
                    Lihat Hasil Generate
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
                        <p class="text-sm text-slate-400 font-bold uppercase tracking-wider">Content Hub</p>
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
                        <p class="text-sm text-slate-400 font-bold uppercase tracking-wider">Success Rate</p>
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
                        <p class="text-sm text-slate-400 font-bold uppercase tracking-wider">Speed Optimized
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
<section id="hasil-generate" class="py-24 bg-gradient-to-br from-slate-50 to-white">
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
            <a href="/images/result/promo.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/promo.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Promo 2 -->
            <a href="/images/result/p-1.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/p-1.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Edukasi -->
            <a href="/images/result/edukasi.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/edukasi.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Edukasi 2 -->
            <a href="/images/result/edukasi2.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/edukasi2.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Edukasi 3 -->
            <a href="/images/result/edukasi3.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/edukasi3.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Event -->
            <a href="/images/result/event.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/event.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Event 2 -->
            <a href="/images/result/event2.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/event2.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Hiburan -->
            <a href="/images/result/hiburan.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/hiburan.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Lifestyle -->
            <a href="/images/result/lifestyle.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/lifestyle.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <!-- Motivasi -->
            <a href="/images/result/p-3.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/p-3.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>

            <a href="/images/result/contoh1.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/contoh1.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
            <a href="/images/result/contoh2.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/contoh2.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
            <a href="/images/result/contoh3.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/contoh3.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
            <a href="/images/result/p-2.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/p-2.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
            <a href="/images/result/contoh5.png" class="glightbox" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/contoh5.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
            <a href="/images/result/contoh4.png" class="glightbox md:hidden" data-gallery="hasil-generate">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer">
                    <div class="overflow-hidden">
                        <img src="/images/result/contoh4.png" alt="Contoh Hasil Generate"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </a>
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
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-red-500/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-slate-200">Revisi = Biaya Tambah</p>
                            <p class="text-sm text-slate-400">Setiap revisi sering dikenakan biaya ekstra.</p>
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
                            <p class="font-bold text-slate-200">Tidak Scalable</p>
                            <p class="text-sm text-slate-400">Butuh hire banyak desainer untuk volume konten besar.</p>
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
                            <p class="font-bold text-slate-200">Jam Kerja Terbatas</p>
                            <p class="text-sm text-slate-400">Desainer punya jam kerja, deadline bisa molor.</p>
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
                            <p class="text-sm text-slate-300 italic">Hanya Rp 110rb (Lifetime!) untuk ribuan konten.
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
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-1">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-white">Revisi Unlimited</p>
                            <p class="text-sm text-slate-300">Edit sendiri kapan saja, tanpa biaya tambahan.</p>
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
                            <p class="font-bold text-white">Scale Tanpa Batas</p>
                            <p class="text-sm text-slate-300">Buat puluhan bahkan ratusan konten dalam sehari.</p>
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
                            <p class="font-bold text-white">Tersedia 24/7</p>
                            <p class="text-sm text-slate-300">Buka kapan saja, bahkan tengah malam. Tanpa antre.</p>
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
<section class="py-28 relative overflow-hidden bg-white">
    <div class="absolute inset-0 -z-10 opacity-40" style="background-image: radial-gradient(rgba(39,155,132,0.08) 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 py-2 px-5 rounded-full bg-primary/10 text-primary font-bold tracking-widest uppercase text-xs mb-6 border border-primary/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Cocok Untuk Siapa?
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-5 leading-tight">
                Semua yang <span class="text-gradient italic">Butuh Konten</span> Setiap Hari
            </h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg">Dari HR, admin sosmed, UMKM, sampai kreator — semua punya use case-nya sendiri di sini.</p>
        </div>

        <!-- Use Case Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            <!-- 1 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">📢</div>
                <div>
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider">Promosi & Iklan</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Flash Sale & Diskon</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Generate visual promo harga coret, countdown sale, dan banner diskon yang langsung menarik perhatian.</p>
                </div>
            </div>

            <!-- 2 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">💼</div>
                <div>
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">HR & Rekrutmen</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Poster Lowongan Kerja</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Buat visual lowongan yang eye-catching di LinkedIn & Instagram tanpa perlu skill desain sama sekali.</p>
                </div>
            </div>

            <!-- 3 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">📱</div>
                <div>
                    <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider">Admin Sosmed</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Konten Feed Harian</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Kelola banyak akun sekaligus. Produksi konten carousel, quote, dan reels caption 3x lebih cepat.</p>
                </div>
            </div>

            <!-- 4 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-violet-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">🎓</div>
                <div>
                    <span class="text-xs font-bold text-violet-600 uppercase tracking-wider">Edukasi & Kursus</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Infografis & Tips</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Buat konten edukasi, infografis tips, dan materi kursus yang informatif dan enak dilihat.</p>
                </div>
            </div>

            <!-- 5 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-rose-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">🎉</div>
                <div>
                    <span class="text-xs font-bold text-rose-600 uppercase tracking-wider">Event & Acara</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Poster & Undangan Digital</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Webinar, seminar, gathering, atau launching produk — semua ada template posternya, tinggal generate.</p>
                </div>
            </div>

            <!-- 6 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">🍽️</div>
                <div>
                    <span class="text-xs font-bold text-orange-600 uppercase tracking-wider">Kuliner & F&B</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Menu & Promo Restoran</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Visual menu baru, promo paket makan, atau konten behind-the-scenes dapur yang bikin ngiler.</p>
                </div>
            </div>

            <!-- 7 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-cyan-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">🏢</div>
                <div>
                    <span class="text-xs font-bold text-cyan-600 uppercase tracking-wider">Corporate</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Company Profile & Branding</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Konten profil perusahaan, pencapaian milestone, dan campaign internal yang terlihat profesional.</p>
                </div>
            </div>

            <!-- 8 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">✨</div>
                <div>
                    <span class="text-xs font-bold text-yellow-600 uppercase tracking-wider">Motivasi & Lifestyle</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Quote & Konten Inspiratif</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Quote motivasi, konten self-improvement, dan lifestyle yang relate dengan audiens kamu.</p>
                </div>
            </div>

            <!-- 9 -->
            <div class="group flex items-start gap-4 p-6 rounded-2xl border border-slate-100 bg-slate-50 hover:bg-white hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center shrink-0 text-2xl group-hover:scale-110 transition-transform">🛍️</div>
                <div>
                    <span class="text-xs font-bold text-pink-600 uppercase tracking-wider">E-Commerce & Toko</span>
                    <h3 class="font-extrabold text-slate-900 mt-1 mb-1">Launching Produk Baru</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Teaser produk, unboxing visual, testimoni pelanggan, dan konten review yang mendorong konversi.</p>
                </div>
            </div>

        </div>
    </div>
</section>





<!-- Benefit Section -->
<section class="py-28 relative overflow-hidden bg-white">
    <div class="absolute inset-0 -z-10" style="background-image: radial-gradient(rgba(39,155,132,0.06) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-indigo-500/5 rounded-full blur-[100px] translate-x-1/3 translate-y-1/3 -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 py-2 px-5 rounded-full bg-primary/10 text-primary font-bold tracking-widest uppercase text-xs mb-6 border border-primary/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Cocok Untuk Siapa?
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-5 leading-tight">
                Satu Tool, <span class="text-gradient italic">Ribuan Use Case</span> Nyata
            </h2>
            <p class="text-slate-500 max-w-2xl mx-auto text-lg">Dari perusahaan besar, UMKM, kreator konten, sampai freelancer — semua punya kebutuhan konten harian yang bisa diselesaikan dengan RIA Prompt.</p>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 auto-rows-auto">

            <!-- Featured Card - Promosi (spans 2 cols) -->
            <div class="xl:col-span-2 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-100 p-8 hover:shadow-xl hover:shadow-amber-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-8 -right-8 text-[120px] opacity-10 group-hover:opacity-20 transition-opacity select-none">📢</div>
                <span class="inline-block text-xs font-bold text-amber-600 uppercase tracking-wider bg-amber-100 px-3 py-1 rounded-full mb-4">Promosi & Iklan</span>
                <h3 class="text-xl font-extrabold text-slate-900 mb-2">Flash Sale, Diskon & Iklan Produk</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Generate visual promo harga coret, countdown sale, banner diskon, dan iklan produk yang langsung menarik perhatian — tanpa perlu desainer.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-white/80 text-amber-700 px-3 py-1 rounded-full border border-amber-200">Banner Diskon</span>
                    <span class="text-xs bg-white/80 text-amber-700 px-3 py-1 rounded-full border border-amber-200">Flash Sale</span>
                    <span class="text-xs bg-white/80 text-amber-700 px-3 py-1 rounded-full border border-amber-200">Iklan Produk</span>
                </div>
            </div>

            <!-- HR & Rekrutmen -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 p-7 hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">💼</div>
                <span class="inline-block text-xs font-bold text-blue-600 uppercase tracking-wider bg-blue-100 px-3 py-1 rounded-full mb-4">HR & Rekrutmen</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Poster Lowongan Kerja</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Visual lowongan eye-catching untuk LinkedIn & Instagram. Tanpa skill desain, langsung profesional.</p>
            </div>

            <!-- Admin Sosmed -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 p-7 hover:shadow-xl hover:shadow-emerald-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">📱</div>
                <span class="inline-block text-xs font-bold text-emerald-600 uppercase tracking-wider bg-emerald-100 px-3 py-1 rounded-full mb-4">Admin Sosmed</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Konten Feed Harian</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Kelola banyak akun sekaligus. Carousel, quote, reels caption — 3x lebih cepat dari biasanya.</p>
            </div>

            <!-- Edukasi & Kursus -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-violet-50 to-purple-50 border border-violet-100 p-7 hover:shadow-xl hover:shadow-violet-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🎓</div>
                <span class="inline-block text-xs font-bold text-violet-600 uppercase tracking-wider bg-violet-100 px-3 py-1 rounded-full mb-4">Edukasi & Kursus</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Infografis & Materi Belajar</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Konten edukasi, infografis tips, dan materi kursus yang informatif dan enak dilihat.</p>
            </div>

            <!-- Event & Acara -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-rose-50 to-pink-50 border border-rose-100 p-7 hover:shadow-xl hover:shadow-rose-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🎉</div>
                <span class="inline-block text-xs font-bold text-rose-600 uppercase tracking-wider bg-rose-100 px-3 py-1 rounded-full mb-4">Event & Acara</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Poster & Undangan Digital</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Webinar, seminar, gathering, launching produk — semua ada template posternya, tinggal generate.</p>
            </div>

            <!-- E-Commerce - Featured (spans 2 cols) -->
            <div class="xl:col-span-2 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-pink-50 to-fuchsia-50 border border-pink-100 p-8 hover:shadow-xl hover:shadow-pink-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-8 -right-8 text-[120px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🛍️</div>
                <span class="inline-block text-xs font-bold text-pink-600 uppercase tracking-wider bg-pink-100 px-3 py-1 rounded-full mb-4">E-Commerce & Toko Online</span>
                <h3 class="text-xl font-extrabold text-slate-900 mb-2">Launching Produk & Konten Toko</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Teaser produk baru, unboxing visual, konten testimoni pelanggan, dan review yang mendorong konversi penjualan secara konsisten.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-white/80 text-pink-700 px-3 py-1 rounded-full border border-pink-200">Product Teaser</span>
                    <span class="text-xs bg-white/80 text-pink-700 px-3 py-1 rounded-full border border-pink-200">Testimoni</span>
                    <span class="text-xs bg-white/80 text-pink-700 px-3 py-1 rounded-full border border-pink-200">Review Visual</span>
                </div>
            </div>

            <!-- Kuliner & F&B -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-orange-50 to-red-50 border border-orange-100 p-7 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🍽️</div>
                <span class="inline-block text-xs font-bold text-orange-600 uppercase tracking-wider bg-orange-100 px-3 py-1 rounded-full mb-4">Kuliner & F&B</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Menu & Promo Restoran</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Visual menu baru, promo paket makan, konten behind-the-scenes dapur yang bikin ngiler.</p>
            </div>

            <!-- Corporate -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-cyan-50 to-sky-50 border border-cyan-100 p-7 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🏢</div>
                <span class="inline-block text-xs font-bold text-cyan-600 uppercase tracking-wider bg-cyan-100 px-3 py-1 rounded-full mb-4">Corporate & Perusahaan</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Company Profile & Branding</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Konten profil perusahaan, milestone, dan campaign internal yang terlihat profesional.</p>
            </div>

            <!-- Motivasi & Lifestyle -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-yellow-50 to-amber-50 border border-yellow-100 p-7 hover:shadow-xl hover:shadow-yellow-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">✨</div>
                <span class="inline-block text-xs font-bold text-yellow-600 uppercase tracking-wider bg-yellow-100 px-3 py-1 rounded-full mb-4">Motivasi & Lifestyle</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Quote & Konten Inspiratif</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Quote motivasi, konten self-improvement, dan lifestyle yang relate dengan audiens kamu.</p>
            </div>

            <!-- Property & Real Estate -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-lime-50 to-green-50 border border-lime-100 p-7 hover:shadow-xl hover:shadow-lime-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🏠</div>
                <span class="inline-block text-xs font-bold text-lime-600 uppercase tracking-wider bg-lime-100 px-3 py-1 rounded-full mb-4">Properti & Real Estate</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Listing & Promo Properti</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Visual listing rumah, apartemen, dan ruko yang menarik calon pembeli di media sosial.</p>
            </div>

            <!-- Kesehatan & Klinik - Featured (spans 2 cols) -->
            <div class="xl:col-span-2 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-teal-50 to-emerald-50 border border-teal-100 p-8 hover:shadow-xl hover:shadow-teal-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-8 -right-8 text-[120px] opacity-10 group-hover:opacity-20 transition-opacity select-none">🏥</div>
                <span class="inline-block text-xs font-bold text-teal-600 uppercase tracking-wider bg-teal-100 px-3 py-1 rounded-full mb-4">Kesehatan & Klinik</span>
                <h3 class="text-xl font-extrabold text-slate-900 mb-2">Edukasi Kesehatan & Promo Layanan</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Konten edukasi kesehatan, promo paket layanan klinik, jadwal dokter, dan tips hidup sehat yang mudah dipahami pasien.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-white/80 text-teal-700 px-3 py-1 rounded-full border border-teal-200">Edukasi Pasien</span>
                    <span class="text-xs bg-white/80 text-teal-700 px-3 py-1 rounded-full border border-teal-200">Promo Layanan</span>
                    <span class="text-xs bg-white/80 text-teal-700 px-3 py-1 rounded-full border border-teal-200">Tips Kesehatan</span>
                </div>
            </div>

            <!-- Travel & Wisata -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-sky-50 to-blue-50 border border-sky-100 p-7 hover:shadow-xl hover:shadow-sky-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">✈️</div>
                <span class="inline-block text-xs font-bold text-sky-600 uppercase tracking-wider bg-sky-100 px-3 py-1 rounded-full mb-4">Travel & Wisata</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Paket Tour & Destinasi</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Konten paket wisata, destinasi hits, dan travel guide yang bikin followers pengen langsung booking.</p>
            </div>

            <!-- Fashion & Beauty -->
            <div class="group relative overflow-hidden rounded-3xl bg-gradient-to-br from-fuchsia-50 to-purple-50 border border-fuchsia-100 p-7 hover:shadow-xl hover:shadow-fuchsia-500/10 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -bottom-6 -right-6 text-[90px] opacity-10 group-hover:opacity-20 transition-opacity select-none">👗</div>
                <span class="inline-block text-xs font-bold text-fuchsia-600 uppercase tracking-wider bg-fuchsia-100 px-3 py-1 rounded-full mb-4">Fashion & Beauty</span>
                <h3 class="text-lg font-extrabold text-slate-900 mb-2">Lookbook & Promo Koleksi</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Visual OOTD, lookbook koleksi terbaru, dan konten beauty tutorial yang estetik dan on-trend.</p>
            </div>

          
        </div>

        <!-- Bottom CTA -->
        <div class="mt-16 text-center">
            <p class="text-slate-500 text-base mb-6">Dan masih banyak lagi use case lainnya yang bisa kamu eksplorasi...</p>
            <a href="#cta" class="inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary-dark transition-all shadow-lg shadow-primary/20 active:scale-95">
                Mulai Sekarang — Gratis Coba
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 relative overflow-hidden bg-slate-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-primary/10 text-primary text-xs font-bold tracking-widest uppercase mb-6 border border-primary/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Testimonials
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-4">Apa Kata Mereka?</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">Copy prompt, paste ke ChatGPT, langsung beres. Begitu simpel workflow-nya.</p>
        </div>

        <!-- Swiper -->
        <div class="swiper testimonialSwiper pb-12" style="height: 220px;">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Pengen design cepet buat konten. Tinggal copy prompt dari RIA, paste ke ChatGPT, langsung beres!"</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=450&h=450&auto=format&fit=crop" alt="Andi Pratama" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Andi Pratama</h4>
                                <p class="text-sm text-slate-600 font-medium">Digital Marketer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Gak perlu ribet. Prompt tinggal copy-paste ke ChatGPT, langsung hasil design keluar. Cepet banget!"</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=450&h=450&auto=format&fit=crop" alt="Siti Rahma" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Siti Rahma</h4>
                                <p class="text-sm text-slate-600 font-medium">Content Creator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Workflow-nya simpel: pilih prompt, copy, masukin ke ChatGPT, langsung beres. Mau design cepet ya gini caranya."</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=450&h=450&auto=format&fit=crop" alt="Budi Santoso" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Budi Santoso</h4>
                                <p class="text-sm text-slate-600 font-medium">Entrepreneur</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Dulu bingung mau design gimana. Sekarang tinggal copy prompt ke ChatGPT, langsung jadi. Super praktis!"</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=450&h=450&auto=format&fit=crop" alt="Rina Wati" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Rina Wati</h4>
                                <p class="text-sm text-slate-600 font-medium">Social Media Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Mau design cepet? Copy prompt dari sini, paste ke ChatGPT, langsung selesai. Gak perlu skill desain!"</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=450&h=450&auto=format&fit=crop" alt="Dewi Kusuma" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Dewi Kusuma</h4>
                                <p class="text-sm text-slate-600 font-medium">Freelance Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="swiper-slide">
                    <div class="group relative bg-white p-5 rounded-xl border border-slate-200 w-full h-full flex flex-col hover:shadow-md overflow-hidden transition-all duration-300">
                        <div class="absolute top-3 right-3 text-primary/20 group-hover:text-primary/40 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-0.5 text-amber-400 mb-1.5">
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                            <lucide-icon name="star" class="w-3.5 h-3.5 fill-current"></lucide-icon>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed mb-3 italic relative z-10 line-clamp-3">"Tinggal salin prompt, masukkan ke ChatGPT, design langsung jadi. Cepet dan gampang banget!"</p>
                        <div class="mt-auto flex items-center gap-2.5 pt-3 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-lg bg-white/80 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 shrink-0">
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=450&h=450&auto=format&fit=crop" alt="Fajar Nugroho" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-slate-900 text-base truncate">Fajar Nugroho</h4>
                                <p class="text-sm text-slate-600 font-medium">Startup Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination - Visible -->
            <div class="swiper-pagination !relative !mt-8"></div>
        </div>
    </div>
</section>

<!-- Pricing Section -->

<section id="pricing" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-800 text-sm font-bold mb-6 border border-amber-200">
                <span>⚠️</span> Harga bisa berubah sewaktu-waktu. Dapatkan sekarang!
            </div>
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

                    <div class="flex items-end gap-2 mb-4">
                        <span class="text-6xl font-extrabold text-white">Rp 110rb</span>
                        <span class="text-white/60 font-medium mb-3 line-through">Rp 299rb</span>
                    </div>
                    <p class="text-amber-200 text-sm font-semibold mb-8">⏰ Harga promo dapat berubah kapan saja. Lock harga sekarang!</p>

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

                    <button type="button" onclick="openLeadModal()" style="background-color: white; color: #279b84;"
                        class="block w-full text-center py-5 font-bold rounded-2xl hover:bg-slate-50 transition-all transform active:scale-95 shadow-xl text-lg">
                        Dapatkan Akses Lifetime Sekarang
                    </button>

                    <p class="text-center text-white/60 text-xs mt-4">
                        💳 Pembayaran aman & terpercaya • 🔒 Akses lifetime
                    </p>
                    <p class="text-center text-amber-200/90 text-xs mt-2 font-medium">
                        Harga dapat naik sewaktu-waktu. Amankan harga promo sekarang!
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

        <button type="button" onclick="openLeadModal()"
            class="inline-flex items-center justify-center bg-primary text-white px-12 py-5 rounded-full text-xl font-bold hover:bg-primary-dark transition-all shadow-2xl shadow-primary/30 active:scale-95 mb-8">
            Daftar & Mulai Sekarang
        </button>

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

            
        </div>
    </div>
</section>

<!-- Lead Modal -->
<div id="leadModal" class="fixed inset-0 z-50 overflow-y-auto {{ $errors->any() ? '' : 'hidden' }}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="fixed inset-0 bg-slate-900/60 transition-opacity" onclick="closeLeadModal()"></div>
        <div class="relative inline-block w-full max-w-lg p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-2xl rounded-2xl">
            <div class="flex items-center justify-between mb-6">
                <h3 id="modal-title" class="text-xl font-bold text-slate-900">Dapatkan Akses Lifetime</h3>
                <button type="button" onclick="closeLeadModal()" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <p class="text-slate-600 text-sm mb-6">Isi data berikut untuk melanjutkan ke proses pembayaran.</p>
            @if($errors->any())
            <div class="mb-4 p-4 rounded-xl bg-red-50 border border-red-200">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('leads.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="lead_name" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="lead_name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-3 rounded-xl border @error('name') border-red-500 @else border-slate-200 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                        placeholder="Masukkan nama lengkap">
                    @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lead_email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                    <input type="email" id="lead_email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 rounded-xl border @error('email') border-red-500 @else border-slate-200 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                        placeholder="nama@email.com">
                    @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lead_phone" class="block text-sm font-medium text-slate-700 mb-1">Nomor HP</label>
                    <input type="tel" id="lead_phone" name="phone" value="{{ old('phone') }}"
                        class="w-full px-4 py-3 rounded-xl border @error('phone') border-red-500 @else border-slate-200 @enderror focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                        placeholder="08xxxxxxxxxx">
                    @error('phone')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Payment Methods Section -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-3">Pilih Metode Pembayaran</label>
                    <div class="space-y-3 max-h-64 overflow-y-auto">
                        @if(isset($payments) && $payments->successful())
                            @foreach($payments->json('data') as $payment)
                                <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-lg hover:border-primary hover:bg-primary/5 cursor-pointer transition-all">
                                    <input type="radio" name="payment_method" value="{{ $payment['code'] }}" class="w-4 h-4 text-primary focus:ring-primary" required>
                                    <img src="{{ $payment['icon_url'] }}" alt="{{ $payment['name'] }}" class="w-12 h-12 object-contain">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-slate-900">{{ $payment['name'] }}</p>
                                     
                                    </div>
                                </label>
                            @endforeach
                        @else
                            <p class="text-sm text-slate-500 text-center py-4">Metode pembayaran tidak tersedia</p>
                        @endif
                    </div>
                </div>

                <button type="submit"
                    class="w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-primary-dark transition-all shadow-lg shadow-primary/25">
                    Lanjut ke Pembayaran
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6285174221776" target="_blank" rel="noopener noreferrer"
    class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-[#25D366] text-white px-4 py-3 rounded-full shadow-2xl shadow-green-500/40 hover:bg-[#20b858] hover:shadow-green-500/60 hover:scale-105 transition-all duration-300 group"
    aria-label="Chat via WhatsApp">
    <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="text-sm font-bold pr-1">Chat Kami</span>
</a>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    // Initialize GLightbox for image gallery
    document.addEventListener('DOMContentLoaded', function() {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            autoplayVideos: true,
        });
    });

    // Initialize Swiper for Testimonials
    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
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
                spaceBetween: 24,
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


    // Lead Modal
    function openLeadModal() {
        document.getElementById('leadModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeLeadModal() {
        document.getElementById('leadModal').classList.add('hidden');
        document.body.style.overflow = '';
    }
    @if($errors->any())
    document.body.style.overflow = 'hidden';
    @endif
    document.getElementById('leadModal').addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeLeadModal();
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