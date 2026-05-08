@extends('layouts.app')

@section('title', 'MoonPik | Projeler')
@section('description', 'MoonPik proje sınıfları')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Projeler</span>
        <h1>Moonpik’in hedeflediği proje tipleri kurumsal ihtiyaçtan doğar, gösterişten değil.</h1>
        <p class="lead">Şirketler güzel görünen ama gerçek iş yükünü taşımayan sistemlerden yoruldu. O yüzden burada sahada işe yarayan çözüm sınıfları var.</p>
    </div>
</section>

<section class="section">
    <div class="container grid-3">
        <article class="card">
            <h3>Kurumsal Yönetim ve Operasyon Sistemleri</h3>
            <p>Personel, süreç, takip, raporlama, stok ve saha yönetimi için merkezi yazılım yapıları.</p>
        </article>
        <article class="card">
            <h3>Ağ, Güvenlik ve Tesis Koruma</h3>
            <p>Firewall, ağ segmentasyonu, kullanıcı erişimi ve kamera altyapısı.</p>
        </article>
        <article class="card">
            <h3>AI Destekli Dijital Ürünler</h3>
            <p>Mobil uygulamalar, akıllı yönetim araçları ve otomasyon odaklı ürün yapıları.</p>
        </article>
    </div>
</section>
@endsection
