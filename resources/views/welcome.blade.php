<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIA Prompt - AI Image Prompt Builder Profesional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@lucide/web-icons"></script>
    <style>
        :root {
            --primary: #279b84;
            --primary-dark: #1e7d6a;
            --primary-light: #e9f5f3;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-primary { background-color: var(--primary); }
        .text-primary { color: var(--primary); }
        .border-primary { border-color: var(--primary); }
        .hover\:bg-primary-dark:hover { background-color: var(--primary-dark); }
        .bg-primary-light { background-color: var(--primary-light); }
    </style>
</head>
<body class="antialiased text-slate-900 bg-white">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="text-xl font-extrabold tracking-tight text-slate-900">RIA <span class="text-primary tracking-normal">Prompt</span></span>
                </div>
                
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#home" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Home</a>
                    <a href="#templates" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Templates</a>
                    <a href="#features" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Features</a>
                    <a href="#pricing" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Pricing</a>
                    <a href="#faq" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">FAQ</a>
                </nav>

                <div class="flex items-center gap-4">
                    <a href="/login" class="hidden sm:block text-sm font-bold text-slate-700 hover:text-primary transition-colors">Login</a>
                    <a href="#cta" class="bg-primary text-white px-5 py-2.5 rounded-full text-sm font-bold hover:bg-primary-dark transition-all shadow-lg shadow-primary/25 active:scale-95">Start Generating Prompt</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-16 sm:pt-48 sm:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <!-- Decorative blobs -->
            <div class="absolute -top-24 -left-20 w-72 h-72 bg-primary/5 rounded-full blur-3xl -z-10"></div>
            <div class="absolute top-40 -right-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl -z-10"></div>

            <div class="max-w-3xl mx-auto">
                <span class="inline-block py-1 px-4 rounded-full bg-primary-light text-primary text-xs font-bold tracking-wider uppercase mb-6">#1 AI Prompt Builder for Creators</span>
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                    Buat Prompt AI Image <span class="text-primary">Profesional</span> Tanpa Ribet
                </h1>
                <p class="text-lg sm:text-xl text-slate-600 leading-relaxed mb-10 px-4">
                    Cukup isi form dan pilih template. Sistem kami secara otomatis merangkai prompt yang optimal untuk Midjourney, Stable Diffusion, dan DALL-E.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#cta" class="w-full sm:w-auto bg-primary text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-primary-dark transition-all shadow-xl shadow-primary/30 active:scale-95">Generate Prompt Sekarang</a>
                    <a href="#templates" class="w-full sm:w-auto bg-white border-2 border-slate-100 text-slate-700 px-8 py-4 rounded-full text-lg font-bold hover:border-primary hover:text-primary transition-all active:scale-95 flex items-center justify-center gap-2">
                        Lihat Template
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="mt-20 relative mx-auto max-w-5xl group">
                <div class="absolute inset-0 bg-primary/20 blur-[100px] -z-10 opacity-50 group-hover:opacity-70 transition-opacity"></div>
                <div class="bg-white rounded-2xl p-2 shadow-2xl border border-slate-100 overflow-hidden transform group-hover:-translate-y-2 transition-transform duration-500">
                    <img src="{{ asset('images/dashboard-mockup.png') }}" alt="RIA Prompt Dashboard" class="w-full rounded-xl">
                </div>
                <!-- Floating elements -->
                <div class="absolute -bottom-10 -left-10 hidden lg:block animate-bounce-slow">
                    <div class="bg-white p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium">Auto-generated</p>
                            <p class="text-sm font-bold text-slate-800">Prompt Optimized!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Kenapa Membuat Prompt Itu Sulit?</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Kami tahu rasa frustrasi saat hasil AI tidak sesuai dengan apa yang ada di pikiran Anda.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bingung Mulai Dari Mana</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Menghadapi kotak kosong (blank page) tanpa tahu kata kunci apa yang harus dimasukkan.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow md:mt-8">
                    <div class="w-16 h-16 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Gambar Tidak Detail</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Prompt yang terlalu pendek menghasilkan gambar yang flat, blur, dan tidak profesional.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Trial-Error Berjam-jam</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Menghabiskan banyak waktu (dan credit AI) hanya untuk mencoba-coba kombinasi kata.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="features" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-primary/10 rounded-[2rem] -z-10 rotate-3"></div>
                    <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100">
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-primary-light/50 border border-primary/10">
                                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Form-Based Builder</h4>
                                    <p class="text-sm text-slate-600">Cukup jawab pertanyaan simpel seperti "Style apa yang kamu mau?"</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-blue-50 border border-blue-100">
                                <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center flex-shrink-0 text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Ratusan Template</h4>
                                    <p class="text-sm text-slate-600">Mulai dari Portrait hingga Concept Art, semua sudah ada polanya.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-amber-50 border border-amber-100">
                                <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center flex-shrink-0 text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Prompt Terstruktur</h4>
                                    <p class="text-sm text-slate-600">Hasil prompt otomatis menyertakan parameter teknis untuk hasil terbaik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-6">Satu Solusi Untuk Semua Kebutuhan Prompt Anda</h2>
                    <p class="text-lg text-slate-600 mb-8">RIA Prompt dirancang agar SIAPAPUN bisa menjadi AI Prompt Engineer profesional hanya dalam hitungan detik.</p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3 font-semibold text-slate-700">
                            <div class="w-6 h-6 bg-primary/20 text-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            User-friendly interface (Mobile & Desktop)
                        </li>
                        <li class="flex items-center gap-3 font-semibold text-slate-700">
                            <div class="w-6 h-6 bg-primary/20 text-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            Support berbagai AI Generator (Midjourney, SD, etc.)
                        </li>
                        <li class="flex items-center gap-3 font-semibold text-slate-700">
                            <div class="w-6 h-6 bg-primary/20 text-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            Customizable output sesuai keinginan
                        </li>
                    </ul>
                    <a href="#cta" class="inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-primary-dark transition-all shadow-xl shadow-primary/30 group">
                        Coba RIA Prompt Sekarang
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24 bg-primary text-white overflow-hidden relative">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 text-white">
                <h2 class="text-3xl sm:text-5xl font-extrabold mb-6">Hanya 3 Langkah Untuk Gambar Sempurna</h2>
                <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed">System kami bekerja di balik layar untuk memastikan setiap kata kunci optimal.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="relative group">
                    <div class="w-20 h-20 bg-white/10 group-hover:bg-white text-white group-hover:text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 transition-all duration-300 text-3xl font-black shadow-lg border border-white/20">1</div>
                    <h3 class="text-2xl font-bold mb-4">Pilih Template</h3>
                    <p class="text-white/70 leading-relaxed">Pilih kategori gambar yang ingin kamu buat (Portrait, Anime, landscape, dll).</p>
                    <div class="hidden md:block absolute top-10 -right-6 text-white/20">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
                    </div>
                </div>
                <div class="relative group">
                    <div class="w-20 h-20 bg-white/10 group-hover:bg-white text-white group-hover:text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 transition-all duration-300 text-3xl font-black shadow-lg border border-white/20">2</div>
                    <h3 class="text-2xl font-bold mb-4">Isi Form Prompt</h3>
                    <p class="text-white/70 leading-relaxed">Jawab beberapa kolom simpel tentang subject, mood, dan pencahayaan yang kamu mau.</p>
                    <div class="hidden md:block absolute top-10 -right-6 text-white/20">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
                    </div>
                </div>
                <div class="relative group">
                    <div class="w-20 h-20 bg-white/10 group-hover:bg-white text-white group-hover:text-primary rounded-3xl flex items-center justify-center mx-auto mb-8 transition-all duration-300 text-3xl font-black shadow-lg border border-white/20">3</div>
                    <h3 class="text-2xl font-bold mb-4">Generate & Paste</h3>
                    <p class="text-white/70 leading-relaxed">Salin prompt profesional yang sudah jadi dan tempel di AI image generator favoritmu!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Template Section -->
    <section id="templates" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
                <div class="max-w-xl">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Pilih Sesuai Gayamu</h2>
                    <p class="text-slate-600">Berbagai template siap pakai untuk mempercepat workflow kreasi Anda.</p>
                </div>
                <a href="/templates" class="text-primary font-bold hover:underline flex items-center gap-2">
                    Lihat Semua Template (50+)
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🖼️</div>
                    <h4 class="font-bold text-slate-800 text-sm">Portrait</h4>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">👾</div>
                    <h4 class="font-bold text-slate-800 text-sm">Character</h4>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📦</div>
                    <h4 class="font-bold text-slate-800 text-sm">Product</h4>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">⛩️</div>
                    <h4 class="font-bold text-slate-800 text-sm">Anime</h4>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🎥</div>
                    <h4 class="font-bold text-slate-800 text-sm">Cinematic</h4>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hover:border-primary hover:bg-white hover:shadow-xl hover:shadow-primary/10 transition-all text-center group">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📸</div>
                    <h4 class="font-bold text-slate-800 text-sm">Realistic</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-[3rem] p-8 sm:p-16 relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-br from-primary/10 to-transparent"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-6">Contoh Nyata Magic RIA Prompt</h2>
                        <p class="text-slate-400 text-lg mb-8 leading-relaxed">Lihat bagaimana input yang sangat simpel diubah menjadi prompt yang detail, teknis, dan siap pakai.</p>
                        
                        <div class="space-y-6">
                            <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                                <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3 text-white/50">User Input Form:</p>
                                <p class="text-white font-medium italic">"Seorang kesatria cyberpunk di tengah hujan kota futuristik, style cinematic, lighting neon"</p>
                            </div>
                            <div class="flex justify-center">
                                <svg class="w-8 h-8 text-primary animate-bounce-horizontal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
                            </div>
                            <div class="bg-primary/20 border border-primary/30 rounded-2xl p-6 relative group">
                                <div class="absolute top-3 right-3 text-primary/50 group-hover:text-primary cursor-pointer transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                </div>
                                <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Generated RIA Prompt:</p>
                                <p class="text-white font-mono text-sm leading-relaxed">
                                    A hyper-realistic cinematic portrait of a cybernetic knight standing in the heavy rain of a futuristic 2077 Tokyo city, dramatic neon pink and cyan rim lighting, volumetric fog, sharp focus, 8k resolution, Unreal Engine 5 render, highly detailed armor texture, rainy environment --ar 16:9 --v 6.0
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative hidden lg:block">
                        <div class="bg-white items-center gap-1 justify-center rounded-3xl overflow-hidden shadow-2xl rotate-3 group-hover:rotate-0 transition-all duration-500">
                             <div class="p-2">
                                <div class="bg-slate-200 aspect-[4/5] rounded-2xl flex items-center justify-center text-slate-400 font-bold overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80')">
                                    <!-- This is just a visual placeholder for the result image -->
                                </div>
                             </div>
                             <div class="p-4 bg-white flex justify-between items-center text-xs font-bold text-slate-400 uppercase tracking-widest">
                                <span>Midjourney Output</span>
                                <span class="text-primary">Stunning Result</span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefit Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Mengapa Harus Menggunakan RIA Prompt?</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Dirancang untuk memaksimalkan kreativitas tanpa hambatan teknis yang membosankan.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-primary-light text-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold">Hemat Waktu</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Pangkas waktu berjam-jam trial-error di Discord/Web generator menjadi hanya hitungan detik.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-primary-light text-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold">Akurasi Tinggi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Prompt yang dihasilkan mengikuti format best practice terbaru untuk masing-masing engine AI.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-primary-light text-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-lg font-bold">Gratis Belajar</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Pahami struktur prompt yang baik hanya dengan mengamati hasil generate dari tool ini.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-primary-light text-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold">Update Berkala</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Tim kami selalu menambahkan template dan kategori baru setiap minggunya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-4">Paling Sering Ditanyakan</h2>
            </div>
            
            <div class="space-y-4">
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-slate-100">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                        <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apakah RIA Prompt gratis?</span>
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-primary transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        Anda dapat mencoba RIA Prompt secara gratis. Kami juga menyediakan paket premium bagi user yang membutuhkan akses ke template eksklusif dan jumlah generate tanpa batas.
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-slate-100">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                        <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Apakah ini bekerja untuk Midjourney?</span>
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-primary transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        Sangat bisa! Prompt yang kami hasilkan bahkan sudah dilengkapi parameter khusus seperti --ar (aspect ratio), --v (version), dan negative prompt untuk hasil terbaik.
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-slate-100">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center group">
                        <span class="font-bold text-slate-900 group-hover:text-primary transition-colors">Saya pemula, apakah susah menggunakannya?</span>
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-primary transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        Sama sekali tidak. Anda tidak perlu menghafal keyword teknis. Cukup jawab pertanyaan simpel di form, dan system kami yang akan bekerja merangkai katanya untuk Anda.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section (Preview) -->
    <section id="pricing" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary-light/50 border border-primary/10 rounded-[3rem] p-8 sm:p-16 text-center">
                <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 mb-8">Pilih Paket Kreativitasmu</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-10 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 text-left">
                        <h4 class="text-lg font-bold text-slate-500 mb-2 uppercase tracking-widest">Free Account</h4>
                        <div class="flex items-end gap-1 mb-8">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 0</span>
                            <span class="text-slate-400 font-medium mb-1">/ lifetime</span>
                        </div>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-700">✅ 5 Generate per hari</li>
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-700">✅ 10 Template Dasar</li>
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-700">✅ Akses Komunitas</li>
                        </ul>
                        <a href="/register" class="block w-full text-center py-4 bg-slate-100 text-slate-700 font-bold rounded-2xl hover:bg-slate-200 transition-colors">Daftar Sekarang</a>
                    </div>
                    <div class="bg-slate-900 p-10 rounded-[2rem] shadow-2xl shadow-primary/20 text-left relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-primary rounded-bl-full flex items-center justify-center pl-4 pt-1">
                            <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <h4 class="text-lg font-bold text-primary mb-2 uppercase tracking-widest">Premium Plan</h4>
                        <div class="flex items-end gap-1 mb-8">
                            <span class="text-4xl font-extrabold text-white">Rp 99rb</span>
                            <span class="text-slate-500 font-medium mb-1">/ bulan</span>
                        </div>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-300">✅ Unlimited Generate</li>
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-300">✅ 50+ Exclusive Template</li>
                            <li class="flex items-center gap-3 text-sm font-semibold text-slate-300">✅ Prioritas Fitur Baru</li>
                        </ul>
                        <a href="/checkout" class="block w-full text-center py-4 bg-primary text-white font-bold rounded-2xl hover:bg-primary-dark transition-all transform active:scale-95">Upgrade Ke Premium</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="cta" class="py-32 relative overflow-hidden">
        <!-- SVG Pattern -->
        <div class="absolute inset-0 opacity-[0.03] -z-10 bg-[radial-gradient(#279b84_1.5px,transparent_1.5px)] [background-size:32px_32px]"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-6xl font-extrabold text-slate-900 mb-8 leading-[1.2]">Jangan Biarkan Imajinasimu <span class="text-primary italic">Terbatas</span> Hanya Karena Prompt</h2>
            <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">Gabung dengan ribuan creator lainnya yang sudah meningkatkan kualitas karyanya bersama RIA Prompt.</p>
            
            <a href="/register" class="inline-flex items-center justify-center bg-primary text-white px-12 py-5 rounded-full text-xl font-bold hover:bg-primary-dark transition-all shadow-2xl shadow-primary/30 active:scale-95 mb-8">
                Mulai Secara Gratis Sekarang
            </a>
            
            <div class="flex items-center justify-center gap-6">
                <div class="flex -space-x-3 overflow-hidden">
                   <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                   <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                   <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                   <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="text-sm text-slate-500">
                    <span class="font-bold text-slate-900 italic">5,000+</span> creator telah bergabung
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 py-20 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight text-white">RIA Prompt</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">#1 Form-based AI Prompt Builder. Kami mempermudah interaksi manusia dengan kecerdasan buatan melalui tool yang intuitif dan profesional.</p>
                </div>
                
                <div>
                    <h5 class="text-white font-bold mb-6">Produk</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-primary transition-colors">Semua Template</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Update Log</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="text-white font-bold mb-6">Perusahaan</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-primary transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Kontak</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="text-white font-bold mb-6">Social Media</h5>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/5 text-center text-xs">
                &copy; {{ date('Y') }} RIA Prompt. All rights reserved. Buat Gambar Hebat dengan Prompt Hebat.
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
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
</body>
</html>
