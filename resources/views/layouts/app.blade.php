<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MoonPik')</title>
    <meta name="description" content="@yield('description', 'MoonPik kurumsal teknoloji cozumleri')">
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
<body class="bg-moon-900 text-slate-100 antialiased">
<div class="aurora-bg" aria-hidden="true"></div>
<div class="mesh-overlay" aria-hidden="true"></div>

<header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/65 backdrop-blur-2xl">
    <div class="mx-auto flex w-[92%] max-w-7xl items-center justify-between gap-5 py-4">
        <a href="{{ route('home') }}" class="group inline-flex items-center gap-3">
            <span class="grid h-11 w-11 place-items-center rounded-2xl border border-white/20 bg-white/5 shadow-glow transition duration-300 group-hover:rotate-6">
                <i data-lucide="moon-star" class="h-5 w-5 text-moon-glow"></i>
            </span>
            <span class="font-display text-xl font-bold tracking-tight"><span data-config-text="shortName">Moonpik</span></span>
        </a>

        <button class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-white/15 bg-white/5 text-slate-100 md:hidden" id="menuToggle" aria-label="Menüyü Aç/Kapat">
            <i data-lucide="menu" class="h-5 w-5"></i>
        </button>

        <nav class="main-nav hidden md:flex" id="mainNav">
            <ul class="flex items-center gap-6 text-sm text-slate-300">
                <li><a href="{{ route('home') }}" class="transition hover:text-white {{ request()->routeIs('home') ? 'text-white' : '' }}">Ana Sayfa</a></li>
                <li><a href="{{ route('about') }}" class="transition hover:text-white {{ request()->routeIs('about') ? 'text-white' : '' }}">Hakkımızda</a></li>
                <li><a href="{{ route('services') }}" class="transition hover:text-white {{ request()->routeIs('services') ? 'text-white' : '' }}">Hizmetler</a></li>
                <li><a href="{{ route('projects') }}" class="transition hover:text-white {{ request()->routeIs('projects') ? 'text-white' : '' }}">Projeler</a></li>
                <li><a href="{{ route('contact') }}" class="transition hover:text-white {{ request()->routeIs('contact') ? 'text-white' : '' }}">İletişim</a></li>
            </ul>
        </nav>

        <div class="hidden items-center gap-3 md:flex">
            <a class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-5 py-2.5 text-sm font-medium transition hover:-translate-y-0.5 hover:bg-white/10" href="{{ route('projects') }}">
                <i data-lucide="sparkles" class="h-4 w-4"></i>
                Referans Yapısı
            </a>
            <a class="glow-btn inline-flex items-center gap-2 rounded-full border border-cyan-300/40 bg-cyan-300/15 px-5 py-2.5 text-sm font-semibold text-cyan-100 transition hover:-translate-y-0.5" href="{{ route('contact') }}">
                <i data-lucide="rocket" class="h-4 w-4"></i>
                Kurumsal Görüşme
            </a>
        </div>
    </div>

    <div id="mobileNav" class="main-nav hidden border-t border-white/10 md:hidden">
        <div class="mx-auto w-[92%] max-w-7xl space-y-3 py-4 text-sm text-slate-200">
            <a href="{{ route('home') }}" class="block">Ana Sayfa</a>
            <a href="{{ route('about') }}" class="block">Hakkımızda</a>
            <a href="{{ route('services') }}" class="block">Hizmetler</a>
            <a href="{{ route('projects') }}" class="block">Projeler</a>
            <a href="{{ route('contact') }}" class="block">İletişim</a>
        </div>
    </div>
</header>

<main class="relative z-10">
    @yield('content')
</main>

<footer class="relative z-10 mt-24 border-t border-white/10 bg-slate-950/30">
    <div class="mx-auto grid w-[92%] max-w-7xl gap-8 py-12 md:grid-cols-4" data-reveal>
        <div class="md:col-span-1">
            <div class="mb-4 inline-flex items-center gap-3">
                <span class="grid h-10 w-10 place-items-center rounded-xl border border-white/20 bg-white/5">
                    <i data-lucide="moon-star" class="h-4 w-4 text-moon-glow"></i>
                </span>
                <span class="font-display text-lg font-bold"><span data-config-text="shortName">Moonpik</span></span>
            </div>
            <p class="max-w-sm text-sm text-slate-400" data-config-text="heroDescription"></p>
        </div>
        <div>
            <h4 class="mb-4 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200">Kurumsal</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="{{ route('about') }}" class="hover:text-white">Hakkımızda</a></li>
                <li><a href="{{ route('projects') }}" class="hover:text-white">Projeler</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">İletişim</a></li>
            </ul>
        </div>
        <div>
            <h4 class="mb-4 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200">Hizmetler</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="{{ route('services') }}" class="hover:text-white">Yazılım Geliştirme</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Siber Güvenlik</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Kamera Sistemleri</a></li>
            </ul>
        </div>
        <div>
            <h4 class="mb-4 text-sm font-semibold uppercase tracking-[0.12em] text-slate-200">İletişim</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="mailto:info@moonpik.com" class="hover:text-white"><span data-config-text="email">info@moonpik.com</span></a></li>
                <li><a href="tel:+905000000000" class="hover:text-white"><span data-config-text="phone">+90 5XX XXX XX XX</span></a></li>
                <li><a href="https://wa.me/905000000000" target="_blank" rel="noopener noreferrer" class="hover:text-white">WhatsApp</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto flex w-[92%] max-w-7xl flex-wrap items-center justify-between gap-4 border-t border-white/10 py-6 text-xs text-slate-500">
        <p>© 2026 <span data-config-text="companyName">MoonPik</span>. Tüm hakları saklıdır.</p>
        <p data-config-text="tagline"></p>
    </div>
</footer>

<script src="https://unpkg.com/lucide@latest"></script>
<script src="{{ asset('config.js') }}"></script>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
