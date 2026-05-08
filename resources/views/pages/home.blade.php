@extends('layouts.app')

@section('title', 'MoonPik | Live Ready Ana Sayfa')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="relative isolate overflow-hidden">
    <div class="pointer-events-none absolute -left-20 -top-20 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(168,85,247,0.34),transparent_65%)] blur-[120px]"></div>
    <div class="pointer-events-none absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.30),transparent_65%)] blur-[120px]"></div>

    <div class="mx-auto flex min-h-[78vh] w-[92%] max-w-7xl flex-col items-center justify-center py-20 text-center">
        <h1 class="max-w-5xl bg-gradient-to-b from-white to-gray-500 bg-clip-text font-display text-5xl font-bold tracking-tighter text-transparent sm:text-6xl lg:text-7xl opacity-0 translate-y-6 transition duration-700" data-reveal>
            Moonpik ile fikirden ürüne,
            üründen ekosisteme.
        </h1>
        <p class="mt-5 max-w-2xl text-slate-300 opacity-0 translate-y-6 transition duration-700" data-reveal>Yüksek performanslı yazılım mimarisi, otomasyon ve güvenlik odaklı teknoloji altyapıları.</p>

        <a href="#solutions" class="mt-14 inline-flex flex-col items-center gap-2 text-slate-400 opacity-0 translate-y-6 transition duration-700 hover:text-white" data-reveal>
            <span class="text-xs uppercase tracking-[0.18em]">Keşfet</span>
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 bg-white/5 backdrop-blur-md animate-bounce">
                <i data-lucide="chevrons-down" class="h-4 w-4"></i>
            </span>
        </a>
    </div>
</section>

<section id="solutions" class="mx-auto w-[92%] max-w-7xl pb-20">
    <div class="mb-10" data-reveal>
        <h2 class="bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl">Yazılım Mimarisinde Moonpik Standartları</h2>
    </div>

    <div class="grid auto-rows-[150px] gap-4 md:grid-cols-6">
        <article class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md md:col-span-4 md:row-span-2 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <i data-lucide="layers-3" class="h-6 w-6 text-indigo-200"></i>
                <div>
                    <h3 class="font-display text-xl font-bold tracking-tighter text-white">Modüler Domain Tasarımı</h3>
                    <p class="mt-2 text-sm text-slate-300">Servis sınırları net, bakımı kolay ve ekip büyümesine uyumlu mimari katmanlar.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md md:col-span-2 md:row-span-1 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <i data-lucide="gauge" class="h-6 w-6 text-blue-200"></i>
            <h3 class="mt-4 font-display text-lg font-bold tracking-tighter text-white">Latency First</h3>
            <p class="mt-2 text-sm text-slate-300">Hız odaklı endpoint ve veri akışı mimarisi.</p>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md md:col-span-2 md:row-span-1 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <i data-lucide="binary" class="h-6 w-6 text-violet-200"></i>
            <h3 class="mt-4 font-display text-lg font-bold tracking-tighter text-white">Observability Core</h3>
            <p class="mt-2 text-sm text-slate-300">Log, metric ve trace merkezli denetlenebilirlik.</p>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md md:col-span-3 md:row-span-2 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <i data-lucide="shield-check" class="h-6 w-6 text-cyan-200"></i>
                <div>
                    <h3 class="font-display text-xl font-bold tracking-tighter text-white">Secure Ecosystems</h3>
                    <p class="mt-2 text-sm text-slate-300">Zero-trust prensibiyle erişim, veri ve ağ güvenliğini tek bir çatı altında topluyoruz.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md md:col-span-3 md:row-span-1 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <i data-lucide="sparkles" class="h-6 w-6 text-emerald-200"></i>
            <h3 class="mt-4 font-display text-lg font-bold tracking-tighter text-white">AI Orchestration Layer</h3>
            <p class="mt-2 text-sm text-slate-300">Akıllı otomasyonları ürün ve operasyon katmanına doğal şekilde entegre ediyoruz.</p>
        </article>
    </div>
</section>

<section id="engine" class="mx-auto w-[92%] max-w-7xl pb-20">
    <div class="mb-10" data-reveal>
        <h2 class="bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl">Process Engine</h2>
        <p class="mt-3 max-w-3xl text-slate-300">Bir yazılım fikrini, ölçeklenebilir bir sisteme dönüştüren akışımız.</p>
    </div>

    <div class="relative overflow-x-auto rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md">
        <div class="pointer-events-none absolute left-6 right-6 top-12 hidden h-px bg-gradient-to-r from-blue-500/10 via-blue-300/40 to-blue-500/10 md:block"></div>
        <div class="grid min-w-[920px] gap-5 md:grid-cols-4">
            <article class="group rounded-xl border border-white/10 bg-white/5 p-5 opacity-55 transition duration-500" data-step>
                <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-xs">01</span>
                <h3 class="font-display text-lg font-bold tracking-tighter">Discovery</h3>
                <p class="mt-2 text-sm text-slate-300">İhtiyaç analizi, teknik haritalama ve önceliklendirme.</p>
            </article>
            <article class="group rounded-xl border border-white/10 bg-white/5 p-5 opacity-55 transition duration-500" data-step>
                <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-xs">02</span>
                <h3 class="font-display text-lg font-bold tracking-tighter">Architecture</h3>
                <p class="mt-2 text-sm text-slate-300">Domain temelli mimari, güvenlik modeli ve veri tasarımı.</p>
            </article>
            <article class="group rounded-xl border border-white/10 bg-white/5 p-5 opacity-55 transition duration-500" data-step>
                <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-xs">03</span>
                <h3 class="font-display text-lg font-bold tracking-tighter">Delivery</h3>
                <p class="mt-2 text-sm text-slate-300">Sürekli entegrasyon, kalite güvence ve canlıya alma süreci.</p>
            </article>
            <article class="group rounded-xl border border-white/10 bg-white/5 p-5 opacity-55 transition duration-500" data-step>
                <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-xs">04</span>
                <h3 class="font-display text-lg font-bold tracking-tighter">Scale</h3>
                <p class="mt-2 text-sm text-slate-300">Gözlemlenebilirlik, optimizasyon ve sürdürülebilir büyüme.</p>
            </article>
        </div>
    </div>
</section>

<section id="vision" class="mx-auto w-[92%] max-w-7xl pb-20">
    <div class="rounded-2xl border border-white/10 bg-white/5 px-6 py-5 backdrop-blur-md opacity-0 translate-y-6 transition duration-700" data-reveal>
        <div class="flex flex-wrap items-center justify-center gap-4 text-center text-xs uppercase tracking-[0.16em] text-slate-300 sm:text-sm">
            <span>Cloud-Native</span>
            <span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>
            <span>AI-Driven</span>
            <span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>
            <span>Security-Focused</span>
        </div>
    </div>
</section>
@endsection
