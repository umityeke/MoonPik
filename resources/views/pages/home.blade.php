@extends('layouts.app')

@section('title', 'MoonPik | Live Ready Ana Sayfa')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="relative overflow-hidden pt-16 md:pt-24">
    <div class="mx-auto grid w-[92%] max-w-7xl gap-10 md:grid-cols-[1.05fr_.95fr]">
        <div class="space-y-7" data-reveal>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-4 py-2 text-xs uppercase tracking-[0.16em] text-cyan-200">
                <i data-lucide="wand-sparkles" class="h-4 w-4"></i>
                Premium Software Agency
            </span>
            <h1 class="font-display text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl">
                <span data-config-text="shortName">Moonpik</span> ile <span class="text-cyan-300">yüksek segment</span> dijital ürünler,
                modern tasarım dili ve güçlü mühendislik tek potada.
            </h1>
            <p class="max-w-2xl text-base text-slate-300 md:text-lg" data-config-text="heroDescription"></p>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('services') }}" class="glow-btn inline-flex items-center gap-2 rounded-full border border-cyan-300/40 bg-cyan-300/15 px-6 py-3 text-sm font-semibold text-cyan-100 transition hover:-translate-y-0.5">
                    <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                    Çözümleri İncele
                </a>
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-white/10">
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                    Moonpik'i Tanı
                </a>
            </div>
            <div class="grid gap-2 text-sm text-slate-300 sm:grid-cols-2">
                <div class="glass-chip"><i data-lucide="code-xml" class="h-4 w-4 text-cyan-300"></i> Kurumsal Yazılım Mimarisi</div>
                <div class="glass-chip"><i data-lucide="shield-check" class="h-4 w-4 text-cyan-300"></i> Network & Güvenlik Altyapısı</div>
                <div class="glass-chip"><i data-lucide="bot" class="h-4 w-4 text-cyan-300"></i> AI Destekli Operasyonlar</div>
                <div class="glass-chip"><i data-lucide="camera" class="h-4 w-4 text-cyan-300"></i> Fiziksel Güvenlik Sistemleri</div>
            </div>
        </div>

        <aside class="glass-card p-6 md:p-7" data-reveal>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="stat-card">
                    <p class="stat-label">Hizmet Katmanı</p>
                    <strong>06</strong>
                    <p>Yazılım, AI, siber güvenlik, donanım, kamera ve danışmanlık.</p>
                </div>
                <div class="stat-card">
                    <p class="stat-label">Yaklaşım</p>
                    <strong>360°</strong>
                    <p>İş ihtiyacını, güvenliği ve sürdürülebilirliği birlikte ele alır.</p>
                </div>
                <div class="stat-card">
                    <p class="stat-label">Öncelik</p>
                    <strong>Risk ↓</strong>
                    <p>Kesinti ve verimsizlik kaynaklarını azaltma odağı.</p>
                </div>
                <div class="stat-card">
                    <p class="stat-label">Uygulama</p>
                    <strong>Uçtan Uca</strong>
                    <p>Analiz, kurulum, geliştirme, entegrasyon ve destek tek yapıda.</p>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="mx-auto mt-24 w-[92%] max-w-7xl">
    <div class="mb-10 flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between" data-reveal>
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-xs uppercase tracking-[0.14em] text-violet-200">Kurumsal Çözüm Portföyü</span>
            <h2 class="mt-4 font-display text-3xl font-bold leading-tight text-white md:text-5xl">Moonpik, farklı departmanların teknoloji ihtiyaçlarını tek merkezden karşılar.</h2>
        </div>
        <p class="max-w-xl text-slate-300">Dağınık tedarikçiler, kopuk yazılımlar ve zayıf güvenlik politikaları yüzünden şirketler aynı anda para da zaman da kaybediyor. Biz o kaosu toparlayan taraftayız.</p>
    </div>

    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <article class="glass-card p-6" data-reveal>
            <div class="mb-4 flex items-center justify-between">
                <span class="icon-pill"><i data-lucide="monitor-cog" class="h-4 w-4"></i></span>
                <span class="text-xs uppercase tracking-[0.12em] text-slate-400">Software</span>
            </div>
            <h3 class="mb-2 font-display text-xl font-semibold text-white">Kurumsal Yazılım Geliştirme</h3>
            <p class="text-sm text-slate-300">Şirketinize özel web tabanlı paneller, iş akışı sistemleri, raporlama araçları ve yönetim ekranları geliştiriyoruz.</p>
        </article>
        <article class="glass-card p-6" data-reveal>
            <div class="mb-4 flex items-center justify-between">
                <span class="icon-pill"><i data-lucide="smartphone" class="h-4 w-4"></i></span>
                <span class="text-xs uppercase tracking-[0.12em] text-slate-400">Mobile</span>
            </div>
            <h3 class="mb-2 font-display text-xl font-semibold text-white">Mobil Uygulama Çözümleri</h3>
            <p class="text-sm text-slate-300">Saha ekipleri ve iç operasyon ekipleri için performanslı mobil uygulamalar tasarlıyoruz.</p>
        </article>
        <article class="glass-card p-6" data-reveal>
            <div class="mb-4 flex items-center justify-between">
                <span class="icon-pill"><i data-lucide="shield" class="h-4 w-4"></i></span>
                <span class="text-xs uppercase tracking-[0.12em] text-slate-400">Cybersecurity</span>
            </div>
            <h3 class="mb-2 font-display text-xl font-semibold text-white">Siber Güvenlik</h3>
            <p class="text-sm text-slate-300">Kurumsal ağ, kullanıcı erişimi ve güvenlik katmanlarını sağlam şekilde kurguluyoruz.</p>
        </article>
    </div>
</section>

<section class="mx-auto mt-24 w-[92%] max-w-7xl pb-16">
    <div class="glass-card relative overflow-hidden p-8 md:p-12" data-reveal>
        <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full bg-cyan-300/25 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 left-10 h-52 w-52 rounded-full bg-violet-400/20 blur-3xl"></div>
        <div class="relative z-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <p class="mb-3 text-xs uppercase tracking-[0.14em] text-cyan-200">Launch With Confidence</p>
                <h3 class="font-display text-3xl font-bold leading-tight text-white md:text-4xl">Yeni nesil agency görünümü tamam. Sonraki adım: içerik ve case study odaklı sayfa derinliği.</h3>
            </div>
            <a href="{{ route('contact') }}" class="glow-btn inline-flex items-center gap-2 rounded-full border border-cyan-300/40 bg-cyan-300/15 px-6 py-3 text-sm font-semibold text-cyan-100 transition hover:-translate-y-0.5">
                <i data-lucide="mail" class="h-4 w-4"></i>
                Projeyi Başlat
            </a>
        </div>
    </div>
</section>
@endsection
