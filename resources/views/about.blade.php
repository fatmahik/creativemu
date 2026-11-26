@extends('layouts.app')

@section('title', 'Tentang Kami | Creativemu')

@section('content')

<style>
.about-page {
    color: #292333;
    overflow: hidden;
}

.about-page * {
    box-sizing: border-box;
}

.about-page .wrap {
    width: min(1160px, calc(100% - 40px));
    margin: auto;
}

.about-page .eyebrow {
    color: #8055b5;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.about-page h1 {
    max-width: 850px;
    margin: 22px 0;
    font-size: clamp(38px, 6vw, 68px);
    line-height: 1.12;
    letter-spacing: -2px;
    color: #292333;
}

.about-page h1 em,
.about-page h2 em {
    color: #8055b5;
    font-style: normal;
}

.about-page h2 {
    margin: 15px 0 22px;
    font-size: clamp(30px, 4vw, 43px);
    line-height: 1.25;
    color: #30263d;
}

.about-page p {
    color: #777080;
    font-size: 15px;
    line-height: 1.9;
}

/* HERO */
.about-page .about-hero {
    padding: 110px 0 100px;
    background:
        radial-gradient(circle at 85% 20%, rgba(170,125,220,.22), transparent 30%),
        linear-gradient(135deg, #f8f4ff, #ffffff 65%);
}

.about-page .hero-description {
    max-width: 690px;
    color: #716b7b;
    font-size: 17px;
    line-height: 1.9;
}

.about-page .about-button {
    display: inline-block;
    margin-top: 24px;
    padding: 15px 27px;
    border-radius: 50px;
    background: #7546a8;
    color: white;
    text-decoration: none;
    font-weight: 700;
    transition: .3s;
}

.about-page .about-button:hover {
    background: #593184;
    transform: translateY(-3px);
}

/* VISI MISI */
.about-page .about-section {
    padding: 95px 0;
}

.about-page .about-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 75px;
    align-items: start;
}

.about-page .vision-card {
    padding: 32px;
    margin-bottom: 20px;
    border: 1px solid #eee5f8;
    border-radius: 20px;
    background: #fbf9ff;
}

.about-page .vision-card h3 {
    color: #7546a8;
    font-size: 21px;
    margin: 0 0 12px;
}

/* TIM CREATIVEMU */
.about-page .team-section {
    padding: 100px 0;
    background: #f8f5fc;
}

.about-page .section-heading {
    max-width: 700px;
    margin: 0 auto 55px;
    text-align: center;
}

.about-page .section-heading p {
    color: #777080;
    line-height: 1.8;
}

.about-page .team-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 25px;
}

.about-page .team-card {
    overflow: hidden;
    border: 1px solid #eee7f5;
    border-radius: 20px;
    background: white;
    text-align: center;
    transition: .3s;
}

.about-page .team-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 18px 45px rgba(70, 35, 105, .10);
}

.about-page .team-photo {
    height: 290px;
    padding: 15px 15px 0;
    background: linear-gradient(145deg, #f0e4fb, #fff);
}

.about-page .team-photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center bottom;
}

.about-page .team-info {
    padding: 22px 15px 25px;
}

.about-page .team-info h3 {
    margin: 0 0 8px;
    color: #30263d;
    font-size: 18px;
}

.about-page .team-info p {
    margin: 0;
    color: #8055b5;
    font-size: 13px;
    font-weight: 700;
}

/* CARA KERJA */
.about-page .work-section {
    padding: 100px 0;
    background: white;
}

.about-page .work-section .section-heading {
    margin-bottom: 0;
}

