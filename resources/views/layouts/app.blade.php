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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
<body>
<header class="topbar">
    <div class="container nav">
        <a href="{{ route('home') }}" class="logo">
            <span class="logo-mark">M</span>
            <span><span data-config-text="shortName">Moonpik</span></span>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Menüyü Aç/Kapat">☰</button>
        <nav class="main-nav" id="mainNav">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Ana Sayfa</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Hizmetler</a></li>
                <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projeler</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <a class="btn btn-secondary" href="{{ route('projects') }}">Referans Yapısı</a>
            <a class="btn btn-primary" href="{{ route('contact') }}">Kurumsal Görüşme</a>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-grid">
        <div>
            <div class="logo" style="margin-bottom:14px;">
                <span class="logo-mark">M</span>
                <span><span data-config-text="shortName">Moonpik</span></span>
            </div>
            <p style="max-width:420px;color:var(--muted)" data-config-text="heroDescription"></p>
        </div>
        <div>
            <h4 class="footer-title">Kurumsal</h4>
            <ul class="footer-links">
                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                <li><a href="{{ route('projects') }}">Projeler</a></li>
                <li><a href="{{ route('contact') }}">İletişim</a></li>
            </ul>
        </div>
        <div>
            <h4 class="footer-title">Hizmetler</h4>
            <ul class="footer-links">
                <li><a href="{{ route('services') }}">Yazılım Geliştirme</a></li>
                <li><a href="{{ route('services') }}">Siber Güvenlik</a></li>
                <li><a href="{{ route('services') }}">Kamera Sistemleri</a></li>
            </ul>
        </div>
        <div>
            <h4 class="footer-title">İletişim</h4>
            <ul class="footer-links">
                <li><a href="mailto:info@moonpik.com"><span data-config-text="email">info@moonpik.com</span></a></li>
                <li><a href="tel:+905000000000"><span data-config-text="phone">+90 5XX XXX XX XX</span></a></li>
                <li><a href="https://wa.me/905000000000" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
            </ul>
        </div>
    </div>
    <div class="container footer-row">
        <p>© 2026 <span data-config-text="companyName">MoonPik</span>. Tüm hakları saklıdır.</p>
        <p data-config-text="tagline"></p>
    </div>
</footer>

<script src="{{ asset('config.js') }}"></script>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
