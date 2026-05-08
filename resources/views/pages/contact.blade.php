@extends('layouts.app')

@section('title', 'MoonPik | İletişim')
@section('description', 'MoonPik iletişim ve teklif talebi')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">İletişim</span>
        <h1>Kurumsal teknoloji ihtiyaçlarınız için Moonpik ile doğrudan iletişime geçin.</h1>
        <p class="lead">Projeniz ister özel yazılım, ister güvenlik altyapısı, ister dijital dönüşüm konusu olsun; Moonpik planlama, uygulama ve sürdürülebilirlik tarafını aynı ciddiyetle ele alır.</p>
    </div>
</section>

<section class="section">
    <div class="container cta-box">
        <div>
            <span class="eyebrow">Teklif / Görüşme Formu</span>
            <h2 style="font-size:clamp(2rem,4vw,3rem);line-height:1.08;margin:12px 0;">İhtiyacınızı yazın, kurumsal çerçevede dönüş yapalım.</h2>
            <div class="quote-box" style="margin-top:18px;">
                <h3>İletişim Bilgileri</h3>
                <p><strong>E-posta:</strong> <span data-config-text="email">info@moonpik.com</span></p>
                <p><strong>Telefon:</strong> <span data-config-text="phone">+90 5XX XXX XX XX</span></p>
                <p><strong>WhatsApp:</strong> <span data-config-text="whatsapp">+90 5XX XXX XX XX</span></p>
                <p><strong>Adres:</strong> <span data-config-text="address">İstanbul, Türkiye</span></p>
            </div>

            <div class="quote-box" style="margin-top:18px;">
                <h3>Ne Konuşabiliriz?</h3>
                <p>Kurumsal yazılım, SaaS mimarisi, bulut otomasyonu, mobil ürünler, güvenlik altyapısı ve dijital dönüşüm projeleri.</p>
                <p>Ön değerlendirme sonrası size net kapsam, yol haritası ve ilk adım önerisiyle dönüş yaparız.</p>
            </div>
        </div>
        <aside class="contact-panel">
            <h3>Form Alanı</h3>
            <form class="contact-form" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
                <div class="form-grid">
                    <input type="text" name="ad_soyad" placeholder="Ad Soyad" required>
                    <input type="text" name="firma_adi" placeholder="Firma Adı">
                </div>
                <div class="form-grid">
                    <input type="email" name="email" placeholder="E-posta Adresi" required>
                    <input type="tel" name="telefon" placeholder="Telefon Numarası">
                </div>
                <select name="kategori">
                    <option>İhtiyaç Kategorisi Seçin</option>
                    <option>Kurumsal Yazılım</option>
                    <option>Siber Güvenlik</option>
                    <option>Mobil Uygulama</option>
                    <option>Kamera ve Altyapı</option>
                    <option>AI ve Otomasyon</option>
                </select>
                <input type="text" name="konu" placeholder="Konu">
                <textarea rows="5" name="mesaj" placeholder="Projenizi veya ihtiyacınızı kısaca yazın"></textarea>
                <button type="submit" class="btn btn-primary btn-block">Talep Gönder</button>
            </form>
        </aside>
    </div>
</section>

<section class="section">
    <div class="container grid-3">
        <article class="card">
            <h3>Hızlı Ön Görüşme</h3>
            <p>İlk temas sonrası ihtiyacı anlayıp doğru ekip ve doğru çözüm yönünü belirleriz.</p>
        </article>
        <article class="card">
            <h3>Net Teklif Yapısı</h3>
            <p>Kapsam, teknik yaklaşım ve takvim baştan şeffaf biçimde paylaşılır.</p>
        </article>
        <article class="card">
            <h3>Uzun Vadeli İşbirliği</h3>
            <p>Proje tamamlandıktan sonra da bakım, geliştirme ve destek tarafında yanınızda kalırız.</p>
        </article>
    </div>
</section>
@endsection
