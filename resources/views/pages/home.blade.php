@extends('layouts.app')

@section('title', 'MoonPik | Live Ready Ana Sayfa')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="relative isolate overflow-hidden">
    <div class="pointer-events-none absolute -left-20 -top-20 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(168,85,247,0.34),transparent_65%)] blur-[120px]"></div>
    <div class="pointer-events-none absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.30),transparent_65%)] blur-[120px]"></div>

    <div class="mx-auto flex h-screen w-[92%] max-w-7xl flex-col items-center justify-center text-center">
        <h1 class="max-w-5xl bg-gradient-to-b from-white to-gray-500 bg-clip-text font-display text-5xl font-bold tracking-tighter leading-[1.08] text-transparent sm:text-6xl lg:text-7xl opacity-0 translate-y-6 transition duration-700" data-reveal>
            Moonpik ile fikirden ürüne,
            üründen ekosisteme.
        </h1>
        <p class="mt-8 max-w-3xl text-base leading-8 text-slate-300 opacity-0 translate-y-6 transition duration-700 sm:text-lg" data-reveal>Yüksek performanslı yazılım mimarisi, otomasyon ve güvenlik odaklı teknoloji altyapıları.</p>

        <a href="#solutions" class="mt-16 inline-flex flex-col items-center gap-2 text-slate-400 opacity-0 translate-y-6 transition duration-700 hover:text-white" data-reveal>
            <span class="text-xs uppercase tracking-[0.18em]">Keşfet</span>
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 bg-white/5 backdrop-blur-md animate-bounce">
                <i data-lucide="chevrons-down" class="h-4 w-4"></i>
            </span>
        </a>
    </div>
</section>

<section id="solutions" class="mx-auto w-[92%] max-w-7xl py-40">
    <div class="mb-16" data-reveal>
        <p class="mb-5 text-xs uppercase tracking-[0.2em] text-slate-400">Capability Grid</p>
        <h2 class="max-w-4xl bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-4xl font-bold tracking-tighter leading-[1.14] text-transparent sm:text-5xl">Yazılım Mimarisinde Moonpik Standartları</h2>
        <p class="mt-7 max-w-3xl text-base leading-8 text-slate-300">Kurumsal ama fütüristik bir yerleşim diliyle, ürünleri hızlı teslim ederken teknik borcu azaltan bir mühendislik pratiği uyguluyoruz.</p>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[360px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-indigo-200"><i data-lucide="building-2" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">SaaS Systems</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Çok kiracılı mimariler, abonelik bazlı iş modelleri ve ölçeklenebilir panel yapıları.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[470px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-blue-200"><i data-lucide="smartphone" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">Mobile Products</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Saha operasyonlarından müşteri deneyimine kadar yüksek performanslı mobil ürün tasarımı.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[410px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-emerald-200"><i data-lucide="workflow" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">Automation Engine</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Operasyonel darboğazları ortadan kaldıran akıllı otomasyon ve entegrasyon katmanları.</p>
                </div>
            </div>
        </article>
    </div>
</section>

<section id="engine" class="mx-auto w-[92%] max-w-7xl py-32">
    <div class="mb-16" data-reveal>
        <h2 class="bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl">Process & Flow</h2>
        <p class="mt-3 max-w-3xl text-slate-300">Bir yazılım fikrini, ölçeklenebilir bir sisteme dönüştüren akışımız.</p>
    </div>

    <!-- Process Flow with Animated Line -->
    <div class="relative">
        <!-- Animated Flow Line -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent opacity-0 pointer-events-none" id="flowLine" style="clip-path: inset(0 100% 0 0);"></div>

        <div class="grid gap-8 md:grid-cols-4">
            <!-- Step 1 -->
            <div class="group relative" data-process-step="0">
                <div class="flex flex-col items-start">
                    <div class="relative mb-6">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-xs font-bold group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-all duration-500">
                            <span class="opacity-60 group-hover:opacity-100">01</span>
                        </div>
                        <div class="absolute inset-0 rounded-full border border-blue-500/0 group-hover:border-blue-500/50 transition-all duration-500 animate-pulse"></div>
                    </div>
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Discovery</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">İhtiyacı anlıyoruz.</p>
                </div>
                <div class="absolute -bottom-8 left-6 hidden md:block text-slate-600 group-hover:text-blue-500/60 transition-colors duration-300">→</div>
            </div>

            <!-- Step 2 -->
            <div class="group relative" data-process-step="1">
                <div class="flex flex-col items-start">
                    <div class="relative mb-6">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-xs font-bold group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-all duration-500">
                            <span class="opacity-60 group-hover:opacity-100">02</span>
                        </div>
                        <div class="absolute inset-0 rounded-full border border-blue-500/0 group-hover:border-blue-500/50 transition-all duration-500 animate-pulse"></div>
                    </div>
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Architecture</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Ölçeklenebilir yapıyı kuruyoruz.</p>
                </div>
                <div class="absolute -bottom-8 left-6 hidden md:block text-slate-600 group-hover:text-blue-500/60 transition-colors duration-300">→</div>
            </div>

            <!-- Step 3 -->
            <div class="group relative" data-process-step="2">
                <div class="flex flex-col items-start">
                    <div class="relative mb-6">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-xs font-bold group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-all duration-500">
                            <span class="opacity-60 group-hover:opacity-100">03</span>
                        </div>
                        <div class="absolute inset-0 rounded-full border border-blue-500/0 group-hover:border-blue-500/50 transition-all duration-500 animate-pulse"></div>
                    </div>
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Development</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Modern teknolojilerle kodluyoruz.</p>
                </div>
                <div class="absolute -bottom-8 left-6 hidden md:block text-slate-600 group-hover:text-blue-500/60 transition-colors duration-300">→</div>
            </div>

            <!-- Step 4 -->
            <div class="group relative" data-process-step="3">
                <div class="flex flex-col items-start">
                    <div class="relative mb-6">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-xs font-bold group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-all duration-500">
                            <span class="opacity-60 group-hover:opacity-100">04</span>
                        </div>
                        <div class="absolute inset-0 rounded-full border border-blue-500/0 group-hover:border-blue-500/50 transition-all duration-500 animate-pulse"></div>
                    </div>
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Infinite Scaling</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Sisteminizi büyütüyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vision" class="mx-auto w-[92%] max-w-7xl py-32">
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
