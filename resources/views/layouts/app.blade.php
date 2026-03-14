<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
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

        html, body {
            overflow-x: hidden;
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
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 w-full" style="padding-top: env(safe-area-inset-top);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex justify-between items-center h-14 sm:h-16 min-h-[56px] gap-2 min-w-0">
                <a href="/" class="flex items-center gap-2 sm:gap-3 shrink-0 min-w-0">
                    <img src="{{ asset('images/logo.png') }}" alt="RIA Prompt Logo" class="h-7 sm:h-9 md:h-10 w-auto max-h-10 object-contain">
                </a>

                <nav class="hidden md:flex items-center gap-4 lg:gap-6 xl:gap-8 shrink-0">
                    <a href="/#home" class="text-xs md:text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Home</a>
                    <a href="/#templates" class="text-xs md:text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Templates</a>
                    <a href="/#features" class="text-xs md:text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Features</a>
                    <a href="/#pricing" class="text-xs md:text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">Pricing</a>
                    <a href="/#faq" class="text-xs md:text-sm font-semibold text-slate-600 hover:text-primary transition-colors whitespace-nowrap">FAQ</a>
                </nav>

                <div class="flex items-center gap-1 sm:gap-2 shrink-0">
                    <a href="{{ env('RIA_PROMPT_URL', '/') }}" target="_blank" class="hidden sm:inline-flex items-center justify-center bg-primary text-white px-3 sm:px-4 md:px-5 py-2 sm:py-2.5 rounded-full text-xs sm:text-sm font-bold hover:bg-primary-dark transition-colors whitespace-nowrap">
                        Login Sekarang
                    </a>

                    <!-- Mobile Menu Button - min 44px touch target -->
                    <button type="button" id="mobile-menu-toggle" aria-label="Toggle menu" class="md:hidden p-3 -mr-2 -my-1 min-w-[44px] min-h-[44px] flex items-center justify-center text-slate-600 hover:text-primary hover:bg-slate-100 rounded-lg transition-colors touch-manipulation">
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
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 overflow-hidden w-full" style="padding-bottom: env(safe-area-inset-bottom);">
            <nav class="px-4 py-4 space-y-1 max-h-[calc(100vh-4rem)] overflow-y-auto overscroll-contain">
                <a href="/#home" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-colors">Home</a>
                <a href="/#templates" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Templates</a>
                <a href="/#features" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Features</a>
                <a href="/#pricing" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">Pricing</a>
                <a href="/#faq" class="mobile-nav-link block px-4 py-3 text-base font-semibold text-slate-600 hover:text-primary hover:bg-slate-50 rounded-xl transition-all">FAQ</a>
                <div class="pt-4 mt-4 border-t border-slate-100">
                    <a href="{{ env('RIA_PROMPT_URL', '/') }}" target="_blank" class="mobile-nav-link block w-full text-center bg-primary text-white px-5 py-3 rounded-xl text-sm font-bold hover:bg-primary-dark transition-colors">Login Sekarang</a>
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
                        <li><a href="/#home" class="hover:text-primary transition-colors">Home</a></li>
                        <li><a href="/#templates" class="hover:text-primary transition-colors">Templates</a></li>
                        <li><a href="/#features" class="hover:text-primary transition-colors">Features</a></li>
                        <li><a href="/#pricing" class="hover:text-primary transition-colors">Pricing</a></li>
                        <li><a href="/#faq" class="hover:text-primary transition-colors">FAQ</a></li>
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
                        <li><a href="/refund-policy" class="hover:text-primary transition-colors">Kebijakan Refund</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold mb-6">Social Media</h5>
                    <div class="flex gap-4">
                        <a href="https://instagram.com/riaprompt" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                            class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                            class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                        <a href="https://facebook.com/riaprompt" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                            class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
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