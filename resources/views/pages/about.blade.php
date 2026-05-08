@extends('layouts.app')

@section('title', 'MoonPik | Hakkımızda')
@section('description', 'MoonPik kurumsal yaklaşımı')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Hakkımızda</span>
        <h1>Moonpik, teknoloji ile operasyonu birbirine gerçekten bağlayan kurumsal bir yapıdır.</h1>
        <p class="lead">Biz sadece yazılım yazan bir ekip değiliz. İhtiyacı analiz eden, güvenliği baştan kurgulayan ve sahadaki gerçek karşılığı önemseyen bir teknoloji yaklaşımı sunuyoruz.</p>
    </div>
</section>

<section class="section">
    <div class="container grid-2">
        <div class="quote-box">
            <span class="eyebrow">Vizyon</span>
            <h3>Güvenli, ölçeklenebilir ve iş odaklı sistemler kurmak.</h3>
            <p>Moonpik’in hedefi işletmelerin teknoloji ihtiyaçlarını tek çatı altında toplayarak sürdürülebilir çözümler sunmaktır.</p>
        </div>
        <div class="mini-card">
            <h3>Uzun Vadeli Yaklaşım</h3>
            <p>Geçici yamalar yerine sağlam ve kalıcı çözümler önceliklendirilir.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container grid-3">
        <article class="card">
            <h3>Net Analiz</h3>
            <p>İş süreçlerinizi teknik bir sorun gibi değil, büyüme fırsatı olarak ele alırız.</p>
        </article>
        <article class="card">
            <h3>Sağlam Mimari</h3>
            <p>Modern Yazılım Mimarisi, SaaS Ekosistemi ve Yüksek Performanslı Kod prensipleriyle ilerleriz.</p>
        </article>
        <article class="card">
            <h3>Sürdürülebilir Destek</h3>
            <p>Canlıya aldıktan sonra da ölçüm, iyileştirme ve bakım tarafında yanınızda oluruz.</p>
        </article>
    </div>
</section>
@endsection
