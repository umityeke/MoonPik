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
        <p class="mt-8 max-w-3xl text-base leading-8 text-slate-300 opacity-0 translate-y-6 transition duration-700 sm:text-lg" data-reveal>Modern Yazılım Mimarisi, SaaS Ekosistemi ve Yüksek Performanslı Kod odağında; güvenli, ölçeklenebilir ve uzun ömürlü teknoloji altyapıları kuruyoruz.</p>

        <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs font-medium uppercase tracking-[0.18em] text-slate-300 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Kurumsal Yazılım</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Bulut Otomasyonu</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Mobil Deneyim</span>
            <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2">Güvenlik Odaklı Mimari</span>
        </div>

        <a href="#solutions" class="mt-16 inline-flex flex-col items-center gap-2 text-slate-400 opacity-0 translate-y-6 transition duration-700 hover:text-white" data-reveal>
            <span class="text-xs uppercase tracking-[0.18em]">Aşağı Kaydır</span>
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 bg-white/5 backdrop-blur-md animate-bounce">
                <i data-lucide="chevrons-down" class="h-4 w-4"></i>
            </span>
        </a>
    </div>
</section>

<section class="mx-auto w-[92%] max-w-7xl pb-20">
    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Yaklaşım</p>
            <p class="mt-3 text-lg font-semibold text-white">İşin tamamını tek parça değil, yönetilebilir sistemler olarak tasarlıyoruz.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Teslimat</p>
            <p class="mt-3 text-lg font-semibold text-white">Hızlı başlayan, kontrollü büyüyen ve ölçülebilir sonuç veren üretim modelleri kuruyoruz.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Güvence</p>
            <p class="mt-3 text-lg font-semibold text-white">Kurumsal seviyede güvenlik, izlenebilirlik ve sürdürülebilirlik sunuyoruz.</p>
        </div>
    </div>
</section>

