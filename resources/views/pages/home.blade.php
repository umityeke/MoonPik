@extends('layouts.app')

@section('title', 'MoonPik | Live Ready Ana Sayfa')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="hero">
    <div class="container hero-layout">
        <div class="hero-copy">
            <span class="eyebrow">Kurumsal Teknoloji Partneri</span>
            <h1><span data-config-text="shortName">Moonpik</span>, işletmeler için <span class="accent">premium enterprise</span> teknoloji, güvenlik ve dönüşüm çözümleri sunar.</h1>
            <p data-config-text="heroDescription"></p>
            <div class="hero-actions">
                <a href="{{ route('services') }}" class="btn btn-primary">Çözümleri İncele</a>
                <a href="{{ route('about') }}" class="btn btn-secondary">Moonpik'i Tanı</a>
            </div>
            <div class="hero-points">
                <span>Kurumsal Yazılım Mimarisi</span>
                <span>Network & Güvenlik Altyapısı</span>
                <span>AI Destekli Operasyonlar</span>
                <span>Fiziksel Güvenlik Sistemleri</span>
            </div>
        </div>
        <aside class="hero-panel">
            <div class="dashboard-grid">
                <div class="metric-card">
                    <h4>Hizmet Katmanı</h4>
                    <strong>06</strong>
                    <p>Yazılım, AI, siber güvenlik, donanım, kamera ve danışmanlık.</p>
                </div>
                <div class="metric-card">
                    <h4>Yaklaşım</h4>
                    <strong>360°</strong>
                    <p>İş ihtiyacını, güvenliği ve sürdürülebilirliği birlikte ele alır.</p>
                </div>
                <div class="metric-card">
                    <h4>Öncelik</h4>
                    <strong>Risk ↓</strong>
                    <p>Kesinti ve verimsizlik kaynaklarını azaltma odağı.</p>
                </div>
                <div class="metric-card">
                    <h4>Uygulama</h4>
                    <strong>Uçtan Uca</strong>
                    <p>Analiz, kurulum, geliştirme, entegrasyon ve destek tek yapıda.</p>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="section">
    <div class="container section-head">
        <div>
            <span class="eyebrow">Kurumsal Çözüm Portföyü</span>
            <h2>Moonpik, farklı departmanların teknoloji ihtiyaçlarını tek merkezden karşılar.</h2>
        </div>
        <p>Dağınık tedarikçiler, kopuk yazılımlar ve zayıf güvenlik politikaları yüzünden şirketler aynı anda para da zaman da kaybediyor. Biz o kaosu toparlayan taraftayız.</p>
    </div>
    <div class="container grid-3">
        <article class="card">
            <div class="card-top"><div class="icon-box">01</div><span class="tag">Software</span></div>
            <h3>Kurumsal Yazılım Geliştirme</h3>
            <p>Şirketinize özel web tabanlı paneller, iş akışı sistemleri, raporlama araçları ve yönetim ekranları geliştiriyoruz.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">02</div><span class="tag">Mobile</span></div>
            <h3>Mobil Uygulama Çözümleri</h3>
            <p>Saha ekipleri ve iç operasyon ekipleri için performanslı mobil uygulamalar tasarlıyoruz.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">03</div><span class="tag">Cybersecurity</span></div>
            <h3>Siber Güvenlik</h3>
            <p>Kurumsal ağ, kullanıcı erişimi ve güvenlik katmanlarını sağlam şekilde kurguluyoruz.</p>
        </article>
    </div>
</section>
@endsection
