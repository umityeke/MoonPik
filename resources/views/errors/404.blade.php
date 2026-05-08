@extends('layouts.app')

@section('title', 'Sayfa Bulunamadı')
@section('description', 'MoonPik kurumsal teknoloji çözümleri')

@section('content')
<section class="section">
    <div class="container">
        <div class="quote-box">
            <span class="eyebrow">404</span>
            <h3>Aradığın sayfa burada değil.</h3>
            <p>İnternet yine bir şeyleri kaybetmiş. Ana sayfaya dön.</p>
            <a class="btn btn-primary" href="{{ route('home') }}">Ana Sayfaya Dön</a>
        </div>
    </div>
</section>
@endsection
