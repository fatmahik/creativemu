@extends('layouts.app')

@section('title', 'Artikel & Insight Digital | Creativemu')
@section('meta_description', 'Temukan artikel, wawasan digital marketing, SEO, website, dan strategi bisnis terbaru dari Creativemu.')

@section('content')

<style>
.journal-page{color:#30263d;overflow:hidden}
.journal-page *{box-sizing:border-box}
.journal-page .wrap{width:min(1160px,calc(100% - 40px));margin:auto}
.journal-hero{padding:85px 0;background:linear-gradient(120deg,#f8f4ff,#fff 65%);position:relative}
.journal-hero-grid{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:65px}
.journal-label{display:inline-block;color:#8055b5;font-size:11px;font-weight:800;letter-spacing:3px}
.journal-hero h1{margin:22px 0;font-size:clamp(42px,6vw,70px);line-height:1.08;letter-spacing:-2.5px;color:#30263d}
.journal-hero h1 span{color:#8055b5}
.journal-hero p{max-width:490px;color:#777080;font-size:16px;line-height:1.9}
.journal-button{display:inline-block;margin-top:22px;padding:14px 25px;border-radius:50px;background:#7546a8;color:#fff;text-decoration:none;font-size:14px;font-weight:700;transition:.3s}
.journal-button:hover{background:#593184;transform:translateY(-3px)}
.journal-hero-image{height:390px;position:relative;border-radius:25px;overflow:hidden;box-shadow:0 25px 60px rgba(60,35,85,.15)}
.journal-hero-image img{width:100%;height:100%;object-fit:cover}
.journal-image-caption{position:absolute;bottom:20px;left:20px;right:20px;padding:20px;border-radius:15px;background:rgba(255,255,255,.92);backdrop-filter:blur(10px)}
.journal-image-caption span{display:block;color:#8055b5;font-size:10px;font-weight:800;letter-spacing:2px}
.journal-image-caption strong{display:block;margin-top:7px;color:#30263d;font-size:17px}
.journal-section{padding-top:90px;padding-bottom:100px}
.journal-heading{display:flex;justify-content:space-between;align-items:end;margin-bottom:35px}
.journal-heading h2{margin:10px 0;color:#30263d;font-size:36px;letter-spacing:-1px}
.journal-heading p{margin:0;color:#888091}
.journal-featured{display:grid;grid-template-columns:1.15fr 1fr;min-height:370px;margin-bottom:55px;overflow:hidden;border:1px solid #eee7f5;border-radius:23px;background:#fbf9ff;text-decoration:none;transition:.3s}
.journal-featured:hover{transform:translateY(-5px);box-shadow:0 20px 45px rgba(60,35,85,.10)}
.journal-featured-image{min-height:370px;overflow:hidden}
.journal-featured-image img{width:100%;height:100%;object-fit:cover;transition:.5s}
.journal-featured:hover .journal-featured-image img{transform:scale(1.04)}
.journal-featured-content{display:flex;flex-direction:column;justify-content:center;align-items:flex-start;padding:42px}
.journal-featured-content small,.journal-card-content small{margin:15px 0;color:#978ca2;font-size:12px}
.journal-featured-content h3{margin:0 0 15px;color:#30263d;font-size:clamp(24px,3vw,34px);line-height:1.3}
.journal-featured-content p,.journal-card-content p{color:#81798c;font-size:14px;line-height:1.8}
.journal-read{display:inline-block;margin-top:18px;color:#8055b5;font-size:13px;font-weight:800}
.journal-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:25px}
.journal-card{display:block;overflow:hidden;border:1px solid #eee7f5;border-radius:19px;background:white;text-decoration:none;transition:.3s}
.journal-card:hover{transform:translateY(-7px);box-shadow:0 18px 40px rgba(60,35,85,.11)}
.journal-card-image{height:225px;overflow:hidden;background:#f5effb}
.journal-card-image img{width:100%;height:100%;object-fit:cover;transition:.5s}
.journal-card:hover .journal-card-image img{transform:scale(1.06)}
.journal-card-content{padding:23px}
.journal-card-content small{display:block;margin:0 0 12px}
.journal-card-content h3{margin:0;color:#30263d;font-size:19px;line-height:1.45}
.journal-card-content p{margin-bottom:0}
.journal-empty{padding:65px 25px;border:1px dashed #d9c8e9;border-radius:20px;background:#fbf9ff;text-align:center}
.journal-empty h3{color:#7546a8;font-size:25px}
.journal-empty p{color:#81798c}
.journal-pagination{margin-top:45px}
.journal-pagination nav{display:flex;justify-content:center}
.journal-pagination a,.journal-pagination span{border-radius:9px!important}
.journal-cta{padding:85px 0;background:linear-gradient(120deg,#593184,#8554b7);text-align:center;color:white}
.journal-cta h2{max-width:650px;margin:15px auto;font-size:clamp(28px,4vw,42px);line-height:1.25;color:white}
.journal-cta p{color:#eee3fa;line-height:1.8}
.journal-cta .journal-label{color:#ead8ff}
.journal-cta .journal-button{background:white;color:#70449e}
.journal-cta .journal-button:hover{background:#f0e5fa}
@media(max-width:850px){.journal-hero-grid{grid-template-columns:1fr;gap:35px}.journal-hero-image{height:330px}.journal-featured{grid-template-columns:1fr}.journal-featured-image{height:300px;min-height:300px}.journal-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:550px){.journal-hero{padding:65px 0}.journal-hero-image{height:250px}.journal-section{padding-top:60px;padding-bottom:70px}.journal-heading h2{font-size:29px}.journal-grid{grid-template-columns:1fr}.journal-featured-content{padding:25px}.journal-featured-image{height:230px;min-height:230px}.journal-card-image{height:220px}.journal-cta{padding:65px 0}}
</style>

<div class="journal-page">

    <section class="journal-hero">
        <div class="wrap journal-hero-grid">
            <div>
                <span class="journal-label">THE CREATIVEMU JOURNAL</span>
                <h1>Discover.<br><span>Learn. Grow.</span></h1>
                <p>
                    Ruang untuk menemukan ide, memahami tren digital,
                    dan mendapatkan inspirasi baru demi perkembangan
                    bisnis yang lebih baik.
                </p>
                <a href="#artikel-terbaru" class="journal-button">
                    Temukan Wawasan <span>↗</span>
                </a>
            </div>

            <div class="journal-hero-image">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1100&q=85" alt="Ruang kerja kreatif">
                <div class="journal-image-caption">
                    <span>THINK CREATIVELY</span>
                    <strong>Fresh ideas. New perspectives. Better growth.</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="journal-section wrap" id="artikel-terbaru">
        <div class="journal-heading">
            <div>
                <span class="journal-label">READ SOMETHING NEW</span>
                <h2>Artikel Pilihan</h2>
                <p>Inspirasi dan pengetahuan untuk perjalanan digital Anda.</p>
            </div>
        </div>

        @if($articles->count())
            @php($featured = $articles->first())

            <a class="journal-featured" href="{{ route('article', $featured->slug) }}">
                <div class="journal-featured-image">
                    <img src="{{ $featured->image ?: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=85' }}" alt="{{ $featured->title }}">
                </div>
                <div class="journal-featured-content">
                    <span class="journal-label">FEATURED STORY</span>
                    <small>{{ optional($featured->published_at)->format('d F Y') ?? 'Creativemu Journal' }}</small>
                    <h3>{{ $featured->title }}</h3>
                    <p>{{ $featured->excerpt }}</p>
                    <span class="journal-read">Baca Artikel Lengkap ↗</span>
                </div>
            </a>

            @if($articles->count() > 1)
                <div class="journal-heading">
                    <div>
                        <span class="journal-label">MORE TO EXPLORE</span>
                        <h2>Artikel Terbaru</h2>
                    </div>
                </div>

                <div class="journal-grid">
                    @foreach($articles->skip(1) as $a)
                        <a class="journal-card" href="{{ route('article', $a->slug) }}">
                            <div class="journal-card-image">
                                <img src="{{ $a->image ?: 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=85' }}" alt="{{ $a->title }}" loading="lazy">
                            </div>
                            <div class="journal-card-content">
                                <small>{{ optional($a->published_at)->format('d F Y') ?? 'Creativemu Journal' }}</small>
                                <h3>{{ $a->title }}</h3>
                                <p>{{ $a->excerpt }}</p>
                                <span class="journal-read">Baca selengkapnya ↗</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

            <div class="journal-pagination">
                {{ $articles->links() }}
            </div>
        @else
            <div class="journal-empty">
                <h3>Artikel Segera Hadir</h3>
                <p>Kami sedang menyiapkan wawasan dan inspirasi terbaru untuk Anda.</p>
            </div>
        @endif
    </section>

    <section class="journal-cta">
        <div class="wrap">
            <span class="journal-label">LET'S CREATE SOMETHING GREAT</span>
            <h2>Ide besar dimulai dari percakapan sederhana.</h2>
            <p>Punya rencana mengembangkan bisnis? Mari diskusikan bersama tim Creativemu.</p>
            <a href="{{ route('home') }}#kontak" class="journal-button">
                Konsultasi Sekarang ↗
            </a>
        </div>
    </section>

</div>

@endsection