<section id="solutions" class="mx-auto w-[92%] max-w-7xl py-40">
    <div class="mb-16" data-reveal>
        <p class="mb-5 text-xs uppercase tracking-[0.2em] text-slate-400">Çözüm Katmanı</p>
        <h2 class="max-w-4xl bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-4xl font-bold tracking-tighter leading-[1.14] text-transparent sm:text-5xl">Yazılım Mimarisiyle Değer Üretiyoruz</h2>
        <p class="mt-7 max-w-3xl text-base leading-8 text-slate-300">Kurumsal ama fütüristik bir yerleşim diliyle, ürünleri hızlı teslim ederken teknik borcu azaltan bir mühendislik pratiği uyguluyoruz.</p>
    </div>

    <!-- Architecture of Success -->
    <div class="mb-12 rounded-2xl border border-white/6 bg-white/3 p-8 backdrop-blur-md" data-reveal>
        <h3 class="font-display text-2xl font-semibold text-white">The Architecture of Success — Mühendislik Vizyonu</h3>
        <p class="mt-4 text-sm text-slate-300">Ölçeklenebilir Dijital Ekosistemler — Müşteriye sadece kod teslim etmiyoruz; dayanıklı, büyüyen bir altyapı kuruyoruz. Microservices yaklaşımımız sistemi küçük, bağımsız ve hızlı değiştirilebilen modüllere ayırır; her parça bağımsız ölçeklenir ve arıza etki alanını minimal tutar. Cloud‑Native uygulamalarımız Railway ve Google Cloud üzerinde tasarlanarak %99.9 çalışma süresi hedefiyle üretime alınır. API‑First felsefemizle hem iç hem dış entegrasyonlar kesintisiz ve güvenli şekilde konuşur. <strong>Modern Yazılım Mimarisi</strong> ile tasarlanan çözümlerimiz performans, güvenlik ve sürdürülebilirliği aynı anda karşılar.</p>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[360px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-indigo-200"><i data-lucide="building-2" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">SaaS Sistemleri</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Çok kiracılı mimariler, abonelik bazlı iş modelleri ve ölçeklenebilir panel yapıları.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[470px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-blue-200"><i data-lucide="smartphone" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">Mobil Ürünler</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Saha operasyonlarından müşteri deneyimine kadar yüksek performanslı mobil ürün tasarımı.</p>
                </div>
            </div>
        </article>

        <article class="rounded-2xl border border-white/10 bg-white/5 p-7 backdrop-blur-md md:min-h-[410px] opacity-0 translate-y-6 transition duration-700" data-reveal>
            <div class="flex h-full flex-col justify-between">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/20 bg-white/10 text-emerald-200"><i data-lucide="workflow" class="h-5 w-5"></i></span>
                <div class="mt-10">
                    <h3 class="font-display text-2xl font-bold tracking-tighter text-white">Otomasyon Motoru</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">Operasyonel darboğazları ortadan kaldıran akıllı otomasyon ve entegrasyon katmanları.</p>
                </div>
            </div>
        </article>
    </div>

    <div class="mt-10 grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-white/8 to-white/3 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Neden Moonpik?</p>
            <p class="mt-3 text-lg font-semibold text-white">Hızlı teslimat, kontrollü mimari ve net teknik yönetişim.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-white/8 to-white/3 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Güvence</p>
            <p class="mt-3 text-lg font-semibold text-white">Güvenlik, sürdürülebilirlik ve bakım kolaylığı aynı çatı altında.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-white/8 to-white/3 p-6 backdrop-blur-md" data-reveal>
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Sonuç</p>
            <p class="mt-3 text-lg font-semibold text-white">İşinizi büyüten, müşterinin hemen fark ettiği kurumsal bir dijital deneyim.</p>
        </div>
    </div>
</section>

<!-- Technology Radar -->
<section class="mx-auto w-[92%] max-w-7xl py-12" data-reveal>
    <div class="mb-6">
        <p class="mb-3 text-xs uppercase tracking-[0.2em] text-slate-400">Teknoloji Radarı</p>
        <h3 class="font-display text-2xl font-bold text-white">Teknoloji Radarı — Kullandığımız Stack ve Müşteriye Faydası</h3>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-xl border border-white/8 bg-white/3 p-6">
            <h4 class="font-semibold text-white">Laravel & Node.js</h4>
            <p class="mt-2 text-sm text-slate-300">Yüksek güvenlikli ve ultra hızlı arka uç sistemleri. Laravel ile güvenli, test odaklı API'ler; Node.js ile düşük gecikmeli gerçek zamanlı servisler—üretimde gözle görülür hız artışı sağlar.</p>
        </div>

        <div class="rounded-xl border border-white/8 bg-white/3 p-6">
            <h4 class="font-semibold text-white">React & Flutter</h4>
            <p class="mt-2 text-sm text-slate-300">Web'den mobile kusursuz kullanıcı deneyimi. React ile etkileşimli web arayüzleri, Flutter ile native hissi veren mobil uygulamalar geliştiriyoruz; kullanıcı yolculuğunu her platformda tutarlı kılıyoruz.</p>
        </div>

        <div class="rounded-xl border border-white/8 bg-white/3 p-6">
            <h4 class="font-semibold text-white">PostgreSQL & Redis</h4>
            <p class="mt-2 text-sm text-slate-300">Verilerinizi milisaniyeler içinde işleyen veri mimarisi. PostgreSQL ile güçlü sorgulama ve tutarlılık; Redis ile önbellek ve hızlı oturum yönetimi—büyük trafik altında dahi hızlı yanıt süreleri sağlar.</p>
        </div>
    </div>
</section>

<section class="mx-auto w-[92%] max-w-7xl py-16" data-reveal>
    <div class="mb-8">
        <p class="mb-3 text-xs uppercase tracking-[0.2em] text-slate-400">Projelerimiz</p>
        <h3 class="font-display text-2xl font-bold text-white">Projelerimiz</h3>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex min-h-[220px] flex-col items-center justify-center rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-md">
            <div class="flex h-28 w-28 items-center justify-center rounded-2xl border border-white/10 bg-slate-950/60 p-4 shadow-[0_0_0_1px_rgba(255,255,255,0.04)]">
                <img src="{{ asset('logo.png') }}" alt="MoonPik" class="h-full w-full object-contain" />
            </div>
            <p class="mt-4 text-sm font-medium text-white">MoonPik</p>
            <p class="mt-1 text-xs text-slate-500">Proje markası / yer tutucu</p>
        </div>

        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
    </div>
</section>

<section class="mx-auto w-[92%] max-w-7xl py-10" data-reveal>
    <div class="mb-8">
        <p class="mb-3 text-xs uppercase tracking-[0.2em] text-slate-400">İşbirliklerimiz</p>
        <h3 class="font-display text-2xl font-bold text-white">İşbirliklerimiz</h3>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex min-h-[220px] flex-col items-center justify-center rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-md">
            <div class="flex h-28 w-28 items-center justify-center rounded-2xl border border-white/10 bg-slate-950/60 p-4 shadow-[0_0_0_1px_rgba(255,255,255,0.04)]">
                <img src="{{ asset('logo.png') }}" alt="MoonPik" class="h-full w-full object-contain" />
            </div>
            <p class="mt-4 text-sm font-medium text-white">MoonPik</p>
            <p class="mt-1 text-xs text-slate-500">Geçici işbirliği logosu</p>
        </div>

        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
        <div class="min-h-[220px] rounded-3xl border border-dashed border-white/10 bg-white/3 p-6 backdrop-blur-md"></div>
    </div>
</section>

<section id="engine" class="mx-auto w-[92%] max-w-7xl py-32">
    <div class="mb-16" data-reveal>
        <h2 class="bg-gradient-to-b from-white to-slate-500 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl">Çalışma Akışımız</h2>
        <p class="mt-3 max-w-3xl text-slate-300">Bir yazılım fikrini, ölçeklenebilir bir sisteme dönüştüren net ve profesyonel akışımız.</p>
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
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Keşif</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">İhtiyacı anlıyor, hedefi ve kapsamı netleştiriyoruz.</p>
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
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Mimari Tasarım</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Ölçeklenebilir yapıyı ve teknoloji kararlarını kuruyoruz.</p>
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
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Geliştirme</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Modern teknolojilerle yüksek performanslı çözümler üretiyoruz.</p>
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
                    <h3 class="font-display text-lg font-bold tracking-tighter text-white group-hover:text-blue-300 transition-colors duration-300">Sürekli Ölçek</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-400 group-hover:text-slate-200 transition-colors duration-300">Sisteminizi büyütür, izler ve sürdürülebilir hale getiririz.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Moonpik Method -->
<section class="mx-auto w-[92%] max-w-7xl py-16" data-reveal>
    <div class="mb-8">
        <h2 class="font-display text-3xl font-bold text-white">Moonpik Metodu — Nasıl Çalışırız?</h2>
        <p class="mt-3 text-slate-300">Müşterinin süreç endişesini gideren, net ve profesyonel bir akış.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-white/8 bg-white/3 p-6">
            <div class="text-sm text-slate-400">01</div>
            <h4 class="mt-3 font-semibold text-white">Stratejik Analiz</h4>
            <p class="mt-2 text-sm text-slate-300">İşinizin dijital röntgenini çekiyoruz; hedefler, kullanıcılar ve riskler netleşir.</p>
        </div>

        <div class="rounded-2xl border border-white/8 bg-white/3 p-6">
            <div class="text-sm text-slate-400">02</div>
            <h4 class="mt-3 font-semibold text-white">Mühendislik & Geliştirme</h4>
            <p class="mt-2 text-sm text-slate-300">Tasarımın üretime dönüşü: Modern Yazılım Mimarisi ve Yüksek Performanslı Kod ile modüler, testli çözümler inşa ediyoruz.</p>
        </div>

        <div class="rounded-2xl border border-white/8 bg-white/3 p-6">
            <div class="text-sm text-slate-400">03</div>
            <h4 class="mt-3 font-semibold text-white">Kesintisiz Destek</h4>
            <p class="mt-2 text-sm text-slate-300">SLO'lar, izleme ve 7/24 destek ile sisteminiz büyürken yanınızdayız; operasyonel riskleri minimize ederiz.</p>
        </div>
    </div>
</section>

<section id="vision" class="relative w-full py-32 overflow-hidden">
    <!-- Large Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <h2 class="text-9xl md:text-[200px] font-bold text-white opacity-10 whitespace-nowrap">MOONPIK</h2>
    </div>

    <!-- Güvence Panelleri -->
    <div class="relative z-10 mx-auto w-[92%] max-w-7xl">
        <div class="mb-12 max-w-4xl" data-reveal>
            <p class="mb-4 text-xs uppercase tracking-[0.2em] text-slate-400">Mühendislik Güvencesi</p>
            <h2 class="font-display text-3xl font-bold tracking-tighter text-white sm:text-4xl">İşinizi emanet ederken aradığınız güven, hız ve ölçeklenebilirlik burada birleşir.</h2>
            <p class="mt-4 text-slate-300">Her katmanda kurumsal düşünür, sistemi yalnızca bugün için değil, büyüdüğünüz günler için de tasarlarız.</p>
        </div>
        <div class="grid gap-8 md:grid-cols-3">
            <!-- Zero Downtime -->
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-md opacity-0 translate-y-6 transition duration-700 group hover:border-blue-400/50 hover:bg-blue-400/5" data-reveal>
                <div class="flex flex-col">
                    <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-lg border border-blue-400/30 bg-blue-400/10">
                        <i data-lucide="shield-check" class="h-6 w-6 text-blue-300"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold tracking-tighter text-white mb-2">Sıfır Kesinti</h3>
                    <p class="text-sm leading-6 text-gray-400">Kesintisiz erişilebilirlik ve operasyonel süreklilik.</p>
                </div>
            </div>

            <!-- Enterprise Grade -->
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-md opacity-0 translate-y-6 transition duration-700 group hover:border-purple-400/50 hover:bg-purple-400/5" data-reveal>
                <div class="flex flex-col">
                    <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-lg border border-purple-400/30 bg-purple-400/10">
                        <i data-lucide="building-2" class="h-6 w-6 text-purple-300"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold tracking-tighter text-white mb-2">Kurumsal Standart</h3>
                    <p class="text-sm leading-6 text-gray-400">Kurumsal seviyede güvenlik, yetkilendirme ve denetlenebilirlik.</p>
                </div>
            </div>

            <!-- Future Proof -->
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-md opacity-0 translate-y-6 transition duration-700 group hover:border-emerald-400/50 hover:bg-emerald-400/5" data-reveal>
                <div class="flex flex-col">
                    <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-lg border border-emerald-400/30 bg-emerald-400/10">
                        <i data-lucide="zap" class="h-6 w-6 text-emerald-300"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold tracking-tighter text-white mb-2">Geleceğe Hazır</h3>
                    <p class="text-sm leading-6 text-gray-400">Geleceğin teknolojilerine hazır, esnek ve uzun ömürlü mimari.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

<!-- Ecosystem Access Section -->
<section class="relative w-full overflow-hidden py-32 mt-8">
    <!-- Network Background SVG -->
    <svg class="absolute inset-0 w-full h-full opacity-20 pointer-events-none" preserveAspectRatio="none" viewBox="0 0 1000 500">
        <defs>
            <linearGradient id="networkGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:rgba(168,85,247,0.3);stop-opacity:1" />
                <stop offset="100%" style="stop-color:rgba(59,130,246,0.3);stop-opacity:1" />
            </linearGradient>
        </defs>
        
        <!-- Network nodes and connections -->
        <line x1="150" y1="100" x2="350" y2="150" stroke="url(#networkGradient)" stroke-width="1" />
        <line x1="350" y1="150" x2="500" y2="120" stroke="url(#networkGradient)" stroke-width="1" />
        <line x1="500" y1="120" x2="700" y2="180" stroke="url(#networkGradient)" stroke-width="1" />
        <line x1="700" y1="180" x2="850" y2="150" stroke="url(#networkGradient)" stroke-width="1" />
        <line x1="150" y1="100" x2="500" y2="300" stroke="url(#networkGradient)" stroke-width="1" opacity="0.5" />
        <line x1="350" y1="150" x2="700" y2="350" stroke="url(#networkGradient)" stroke-width="1" opacity="0.5" />
        <line x1="500" y1="120" x2="850" y2="380" stroke="url(#networkGradient)" stroke-width="1" opacity="0.5" />
        <line x1="700" y1="180" x2="300" y2="400" stroke="url(#networkGradient)" stroke-width="1" opacity="0.5" />
        
        <!-- Nodes -->
        <circle cx="150" cy="100" r="4" fill="rgba(168,85,247,0.5)" />
        <circle cx="350" cy="150" r="4" fill="rgba(59,130,246,0.5)" />
        <circle cx="500" cy="120" r="5" fill="rgba(168,85,247,0.6)" />
        <circle cx="700" cy="180" r="4" fill="rgba(59,130,246,0.5)" />
        <circle cx="850" cy="150" r="4" fill="rgba(168,85,247,0.5)" />
        <circle cx="300" cy="400" r="3" fill="rgba(59,130,246,0.4)" />
        <circle cx="700" cy="350" r="3" fill="rgba(168,85,247,0.4)" />
        <circle cx="500" cy="300" r="4" fill="rgba(59,130,246,0.4)" />
        <circle cx="850" cy="380" r="3" fill="rgba(168,85,247,0.3)" />
    </svg>

    <!-- Background Radial Gradient Lights -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-96 h-96 rounded-full blur-[120px] opacity-10" style="background: radial-gradient(circle, rgba(168,85,247,0.6) 0%, transparent 70%);"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full blur-[120px] opacity-10" style="background: radial-gradient(circle, rgba(59,130,246,0.6) 0%, transparent 70%);"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 mx-auto w-[92%] max-w-7xl flex flex-col items-center justify-center text-center">
        <p class="mb-4 text-xs uppercase tracking-[0.2em] text-blue-400 opacity-0 translate-y-6 transition duration-700" data-reveal>Erişim ve Kontrol</p>
        
        <h2 class="max-w-3xl bg-gradient-to-b from-white to-slate-400 bg-clip-text font-display text-3xl font-bold tracking-tighter text-transparent sm:text-4xl opacity-0 translate-y-6 transition duration-700" data-reveal>
            Moonpik Bulut Ekosistemine Bağlanın
        </h2>
        
        <p class="mt-6 max-w-2xl text-base leading-8 text-slate-300 opacity-0 translate-y-6 transition duration-700" data-reveal>
            Tüm servislerinize tek bir noktadan erişin; izleme, kontrol ve büyüme aynı merkezde toplansın.
        </p>
        
        <div class="mt-12 opacity-0 translate-y-6 transition duration-700" data-reveal>
            <button class="group relative px-10 py-4 text-base font-semibold text-white rounded-lg overflow-hidden transition-all duration-500 hover:scale-110 hover:-translate-y-1"
                style="
                    background: linear-gradient(135deg, rgba(168, 85, 247, 0.15), rgba(59, 130, 246, 0.15));
                    border: 2px solid;
                    border-image: linear-gradient(135deg, #a855f7, #3b82f6) 1;
                    box-shadow: 
                        0 0 15px rgba(168, 85, 247, 0.4),
                        0 0 30px rgba(59, 130, 246, 0.2),
                        inset 0 0 15px rgba(168, 85, 247, 0.1);
                "
                onmouseover="this.style.boxShadow='0 0 25px rgba(168, 85, 247, 0.8), 0 0 50px rgba(59, 130, 246, 0.6), inset 0 0 25px rgba(168, 85, 247, 0.2)'"
                onmouseout="this.style.boxShadow='0 0 15px rgba(168, 85, 247, 0.4), 0 0 30px rgba(59, 130, 246, 0.2), inset 0 0 15px rgba(168, 85, 247, 0.1)'">
                <span class="relative z-10 inline-flex items-center gap-2">
                    Konsolu Aç
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500/0 via-blue-500/20 to-purple-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
        </div>
    </div>
    </div>
</section>

<!-- Why Moonpik? -->
<section id="why" class="mx-auto w-[92%] max-w-7xl py-16" data-reveal>
    <div class="mb-6">
        <h2 class="font-display text-3xl font-bold text-white">Neden Moonpik?</h2>
        <p class="mt-4 max-w-3xl text-slate-300">Moonpik, hız, güvenlik ve ölçeklenebilirlik konularında kurumsal düzeyde kanıtlanmış bir partnerdir. CEO perspektifiyle konuşursak: kararlarınızın etkisini hızla görmek istersiniz. Biz bunu otomatikleştirilmiş dağıtımlar, SLO odaklı operasyon ve Yüksek Performanslı Kod ile sağlarız; böylece time-to-market kısalır. Platformlarımız Modern Yazılım Mimarisi ilkelerine dayanır ve kurumunuzun büyüme hedeflerine paralel olarak SaaS Ekosistemi içinde sorunsuz şekilde genişler. Riskleri azaltır, hız kazandırır ve yatırımınızın ölçeklenebilir değerini garanti ederiz.</p>
    </div>
</section>

<section class="mx-auto w-[92%] max-w-7xl pb-24 pt-4">
    <div class="rounded-3xl border border-white/10 bg-gradient-to-r from-white/8 via-white/5 to-white/8 p-8 backdrop-blur-md md:p-10" data-reveal>
        <div class="grid gap-8 md:grid-cols-[1.4fr_1fr] md:items-center">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Son Adım</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tighter text-white sm:text-4xl">İşinizi ciddiye alan, sonucu ciddiyetle üreten bir ekip arıyorsanız doğru yerdesiniz.</h2>
                <p class="mt-4 max-w-2xl text-slate-300">Sizi yalnızca proje teslimiyle değil; planlama, geliştirme, canlıya alma ve devam eden bakım süreçleriyle de destekliyoruz.</p>
            </div>
            <div class="flex flex-col gap-3">
                <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">İletişime Geç</a>
                <a href="#solutions" class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">Çözümleri İncele</a>
            </div>
        </div>
    </div>
</section>
@endsection
