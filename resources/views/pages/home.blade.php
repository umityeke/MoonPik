@extends('layouts.app')

@section('title', 'MoonPik | Live Ready Ana Sayfa')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="relative isolate overflow-hidden">
    <div class="pointer-events-none absolute -left-24 -top-24 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(168,85,247,0.35),transparent_65%)] blur-[120px]"></div>
    <div class="pointer-events-none absolute -bottom-24 -right-24 h-80 w-80 rounded-full bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.32),transparent_65%)] blur-[120px]"></div>

    <div class="mx-auto flex min-h-[78vh] w-[92%] max-w-7xl flex-col items-center justify-center py-20 text-center" data-reveal>
        <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-xs uppercase tracking-[0.18em] text-slate-300 backdrop-blur-md">
            <i data-lucide="sparkles" class="h-4 w-4 text-blue-300"></i>
            Ultra Premium Digital Agency
        </span>

        <h1 class="max-w-5xl bg-gradient-to-b from-white to-gray-500 bg-clip-text font-display text-5xl font-bold tracking-tighter text-transparent sm:text-6xl lg:text-7xl">
            Software that feels luxurious,
            architecture that performs relentlessly.
        </h1>

        <p class="mt-6 max-w-2xl text-base text-slate-300 sm:text-lg" data-config-text="heroDescription"></p>

        <div class="relative mt-10 inline-flex" data-reveal>
            <span class="absolute -inset-2 rounded-full bg-blue-400/25 blur-2xl animate-pulse"></span>
            <a href="{{ route('contact') }}" class="relative inline-flex items-center gap-2 rounded-full border border-blue-300/40 bg-blue-400/15 px-8 py-3.5 text-sm font-semibold text-blue-100 backdrop-blur-md transition hover:-translate-y-0.5 hover:border-blue-300/70 hover:bg-blue-400/20">
                <i data-lucide="move-right" class="h-4 w-4"></i>
                Start Your Journey
            </a>
        </div>
    </div>
</section>

<section class="mx-auto w-[92%] max-w-7xl pb-20">
    <div class="mb-10 text-center" data-reveal>
        <h2 class="bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl">Technical Power Stack</h2>
        <p class="mx-auto mt-3 max-w-2xl text-slate-300">Sadece güzel görünen değil, sürdürülebilir, güvenli ve yüksek performanslı sistemler inşa ediyoruz.</p>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md transition duration-300 hover:-translate-y-1 hover:border-blue-500/50" data-reveal>
            <span class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-blue-200">
                <i data-lucide="cpu" class="h-5 w-5"></i>
            </span>
            <h3 class="font-display text-xl font-bold tracking-tighter text-white">High-Performance Architecture</h3>
            <p class="mt-3 text-sm text-slate-300">Ölçeklenebilir backend yapıları, düşük gecikme süresi ve güçlü gözlemlenebilirlik ile maksimum teknik güvenilirlik sağlarız.</p>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md transition duration-300 hover:-translate-y-1 hover:border-blue-500/50" data-reveal>
            <span class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-blue-200">
                <i data-lucide="workflow" class="h-5 w-5"></i>
            </span>
            <h3 class="font-display text-xl font-bold tracking-tighter text-white">Next-Gen Automation</h3>
            <p class="mt-3 text-sm text-slate-300">DevOps, CI/CD ve akıllı iş akışlarıyla ekiplerinizi tekrarlayan yüklerden kurtarıp operasyon hızını katlarız.</p>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md transition duration-300 hover:-translate-y-1 hover:border-blue-500/50" data-reveal>
            <span class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-blue-200">
                <i data-lucide="shield-check" class="h-5 w-5"></i>
            </span>
            <h3 class="font-display text-xl font-bold tracking-tighter text-white">Secure Ecosystems</h3>
            <p class="mt-3 text-sm text-slate-300">Uçtan uca güvenlik modeli, erişim kontrolleri ve proaktif tehdit önleme yaklaşımıyla sistemlerinizi koruruz.</p>
        </article>
    </div>
</section>
@endsection
