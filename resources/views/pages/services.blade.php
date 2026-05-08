@extends('layouts.app')

@section('title', 'MoonPik | Hizmetler')
@section('description', 'MoonPik hizmet alanları')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Hizmetler</span>
        <h1>Moonpik hizmet alanları tek bir ihtiyaca değil, bütün işletme yapısına hitap eder.</h1>
        <p class="lead">Donanım, yazılım, güvenlik ve AI tarafını birbirinden kopuk çözmek yerine aynı stratejik bakışla kuruyoruz.</p>
    </div>
</section>

<section class="section">
    <div class="container grid-3">
        <article class="card">
            <div class="card-top"><div class="icon-box">01</div><span class="tag">Software</span></div>
            <h3>Kurumsal Yazılım Geliştirme</h3>
            <p>Web tabanlı paneller, yönetim sistemleri, raporlama ve iş akışı araçları.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">02</div><span class="tag">Mobile</span></div>
            <h3>Mobil Uygulama</h3>
            <p>Android ve iOS odaklı, saha ve müşteri kullanımına uygun uygulamalar.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">03</div><span class="tag">Security</span></div>
            <h3>Siber Güvenlik</h3>
            <p>Firewall, ağ segmentasyonu ve erişim politikaları.</p>
        </article>
    </div>
</section>

<section class="section">
    <div class="container grid-3">
        <article class="card">
            <div class="card-top"><div class="icon-box">04</div><span class="tag">Cloud</span></div>
            <h3>Bulut Otomasyonu</h3>
            <p>Tekrarlayan operasyonları hızlandıran, hata payını azaltan ve ölçeklenebilirliği artıran iş akışları.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">05</div><span class="tag">Data</span></div>
            <h3>Veri Mimarisi</h3>
            <p>PostgreSQL ve Redis odaklı hızlı, tutarlı ve güvenilir veri akışları.</p>
        </article>
        <article class="card">
            <div class="card-top"><div class="icon-box">06</div><span class="tag">AI</span></div>
            <h3>AI Destekli Akışlar</h3>
            <p>Operasyonları hızlandıran, karar süreçlerini destekleyen akıllı otomasyon çözümleri.</p>
        </article>
    </div>
</section>
@endsection