/* CTA */
.about-page .about-cta {
    padding: 85px 0;
    background: linear-gradient(120deg, #593184, #8554b7);
    color: white;
    text-align: center;
}

.about-page .about-cta h2 {
    color: white;
}

.about-page .about-cta p {
    color: #eee3fa;
    line-height: 1.8;
}

.about-page .about-cta .about-button {
    background: white;
    color: #70449e;
}

.about-page .about-cta .about-button:hover {
    background: #f0e5fa;
}

/* WORK PROCESS */
.about-page .work-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:50px}
.about-page .work-card{position:relative;padding:30px 24px;min-height:260px;border:1px solid #eee5f8;border-radius:20px;background:#fff;transition:.3s}
.about-page .work-card:hover{transform:translateY(-7px);box-shadow:0 18px 40px rgba(70,35,105,.10)}
.about-page .work-number{position:absolute;top:20px;right:22px;color:#d9c6ed;font-size:25px;font-weight:800}
.about-page .work-icon{display:flex;align-items:center;justify-content:center;width:55px;height:55px;margin-bottom:25px;border-radius:16px;background:#f3eafa;color:#8055b5;font-size:28px;font-weight:700}
.about-page .work-card h3{margin:0 0 12px;color:#30263d;font-size:18px}
.about-page .work-card p{margin:0;font-size:14px}
@media(max-width:900px){.about-page .work-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:520px){.about-page .work-grid{grid-template-columns:1fr}}
/* RESPONSIVE */
@media(max-width: 800px) {
    .about-page .about-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .about-page .team-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .about-page .team-photo {
        height: 240px;
    }
}

@media(max-width: 520px) {
    .about-page .team-grid {
        grid-template-columns: 1fr;
    }

    .about-page .about-hero {
        padding: 75px 0;
    }

    .about-page .about-section,
    .about-page .team-section,
    .about-page .work-section {
        padding: 65px 0;
    }
}
</style>

<div class="about-page">

    {{-- HERO --}}
    <section class="about-hero">
        <div class="wrap">
            <span class="eyebrow">TENTANG CREATIVEMU</span>

            <h1>
                Mengubah ide menjadi
                <em>pertumbuhan digital.</em>
            </h1>

            <p class="hero-description">
                Creativemu hadir sebagai partner digital untuk membantu
                bisnis membangun kehadiran online, menjangkau lebih banyak
                pelanggan, dan berkembang melalui strategi kreatif,
                teknologi, serta pemasaran digital yang terarah.
            </p>

            <a href="{{ route('home') }}#kontak" class="about-button">
                Mari Berkolaborasi ↗
            </a>
        </div>
    </section>

    {{-- PROFIL DAN VISI MISI --}}
    <section class="about-section">
        <div class="wrap about-grid">

            <div>
                <span class="eyebrow">SIAPA KAMI?</span>

                <h2>
                    Partner digital untuk
                    <em>masa depan bisnis.</em>
                </h2>

                <p>
                    Setiap bisnis memiliki potensi untuk berkembang.
                    Namun, di tengah persaingan digital yang semakin
                    dinamis, dibutuhkan strategi yang tepat agar sebuah
                    brand dapat dikenal, dipercaya, dan dipilih pelanggan.
                </p>

                <p>
                    Creativemu memadukan kreativitas, strategi pemasaran,
                    dan teknologi untuk menghadirkan solusi digital yang
                    sesuai dengan kebutuhan bisnis.
                </p>
            </div>

            <div>
                <div class="vision-card">
                    <h3>Visi Kami</h3>

                    <p>
                        Menjadi partner pertumbuhan bisnis yang kreatif,
                        inovatif, dan terpercaya di era digital.
                    </p>
                </div>

                <div class="vision-card">
                    <h3>Misi Kami</h3>

                    <p>
                        Menghadirkan solusi digital yang relevan,
                        membangun kolaborasi yang transparan, memberikan
                        pelayanan profesional, serta terus berkembang
                        mengikuti perubahan teknologi dan kebutuhan pasar.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- TIM CREATIVEMU --}}
    <section class="team-section">
        <div class="wrap">

            <div class="section-heading">
                <span class="eyebrow">KENALI TIM KAMI</span>

                <h2>
                    Orang-orang di balik
                    <em>Creativemu.</em>
                </h2>

                <p>
                    Didukung oleh tim dengan keahlian dan pengalaman
                    di bidangnya masing-masing, kami bekerja bersama
                    untuk menghadirkan solusi digital terbaik.
                </p>
            </div>

            <div class="team-grid">

                {{-- AGUS SUSANTO --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-1-min.png') }}" alt="Agus Susanto" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Agus Susanto</h3>
                        <p>Founder &amp; CEO</p>
                    </div>
                </div>

                {{-- NUNUNG WIJAYANTI --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-2-min.png') }}" alt="Nunung Wijayanti" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Nunung Wijayanti</h3>
                        <p>HR &amp; Finance</p>
                    </div>
                </div>

                {{-- LILIN RIANI ROMADONI --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-3-min.png') }}" alt="Lilin Riani Romadoni" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Lilin Riani Romadoni</h3>
                        <p>Administrator</p>
                    </div>
                </div>

                {{-- RITA ARIYANI --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-5-min.png') }}" alt="Rita Ariyani" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Rita Ariyani</h3>
                        <p>Customer Service</p>
                    </div>
                </div>

                {{-- STEFANUS CHRIS --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-6-min-1.png') }}" alt="Stefanus Chris" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Stefanus Chris</h3>
                        <p>Website Developer</p>
                    </div>
                </div>

                {{-- RIZKY SETIAWAN --}}
                <div class="team-card">
                    <div class="team-photo">
                        <img src="{{ asset('images/creativemu-asli/Team-8-min.png') }}" alt="Rizky Setiawan" loading="eager">
                    </div>
                    <div class="team-info">
                        <h3>Rizky Setiawan</h3>
                        <p>Social Media Specialist</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CARA KAMI BEKERJA --}}
<section class="work-section">
    <div class="wrap">
        <div class="section-heading">
            <span class="eyebrow">CARA KAMI BEKERJA</span>
            <h2>Dari ide menjadi <em>hasil nyata.</em></h2>
            <p>Setiap proyek kami kerjakan melalui tahapan yang terarah agar solusi digital sesuai dengan kebutuhan bisnis Anda.</p>
        </div>

        <div class="work-grid">
            <div class="work-card">
                <span class="work-number">01</span>
                <div class="work-icon">⌕</div>
                <h3>Diskusi & Analisis</h3>
                <p>Kami memahami kebutuhan, tujuan, dan tantangan bisnis Anda.</p>
            </div>
            <div class="work-card">
                <span class="work-number">02</span>
                <div class="work-icon">✦</div>
                <h3>Perencanaan Strategi</h3>
                <p>Menyusun konsep dan strategi digital yang sesuai dengan target bisnis.</p>
            </div>
            <div class="work-card">
                <span class="work-number">03</span>
                <div class="work-icon">↗</div>
                <h3>Eksekusi Proyek</h3>
                <p>Menjalankan strategi dengan kreativitas, teknologi, dan pengerjaan profesional.</p>
            </div>
            <div class="work-card">
                <span class="work-number">04</span>
                <div class="work-icon">✓</div>
                <h3>Evaluasi & Pengembangan</h3>
                <p>Mengevaluasi hasil dan mencari peluang untuk pertumbuhan selanjutnya.</p>
            </div>
        </div>
    </div>
</section>
{{-- CTA --}}
    <section class="about-cta">
        <div class="wrap">
            <span class="eyebrow" style="color:#ead8ff">
                WAKTUNYA BERTUMBUH
            </span>

            <h2>Siap mengembangkan bisnis bersama Creativemu?</h2>

            <p>
                Mari diskusikan kebutuhan digital bisnis Anda
                bersama tim Creativemu.
            </p>

            <a href="{{ route('home') }}#kontak" class="about-button">
                Hubungi Kami ↗
            </a>
        </div>
    </section>

</div>

@endsection

