<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RIA Prompt - AI Image Prompt Builder Profesional')</title>
    <meta name="description" content="@yield('description', 'RIA Prompt - Buat konten visual profesional dengan cepat. Copy prompt, paste ke ChatGPT, langsung beres. Ribuan contoh prompt siap pakai untuk promosi, edukasi, event & lebih banyak lagi. Akses lifetime, hemat 95% biaya.')">
    <meta name="keywords" content="@yield('keywords', 'RIA Prompt, AI prompt, prompt ChatGPT, generate konten visual, AI image prompt, prompt builder, konten marketing, design cepat')">
    <meta name="author" content="RIA Prompt">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('faavicon.png') }}?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('faavicon.png') }}?v=1">
    <link rel="shortcut icon" href="{{ asset('faavicon.png') }}?v=1" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('faavicon.png') }}?v=1">
    <meta property="og:title" content="@yield('og_title', 'RIA Prompt - AI Image Prompt Builder Profesional')">
    <meta property="og:description" content="@yield('og_description', 'Buat konten visual profesional dengan cepat. Copy prompt ke ChatGPT, langsung beres. Ribuan contoh prompt siap pakai.')">
    <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <style>
        :root {
            --primary: #279b84;
            --primary-dark: #1e7d6a;
            --primary-light: #e9f5f3;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .bg-primary {
            background-color: var(--primary);
        }

        .text-primary {
            color: var(--primary);
        }

        .border-primary {
            border-color: var(--primary);
        }

        .hover\:bg-primary-dark:hover {
            background-color: var(--primary-dark);
        }

        .bg-primary-light {
            background-color: var(--primary-light);
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, #4f46e5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="antialiased text-slate-900 bg-white">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16 min-h-[56px]">
                <a href="/" class="flex items-center gap-2 sm:gap-3 shrink-0 min-w-0">
                    <img src="{{ asset('images/logo.png') }}" alt="RIA Prompt Logo" class="h-8 sm:h-10 w-auto max-h-10 object-contain">
                </a>

                <nav class="hidden lg:flex items-center gap-6 xl:gap-8">
                    <a href="/#home" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Home</a>
                    <a href="/#templates" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Templates</a>
                    <a href="/#features" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Features</a>
                    <a href="/#pricing" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Pricing</a>
                    <a href="/#faq" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">FAQ</a>
                </nav>

                <div class="flex items-center gap-2 sm:gap-4 shrink-0">
                    <a href="/login" class="hidden sm:inline-flex items-center justify-center bg-primary text-white px-4 sm:px-5 py-2 sm:py-2.5 rounded-full text-xs sm:text-sm font-bold hover:bg-primary-dark transition-colors">
                        Login
                    </a>

                    <!-- Mobile Menu Button -->
                    <button type="button" id="mobile-menu-toggle" aria-label="Toggle menu" class="lg:hidden p-2 -mr-2 text-slate-600 hover:text-primary hover:bg-slate-100 rounded-lg transition-colors touch-manipulation">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-100 overflow-hidden">
            <nav class="px-4 py-4 space-y-1 max-h-[calc(100vh-4rem)] overflow-y-auto">
                <a href="/#home" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-colors">Home</a>
                <a href="/#templates" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Templates</a>
                <a href="/#features" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Features</a>
                <a href="/#pricing" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Pricing</a>
                <a href="/#faq" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">FAQ</a>
                <div class="pt-4 mt-4 border-t border-slate-100">
                    <a href="/login" class="mobile-nav-link block w-full text-center bg-primary text-white px-5 py-3 rounded-xl text-sm font-bold hover:bg-primary-dark transition-colors">Login Sekarang</a>
                </div>
            </nav>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

            function toggleMenu() {
                const isHidden = menu.classList.contains('hidden');
                if (isHidden) {
                    menu.classList.remove('hidden');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                } else {
                    menu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            if (toggleBtn) {
                toggleBtn.addEventListener('click', e => {
                    e.preventDefault();
                    toggleMenu();
                });
            }

            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    toggleMenu();
                });
            });
        });
    </script>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 py-20 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logo.png') }}" alt="RIA Prompt Logo" class="h-8 w-auto">
                    </div>
                    <p class="text-sm leading-relaxed mb-6">#1 AI Content Generator. Kami mempermudah pembuatan konten
                        visual profesional melalui prompt terstruktur yang mudah digunakan dan compatible dengan
                        berbagai AI provider.</p>
                </div>

                <div>
                    <h5 class="text-white font-bold mb-6">Produk</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="/#templates" class="hover:text-primary transition-colors">Semua Kategori</a></li>
                        <li><a href="/#pricing" class="hover:text-primary transition-colors">Pricing</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold mb-6">Tentang</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="/#faq" class="hover:text-primary transition-colors">FAQ</a></li>
                        <li><a href="/privacy-policy" class="hover:text-primary transition-colors">Kebijakan Privasi</a>
                        </li>
                        <li><a href="/terms-conditions" class="hover:text-primary transition-colors">Syarat &
                                Ketentuan</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold mb-6">Social Media</h5>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all"><svg
                                class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg></a>
                        <a href="#"
                            class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all"><svg
                                class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-white/5 text-center text-xs">
                &copy; {{ date('Y') }} RIA Prompt. All rights reserved. Generate Konten Profesional dengan AI.
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>