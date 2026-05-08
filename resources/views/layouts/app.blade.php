<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MoonPik')</title>
    <meta name="description" content="@yield('description', 'MoonPik kurumsal teknoloji cozumleri')">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Space Grotesk', 'system-ui', 'sans-serif'],
                        display: ['Sora', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        moon: {
                            900: '#060b16',
                            800: '#0a1224',
                            700: '#101b33',
                            glow: '#62e8ff',
                            neon: '#9b8cff',
                            lime: '#7bffb5',
                        }
                    },
                    boxShadow: {
                        glow: '0 0 0 1px rgba(98,232,255,.2), 0 10px 40px rgba(98,232,255,.2)',
                    },
                }
            }
        };
    </script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MoonPik">
    <meta property="og:title" content="@yield('title', 'MoonPik')">
    <meta property="og:description" content="@yield('description', 'MoonPik kurumsal teknoloji cozumleri')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/og-image.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'MoonPik')">
    <meta name="twitter:description" content="@yield('description', 'MoonPik kurumsal teknoloji cozumleri')">
</head>
<body class="!bg-[#030712] !text-slate-100 antialiased">

<header class="fixed left-0 right-0 top-0 z-50 border-b border-white/10 bg-slate-950/40 backdrop-blur-lg">
    <div class="mx-auto flex w-[92%] max-w-7xl items-center justify-between gap-4 py-4">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('logo.png') }}" alt="MoonPik" class="h-9 md:h-10" />
            <span class="sr-only">MoonPik</span>
        </a>

        <button class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-white/15 bg-white/5 text-slate-100 md:hidden" id="menuToggle" aria-label="Menüyü Aç/Kapat">
            <i data-lucide="menu" class="h-5 w-5"></i>
        </button>

        <div class="hidden items-center gap-8 md:flex">
            <nav id="mainNav">
                <ul class="flex items-center gap-6 text-sm text-slate-300">
                    <li><a href="{{ route('home') }}#solutions" class="transition hover:text-white">Çözümler</a></li>
                    <li><a href="{{ route('home') }}#engine" class="transition hover:text-white">Akış</a></li>
                    <li><a href="{{ route('home') }}#vision" class="transition hover:text-white">Güvence</a></li>
                    <li><a href="{{ route('home') }}#contact" class="transition hover:text-white">İletişim</a></li>
                </ul>
            </nav>

            <a href="#" class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-100 backdrop-blur-md transition hover:bg-white/10">
                Ekosisteme Giriş
            </a>
        </div>
    </div>

    <div id="mobileNav" class="hidden border-t border-white/10 md:hidden">
        <div class="mx-auto grid w-[92%] max-w-7xl gap-3 py-4 text-sm text-slate-200">
            <a href="{{ route('home') }}#solutions" class="block">Çözümler</a>
            <a href="{{ route('home') }}#engine" class="block">Akış</a>
            <a href="{{ route('home') }}#vision" class="block">Güvence</a>
            <a href="{{ route('home') }}#contact" class="block">İletişim</a>
            <a href="#" class="mt-1 inline-flex w-fit items-center rounded-full border border-white/20 bg-white/5 px-4 py-2">Ekosisteme Giriş</a>
        </div>
    </div>
</header>

<main class="relative z-10 pt-24">
    @yield('content')
</main>

<footer id="contact" class="relative z-10 mt-24 border-t border-white/10 bg-slate-950/30 backdrop-blur-md">
    <div class="mx-auto flex w-[92%] max-w-7xl flex-col gap-8 py-16 md:flex-row md:items-start md:justify-between" data-reveal>
        <!-- Left: Logo & Message -->
        <div>
            <p class="font-sans text-sm tracking-[0.18em] text-slate-400 mb-2">MOONPIK</p>
            <p class="text-xs text-slate-500">Mükemmeliyet odağıyla tasarlandı</p>
        </div>

        <!-- Right: Links -->
        <div class="flex gap-8 text-sm">
            <a href="#" class="text-slate-400 transition hover:text-white">Dokümantasyon</a>
            <a href="#" class="text-slate-400 transition hover:text-white">İletişim</a>
            <a href="#" class="text-slate-400 transition hover:text-white">Sistem Durumu</a>
        </div>
    </div>

    <!-- Bottom: Copyright -->
    <div class="mx-auto w-[92%] max-w-7xl border-t border-white/5 py-6">
        <p class="text-[10px] text-slate-600">© 2026 Moonpik Technology Group</p>
    </div>
</footer>

<script src="https://unpkg.com/lucide@latest"></script>
<script src="{{ asset('config.js') }}"></script>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
