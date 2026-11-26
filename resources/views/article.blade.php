@extends('layouts.app')

@section('title', $article->title . ' | Creativemu')
@section('meta_description', $article->excerpt)

@section('content')

@php
    $coverImage = $article->image ?: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1400&q=85';
@endphp

<style>
.article-page{color:#30263d;overflow:hidden}
.article-page *{box-sizing:border-box}
.article-page .wrap{width:min(1000px,calc(100% - 40px));margin:auto}
.article-detail-hero{padding:65px 0 75px;background:linear-gradient(135deg,#f7f2fd,#fff 75%)}
.article-back{display:inline-flex;align-items:center;gap:8px;color:#8055b5;text-decoration:none;font-size:13px;font-weight:700;transition:.2s}
.article-back:hover{color:#593184;transform:translateX(-4px)}
.article-detail-heading{max-width:850px;margin:55px auto 0;text-align:center}
.article-label{color:#8055b5;font-size:11px;font-weight:800;letter-spacing:3px}
.article-detail-heading h1{margin:20px 0;font-size:clamp(34px,5.5vw,58px);line-height:1.17;letter-spacing:-1.8px;color:#30263d}
.article-detail-heading>p{max-width:700px;margin:0 auto;color:#81798c;font-size:17px;line-height:1.9}
.article-meta{display:flex;justify-content:center;align-items:center;gap:25px;margin-top:30px;color:#93899e;font-size:13px}
.article-meta span:first-child{color:#8055b5;font-weight:700}
.article-detail-section{padding:0 0 100px}
.article-detail-container{max-width:900px!important}
.article-cover{position:relative;height:470px;margin-top:-20px;overflow:hidden;border-radius:23px;background:#f4edf9;box-shadow:0 20px 55px rgba(60,35,85,.12)}
.article-cover img{width:100%;height:100%;object-fit:cover;display:block}
.article-content{max-width:760px;margin:65px auto 0}
.article-content-label{margin-bottom:25px;color:#8055b5;font-size:11px;font-weight:800;letter-spacing:2.5px}
.article-body{color:#625b6c;font-size:16px;line-height:2.05;overflow-wrap:anywhere}
.article-body p{margin:0 0 22px}
.article-body h2{margin:42px 0 17px;color:#30263d;font-size:28px;line-height:1.35}
.article-body h3{margin:32px 0 13px;color:#30263d;font-size:22px}
.article-body ul,.article-body ol{padding-left:25px;margin:15px 0 25px}
.article-body li{padding-left:5px;margin-bottom:9px}
.article-body strong{color:#30263d}
.article-body a{color:#8055b5;text-decoration:underline}
.article-share-note{margin-top:55px;padding:30px;border-left:4px solid #8055b5;border-radius:0 15px 15px 0;background:#f8f4fc}
.article-share-note span{color:#8055b5;font-size:11px;font-weight:800;letter-spacing:2px}
.article-share-note p{margin:10px 0 0;color:#777080;font-size:15px;line-height:1.8}
.article-bottom-cta{margin-top:75px;padding:55px 35px;border-radius:23px;background:linear-gradient(120deg,#593184,#8554b7);text-align:center;color:white}
.article-bottom-cta .article-label{color:#ead8ff}
.article-bottom-cta h2{margin:15px 0;font-size:clamp(27px,4vw,38px);color:white}
.article-bottom-cta p{max-width:580px;margin:0 auto;color:#eee3fa;line-height:1.9}
.article-cta-button{display:inline-block;margin-top:25px;padding:14px 27px;border-radius:50px;background:white;color:#70449e;text-decoration:none;font-size:14px;font-weight:800;transition:.3s}
.article-cta-button:hover{background:#f0e5fa;transform:translateY(-3px)}
.article-back-bottom{display:block;width:max-content;max-width:100%;margin:35px auto 0;color:#8055b5;text-decoration:none;font-size:14px;font-weight:700}
.article-back-bottom:hover{text-decoration:underline}
@media(max-width:700px){.article-detail-hero{padding:45px 0 60px}.article-detail-heading{margin-top:40px}.article-meta{flex-wrap:wrap;gap:12px 20px}.article-cover{height:280px;margin-top:-10px;border-radius:17px}.article-content{margin-top:40px}.article-body{font-size:15px}.article-body h2{font-size:24px}.article-bottom-cta{padding:40px 22px;margin-top:50px}.article-detail-section{padding-bottom:65px}}
</style>

<div class="article-page">

    <section class="article-detail-hero">
        <div class="wrap">
            <a href="{{ route('articles') }}" class="article-back">
                ← Kembali ke Artikel
            </a>

            <div class="article-detail-heading">
                <span class="article-label">THE CREATIVEMU JOURNAL</span>

                <h1>{{ $article->title }}</h1>

                <p>{{ $article->excerpt }}</p>

                <div class="article-meta">
                    <span>✦ Creativemu Editorial</span>
                    <span>
                        {{ optional($article->published_at)->format('d F Y') ?? 'Artikel terbaru' }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="article-detail-section">
        <div class="wrap article-detail-container">

            <div class="article-cover">
                <img src="{{ $coverImage }}" alt="{{ $article->title }}">
            </div>

            <article class="article-content">
                <div class="article-content-label">
                    WAWASAN DIGITAL & BISNIS
                </div>

                <div class="article-body">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <div class="article-share-note">
                    <span>CREATIVEMU JOURNAL</span>
                    <p>
                        Ide kreatif, strategi digital, dan solusi untuk
                        membantu bisnis berkembang lebih jauh.
                    </p>
                </div>
            </article>

            <div class="article-bottom-cta">
                <span class="article-label">LET'S GROW TOGETHER</span>

                <h2>Setiap ide punya peluang untuk berkembang.</h2>

                <p>
                    Temukan solusi digital yang tepat bersama tim Creativemu.
                    Mari mulai langkah baru untuk bisnis Anda.
                </p>

                <a href="{{ route('home') }}#kontak" class="article-cta-button">
                    Konsultasi Sekarang ↗
                </a>
            </div>

            <a href="{{ route('articles') }}" class="article-back-bottom">
                ← Jelajahi Artikel Lainnya
            </a>

        </div>
    </section>

</div>

@endsection
