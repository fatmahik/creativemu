
@extends('layouts.app')

@section('title', $service->title . ' | Jasa Digital Marketing Creativemu')
@section('meta_description', $service->excerpt ?: 'Solusi digital marketing Creativemu untuk membantu mengembangkan bisnis Anda.')

@section('content')

@php
    $slug = strtolower($service->slug ?? '');
    $category = strtolower($service->category ?? '');
    $title = strtolower($service->title ?? '');

    $isMarketplaceAds =
        str_contains($slug, 'iklan-marketplace') ||
        str_contains($slug, 'iklan-market') ||
        (str_contains($title, 'iklan') && str_contains($category, 'market'));

    $waNumber = '6289618472759';
    $waMessage = rawurlencode('Halo Creativemu, saya ingin konsultasi mengenai layanan ' . $service->title . '.');
    $waUrl = 'https://wa.me/' . $waNumber . '?text=' . $waMessage;

    $benefits = $isMarketplaceAds ? [
        ['01', 'Produk lebih mudah ditemukan', 'Membantu produk mendapatkan peluang tampil pada pencarian dan rekomendasi marketplace.'],
        ['02', 'Strategi kata kunci', 'Pemilihan keyword disesuaikan dengan produk dan target calon pembeli.'],
        ['03', 'Jangkauan lebih luas', 'Meningkatkan peluang toko dan produk dikenal calon pelanggan baru.'],
        ['04', 'Evaluasi performa iklan', 'Performa kampanye dipantau agar strategi dapat disesuaikan berdasarkan data.'],
    ] : [
        ['01', 'Strategi sesuai kebutuhan', 'Pekerjaan diawali dengan memahami tujuan dan kondisi bisnis Anda.'],
        ['02', 'Pengerjaan terarah', 'Setiap aktivitas disusun berdasarkan prioritas dan ruang lingkup yang disepakati.'],
        ['03', 'Evaluasi berkala', 'Perkembangan pekerjaan ditinjau untuk menentukan langkah berikutnya.'],
        ['04', 'Komunikasi transparan', 'Anda mendapatkan informasi mengenai proses dan hasil pekerjaan.'],
    ];

    $process = [
        ['Konsultasi', 'Mengenali kebutuhan, tujuan, dan kondisi bisnis Anda.'],
        ['Perencanaan', 'Menyusun strategi dan ruang lingkup pekerjaan.'],
        ['Pengerjaan', 'Menjalankan layanan sesuai kesepakatan.'],
        ['Monitoring', 'Memantau perkembangan dan melakukan evaluasi.'],
        ['Laporan', 'Memberikan rangkuman hasil dan rekomendasi.'],
    ];

    $packages = $isMarketplaceAds ? [
        ['name'=>'Basic', 'label'=>'Untuk mulai beriklan', 'items'=>[
            'Manajemen iklan hingga 2 SKU',
            'Diskusi tujuan iklan',
            'Penentuan anggaran bersama klien',
            'Optimasi judul dan keyword',
            'Monitoring dan evaluasi mingguan',
            'Periode pengelolaan 30 hari',
        ]],
        ['name'=>'Pro', 'label'=>'Untuk pengelolaan lebih aktif', 'featured'=>true, 'items'=>[
            'Manajemen iklan hingga 5 SKU',
            'Strategi iklan produk dan toko',
            'Optimasi harian',
            'Riset kompetitor dan keyword',
            'Laporan performa mingguan',
            'Periode pengelolaan 30 hari',
        ]],
        ['name'=>'Premium', 'label'=>'Untuk kebutuhan lebih luas', 'items'=>[
            'Manajemen iklan hingga 10 produk',
            'Strategi berdasarkan tren dan data',
            'A/B testing iklan',
            'Optimasi harian',
            'Laporan mingguan dan bulanan',
            'Konsultasi strategi',
            'Periode pengelolaan 30 hari',
        ]],
    ] : [
        ['name'=>'Basic', 'label'=>'Untuk kebutuhan awal', 'items'=>[
            'Diskusi kebutuhan bisnis',
            'Analisis kondisi awal',
            'Perencanaan pekerjaan',
            'Pelaksanaan layanan',
            'Evaluasi pekerjaan',
        ]],
        ['name'=>'Pro', 'label'=>'Untuk bisnis berkembang', 'featured'=>true, 'items'=>[
            'Seluruh tahapan paket Basic',
            'Analisis lebih mendalam',
            'Optimasi sesuai layanan',
            'Monitoring berkala',
            'Laporan dan rekomendasi',
        ]],
        ['name'=>'Premium', 'label'=>'Untuk kebutuhan menyeluruh', 'items'=>[
            'Seluruh tahapan paket Pro',
            'Ruang lingkup pekerjaan lebih luas',
            'Prioritas evaluasi dan optimasi',
            'Konsultasi strategi berkala',
            'Laporan dan rekomendasi lanjutan',
        ]],
    ];

    $faqs = $isMarketplaceAds ? [
        ['Apakah biaya iklan sudah termasuk paket?', 'Tidak. Anggaran iklan disediakan oleh klien dan dibayarkan melalui akun marketplace atau iklan milik klien.'],
        ['Marketplace apa yang dapat dikelola?', 'Platform yang tersedia akan dikonfirmasi saat konsultasi sesuai kebutuhan dan akun toko Anda.'],
        ['Apakah penjualan pasti meningkat?', 'Tidak ada jaminan angka penjualan tertentu. Hasil dipengaruhi produk, harga, persaingan, anggaran, dan kondisi pasar.'],
        ['Berapa lama periode pengelolaan?', 'Paket iklan yang dijelaskan pada halaman ini memiliki periode pengelolaan 30 hari.'],
        ['Apa yang perlu disiapkan?', 'Siapkan informasi produk, akses resmi yang diperlukan, tujuan kampanye, dan anggaran iklan.'],
    ] : [
        ['Bagaimana cara memulai layanan?', 'Hubungi tim Creativemu melalui tombol konsultasi dan ceritakan kebutuhan bisnis Anda.'],
        ['Apakah paket dapat disesuaikan?', 'Kebutuhan khusus dapat dibicarakan saat konsultasi sebelum pengerjaan dimulai.'],
        ['Apakah ada laporan pekerjaan?', 'Bentuk laporan mengikuti jenis layanan dan paket yang disepakati.'],
        ['Apakah hasil dapat dijamin?', 'Hasil layanan digital dipengaruhi banyak faktor. Target kerja dan indikator evaluasi akan dibicarakan bersama.'],
    ];
@endphp

<style>
.service-detail {
    --purple: #8055b5;
    --purple-dark: #56347e;
    --pink: #e99abc;
    --ink: #30243c;
    --muted: #777080;
    --line: #eee8f3;
    color: var(--ink);
    font-family: 'DM Sans', sans-serif;
}

.service-detail *,
.service-detail *::before,
.service-detail *::after {
    box-sizing: border-box;
}

.service-detail .sd-container {
    width: min(1160px, calc(100% - 44px));
    margin: 0 auto;
}

.service-detail h1,
.service-detail h2,
.service-detail h3 {
    font-family: 'Plus Jakarta Sans', 'DM Sans', sans-serif;
}

.service-detail .sd-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: var(--purple);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.service-detail .sd-eyebrow::before {
    content: "";
    width: 24px;
    height: 2px;
    background: var(--pink);
}

.service-detail .sd-hero {
    padding: 85px 0;
    background:
        radial-gradient(circle at 85% 15%, rgba(128,85,181,.12), transparent 27%),
        linear-gradient(120deg, #f8f3fc, #fff 65%, #fff7fa);
}

.service-detail .sd-hero-grid {
    display: grid;
    grid-template-columns: 1.05fr .95fr;
    align-items: center;
    gap: 65px;
}

.service-detail .sd-hero h1 {
    margin: 20px 0;
    max-width: 650px;
    color: var(--ink);
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.13;
    letter-spacing: -2px;
}

.service-detail .sd-hero h1 span,
.service-detail .sd-heading h2 span {
    color: var(--purple);
}

.service-detail .sd-description {
    max-width: 570px;
    color: var(--muted);
    font-size: 16px;
    line-height: 1.9;
}

.service-detail .sd-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 27px;
}

.service-detail .sd-button {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 14px 23px;
    border: 1px solid var(--purple);
    border-radius: 50px;
    background: var(--purple);
    color: #fff;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: .25s ease;
}

.service-detail .sd-button:hover {
    transform: translateY(-3px);
    background: var(--purple-dark);
    color: #fff;
}

.service-detail .sd-button-light {
    background: #fff;
    color: var(--purple);
}

.service-detail .sd-button-light:hover {
    background: #f4edf9;
    color: var(--purple-dark);
}

.service-detail .sd-proof {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-top: 26px;
    color: #665d70;
    font-size: 12px;
    font-weight: 700;
}

.service-detail .sd-proof span::before {
    content: "✓";
    margin-right: 7px;
    color: var(--purple);
}

.service-detail .sd-visual {
    position: relative;
    min-height: 390px;
    overflow: hidden;
    border-radius: 25px;
    background: #6b438f;
    box-shadow: 0 22px 55px rgba(64,37,89,.17);
}

.service-detail .sd-visual img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-detail .sd-visual::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 25%, rgba(38,20,53,.75));
}

.service-detail .sd-visual-card {
    position: absolute;
    z-index: 2;
    right: 20px;
    bottom: 20px;
    left: 20px;
    padding: 22px;
    border: 1px solid rgba(255,255,255,.5);
    border-radius: 16px;
    background: rgba(255,255,255,.94);
}

.service-detail .sd-visual-card strong {
    display: block;
    margin-bottom: 7px;
    font-size: 19px;
}

.service-detail .sd-visual-card p {
    margin: 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
}

.service-detail .sd-section {
    padding: 82px 0;
}

.service-detail .sd-soft {
    background: #faf7fc;
}

.service-detail .sd-heading {
    max-width: 720px;
    margin: 0 auto 42px;
    text-align: center;
}

.service-detail .sd-heading h2 {
    margin: 14px 0;
    font-size: clamp(28px, 4vw, 40px);
    line-height: 1.25;
    letter-spacing: -1px;
}

.service-detail .sd-heading p {
    color: var(--muted);
    line-height: 1.8;
}

.service-detail .sd-benefits {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.service-detail .sd-benefit {
    width: 100%;
    padding: 25px 22px;
    border: 1px solid var(--line);
    border-radius: 17px;
    background: #fff;
    text-align: left;
    cursor: pointer;
    transition: .25s ease;
}

.service-detail .sd-benefit:hover {
    transform: translateY(-5px);
    border-color: #cbb2df;
    box-shadow: 0 14px 32px rgba(64,37,89,.08);
}

.service-detail .sd-benefit-number {
    color: #b27acb;
    font-size: 12px;
    font-weight: 900;
    letter-spacing: 1px;
}

.service-detail .sd-benefit h3 {
    margin: 17px 0 9px;
    font-size: 17px;
    line-height: 1.4;
}

.service-detail .sd-benefit p {
    margin: 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.8;
}

.service-detail .sd-about {
    display: grid;
    grid-template-columns: .85fr 1.15fr;
    gap: 65px;
    align-items: start;
}

.service-detail .sd-about h2 {
    margin: 15px 0;
    font-size: clamp(28px, 4vw, 40px);
    line-height: 1.25;
}

.service-detail .sd-about h2 span {
    color: var(--purple);
}

.service-detail .sd-about-copy {
    color: var(--muted);
    line-height: 1.9;
}

.service-detail .sd-about-copy p {
    margin: 0 0 16px;
}

.service-detail .sd-steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
}

.service-detail .sd-step {
    width: 100%;
    padding: 18px 0 0;
    border: 0;
    border-top: 2px solid #dfd0ec;
    background: transparent;
    text-align: left;
    cursor: pointer;
    transition: .25s ease;
}

.service-detail .sd-step:hover {
    border-color: var(--purple);
    transform: translateY(-4px);
}

.service-detail .sd-step-number {
    color: var(--purple);
    font-size: 12px;
    font-weight: 900;
}

.service-detail .sd-step h3 {
    margin: 12px 0 8px;
    font-size: 16px;
}

.service-detail .sd-step p {
    margin: 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.8;
}

.service-detail .sd-packages {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
    align-items: stretch;
}

.service-detail .sd-package {
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 30px 25px;
    border: 1px solid var(--line);
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 8px 28px rgba(64,37,89,.04);
}

.service-detail .sd-package.featured {
    border: 2px solid #a77ac9;
    box-shadow: 0 16px 38px rgba(91,54,130,.12);
}

.service-detail .sd-popular {
    align-self: flex-start;
    margin-top: -45px;
    margin-bottom: 18px;
    padding: 7px 13px;
    border-radius: 30px;
    background: var(--purple);
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .5px;
}

.service-detail .sd-package h3 {
    margin: 0 0 6px;
    font-size: 25px;
}

.service-detail .sd-package-label {
    margin: 0 0 20px;
    color: var(--muted);
    font-size: 13px;
}

.service-detail .sd-package ul {
    flex: 1;
    padding: 0;
    margin: 0 0 25px;
    list-style: none;
}

.service-detail .sd-package li {
    position: relative;
    padding: 11px 0 11px 24px;
    border-bottom: 1px solid #f1edf4;
    color: #62596c;
    font-size: 13px;
    line-height: 1.6;
}

.service-detail .sd-package li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--purple);
    font-weight: 900;
}

.service-detail .sd-package .sd-button {
    width: 100%;
    margin-top: auto;
}

.service-detail .sd-note {
    max-width: 850px;
    padding: 16px 20px;
    margin: 28px auto 0;
    border-radius: 12px;
    background: #f1eaf8;
    color: #6d6078;
    font-size: 12px;
    line-height: 1.8;
}

.service-detail .sd-faq {
    max-width: 850px;
    margin: auto;
}

.service-detail .sd-faq-item {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding: 19px 5px;
    border: 0;
    border-bottom: 1px solid var(--line);
    background: transparent;
    color: var(--ink);
    text-align: left;
    font-size: 15px;
    font-weight: 800;
    cursor: pointer;
}

.service-detail .sd-faq-item span:last-child {
    color: var(--purple);
    font-size: 23px;
}

.service-detail .sd-faq-item:hover {
    color: var(--purple);
}

.service-detail .sd-final {
    padding: 58px 25px;
    border-radius: 24px;
    background: linear-gradient(120deg, #513078, #8055b5 70%, #b879ae);
    color: #fff;
    text-align: center;
}

.service-detail .sd-final h2 {
    margin: 0 0 13px;
    color: #fff;
    font-size: clamp(27px, 4vw, 38px);
}

.service-detail .sd-final p {
    max-width: 680px;
    margin: 0 auto 24px;
    color: rgba(255,255,255,.86);
    line-height: 1.8;
}

.service-detail .sd-final .sd-button {
    border-color: #fff;
    background: #fff;
    color: var(--purple-dark);
}

.service-detail .sd-back {
    margin-top: 25px;
    text-align: center;
}

.service-detail .sd-back a {
    color: var(--purple);
    font-size: 13px;
    font-weight: 800;
    text-decoration: none;
}

/* POPUP */
.service-detail .sd-modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 999999;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.service-detail .sd-modal.is-open {
    display: flex;
    animation: sdFade .25s ease;
}

.service-detail .sd-modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(32,19,45,.7);
    backdrop-filter: blur(6px);
}

.service-detail .sd-modal-box {
    position: relative;
    z-index: 2;
    width: min(510px, 100%);
    max-height: 85vh;
    overflow-y: auto;
    padding: 32px;
    border-radius: 23px;
    background: #fff;
    box-shadow: 0 25px 80px rgba(0,0,0,.22);
    animation: sdPop .3s ease;
}

.service-detail .sd-modal-close {
    position: absolute;
    top: 15px;
    right: 17px;
    width: 38px;
    height: 38px;
    border: 0;
    border-radius: 50%;
    background: #f3edf8;
    color: #68418f;
    font-size: 24px;
    cursor: pointer;
}

.service-detail .sd-modal-tag {
    display: inline-block;
    margin-bottom: 13px;
    color: #8055b5;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.service-detail .sd-modal-box h2 {
    margin: 0 40px 12px 0;
    color: #30243c;
    font-size: 27px;
    line-height: 1.3;
}

.service-detail .sd-modal-box p {
    color: #777080;
    font-size: 14px;
    line-height: 1.8;
}

.service-detail .sd-modal-list {
    padding: 0;
    margin: 20px 0;
    list-style: none;
}

.service-detail .sd-modal-list li {
    padding: 11px 0 11px 27px;
    border-bottom: 1px solid #f0eaf4;
    color: #62596c;
    font-size: 13px;
    line-height: 1.6;
    position: relative;
}

.service-detail .sd-modal-list li::before {
    content: "✓";
    position: absolute;
    left: 3px;
    color: #8055b5;
    font-weight: 900;
}

.service-detail .sd-modal-action {
    display: flex;
    width: 100%;
    margin-top: 20px;
    padding: 15px;
    justify-content: center;
    align-items: center;
    border: 0;
    border-radius: 40px;
    background: #8055b5;
    color: #fff;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: .2s;
}

.service-detail .sd-modal-action:hover {
    background: #56347e;
    color: #fff;
    transform: translateY(-2px);
}

@keyframes sdFade {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes sdPop {
    from { opacity: 0; transform: translateY(18px) scale(.97); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

@media (max-width: 900px) {
    .service-detail .sd-hero-grid,
    .service-detail .sd-about {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .service-detail .sd-benefits {
        grid-template-columns: repeat(2, 1fr);
    }

    .service-detail .sd-steps {
        grid-template-columns: repeat(2, 1fr);
        row-gap: 28px;
    }

    .service-detail .sd-packages {
        grid-template-columns: 1fr;
        gap: 28px;
    }

    .service-detail .sd-popular {
        margin-top: -45px;
    }
}

@media (max-width: 560px) {
    .service-detail .sd-container {
        width: min(100% - 32px, 1160px);
    }

    .service-detail .sd-hero {
        padding: 55px 0;
    }

    .service-detail .sd-section {
        padding: 58px 0;
    }

    .service-detail .sd-hero h1 {
        font-size: 36px;
        letter-spacing: -1px;
    }

    .service-detail .sd-visual {
        min-height: 290px;
    }

    .service-detail .sd-benefits,
    .service-detail .sd-steps {
        grid-template-columns: 1fr;
    }

    .service-detail .sd-buttons {
        flex-direction: column;
    }

    .service-detail .sd-button {
        width: 100%;
    }

    .service-detail .sd-modal-box {
        padding: 25px 21px;
    }
}
</style>

<div class="service-detail">

    <!-- HERO -->
    <section class="sd-hero">
        <div class="sd-container sd-hero-grid">
            <div>
                <span class="sd-eyebrow">
                    Creativemu / Layanan / {{ $service->category }}
                </span>

                <h1>
                    {{ $isMarketplaceAds ? 'Jasa Iklan Marketplace untuk' : $service->title . ' untuk' }}
                    <span>Bisnis yang Ingin Bertumbuh</span>
                </h1>

                <p class="sd-description">
                    {{ $service->excerpt ?: 'Solusi digital yang dirancang untuk membantu bisnis menjangkau pelanggan dan mengembangkan pemasaran.' }}
                </p>

                <div class="sd-buttons">
                    <button type="button" class="sd-button" data-popup="consultation">
                        Konsultasi via WhatsApp ↗
                    </button>

                    <button type="button" class="sd-button sd-button-light" data-popup="packages">
                        Lihat Pilihan Paket
                    </button>
                </div>

                <div class="sd-proof">
                    <span>Diskusi kebutuhan bisnis</span>
                    <span>Evaluasi berkala</span>
                    <span>Laporan pekerjaan</span>
                </div>
            </div>

            <div class="sd-visual">
                <img
                    src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=85"
                    alt="Analisis strategi digital marketing"
                >

                <div class="sd-visual-card">
                    <strong>{{ $isMarketplaceAds ? 'Marketplace Ads Management' : $service->title }}</strong>
                    <p>
                        {{ $isMarketplaceAds
                            ? 'Strategi, pengelolaan, monitoring, dan evaluasi iklan produk di marketplace.'
                            : 'Strategi dan pengerjaan digital yang disesuaikan dengan kebutuhan bisnis Anda.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MANFAAT -->
    <section class="sd-section">
        <div class="sd-container">
            <div class="sd-heading">
                <span class="sd-eyebrow">Manfaat Layanan</span>
                <h2>Solusi untuk membantu bisnis <span>melangkah lebih jauh</span></h2>
                <p>Tekan setiap kartu untuk mengetahui penjelasan manfaat layanan.</p>
            </div>

            <div class="sd-benefits">
                @foreach($benefits as $benefit)
                    <button
                        type="button"
                        class="sd-benefit"
                        data-popup="info"
                        data-title="{{ $benefit[1] }}"
                        data-description="{{ $benefit[2] }}"
                    >
                        <span class="sd-benefit-number">{{ $benefit[0] }} / BENEFIT</span>
                        <h3>{{ $benefit[1] }}</h3>
                        <p>{{ $benefit[2] }}</p>
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    <section class="sd-section sd-soft">
        <div class="sd-container sd-about">
            <div>
                <span class="sd-eyebrow">Mengapa Creativemu</span>
                <h2>Partner digital dengan <span>arah dan evaluasi</span></h2>
            </div>

            <div class="sd-about-copy">
                <p>Creativemu mengembangkan layanan digital marketing untuk membantu bisnis membangun kehadiran online, memperluas jangkauan pemasaran, dan mendukung pertumbuhan usaha.</p>

                <p>Kami memulai pekerjaan dengan memahami kebutuhan klien. Ruang lingkup, target kerja, kebutuhan akses, anggaran, dan periode pengerjaan dibicarakan terlebih dahulu agar ekspektasi kedua pihak jelas.</p>

                <p>Selama pengerjaan, perkembangan dipantau sesuai layanan yang dipilih. Hasil evaluasi digunakan sebagai bahan untuk menyusun rekomendasi dan langkah optimasi berikutnya.</p>

                <button type="button" class="sd-button" data-popup="consultation">
                    Diskusikan Kebutuhan Anda ↗
                </button>
            </div>
        </div>
    </section>

    <!-- PROSES -->
    <section class="sd-section">
        <div class="sd-container">
            <div class="sd-heading">
                <span class="sd-eyebrow">Alur Pengerjaan</span>
                <h2>Proses kerja yang <span>jelas dan terarah</span></h2>
                <p>Tekan setiap tahapan untuk melihat penjelasan proses pengerjaan.</p>
            </div>

            <div class="sd-steps">
                @foreach($process as $i => $step)
                    <button
                        type="button"
                        class="sd-step"
                        data-popup="info"
                        data-title="{{ $step[0] }}"
                        data-description="{{ $step[1] }}"
                    >
                        <span class="sd-step-number">STEP 0{{ $i + 1 }}</span>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PAKET -->
    <section class="sd-section sd-soft" id="paket">
        <div class="sd-container">
            <div class="sd-heading">
                <span class="sd-eyebrow">Pilihan Paket</span>
                <h2>Pilih paket sesuai <span>kebutuhan bisnis</span></h2>
                <p>Tekan tombol pada paket untuk melihat rincian layanan yang tersedia.</p>
            </div>

            <div class="sd-packages">
                @foreach($packages as $package)
                    <article class="sd-package {{ !empty($package['featured']) ? 'featured' : '' }}">
                        @if(!empty($package['featured']))
                            <span class="sd-popular">PILIHAN POPULER</span>
                        @endif

                        <h3>{{ $package['name'] }}</h3>
                        <p class="sd-package-label">{{ $package['label'] }}</p>

                        <ul>
                            @foreach($package['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>

                        <button
                            type="button"
                            class="sd-button"
                            data-popup="package"
                            data-title="Paket {{ $package['name'] }}"
                            data-description="{{ $package['label'] }}"
                            data-items="{{ e(json_encode($package['items'])) }}"
                            data-package="{{ $package['name'] }}"
                        >
                            Lihat Detail Paket ↗
                        </button>
                    </article>
                @endforeach
            </div>

            <p class="sd-note">
                {{ $isMarketplaceAds
                    ? 'Catatan: anggaran iklan merupakan biaya terpisah yang disediakan klien. Detail platform, SKU, periode, dan ruang lingkup dikonfirmasi sebelum transaksi.'
                    : 'Catatan: rincian pekerjaan, jadwal, dan biaya akan dikonfirmasi bersama tim Creativemu sebelum pengerjaan dimulai.' }}
            </p>
        </div>
    </section>

    <!-- FAQ -->
    <section class="sd-section">
        <div class="sd-container">
            <div class="sd-heading">
                <span class="sd-eyebrow">Pertanyaan Umum</span>
                <h2>Hal yang sering <span>ditanyakan</span></h2>
                <p>Tekan pertanyaan untuk membuka jawaban dalam popup.</p>
            </div>

            <div class="sd-faq">
                @foreach($faqs as $faq)
                    <button
                        type="button"
                        class="sd-faq-item"
                        data-popup="faq"
                        data-title="{{ $faq[0] }}"
                        data-description="{{ $faq[1] }}"
                    >
                        <span>{{ $faq[0] }}</span>
                        <span>＋</span>
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="sd-section">
        <div class="sd-container">
            <div class="sd-final">
                <h2>Siap mengembangkan bisnis bersama Creativemu?</h2>
                <p>Ceritakan kebutuhan bisnis Anda. Tim Creativemu siap membantu mendiskusikan layanan, pilihan paket, dan langkah awal yang sesuai.</p>

                <button type="button" class="sd-button" data-popup="consultation">
                    Mulai Konsultasi Sekarang ↗
                </button>
            </div>

            <div class="sd-back">
                <a href="{{ route('home') }}#layanan">← Kembali ke Semua Layanan</a>
            </div>
        </div>
    </section>

    <!-- SATU POPUP UNTUK SEMUA INTERAKSI -->
    <div class="sd-modal" id="sdModal" aria-hidden="true">
        <div class="sd-modal-backdrop" data-close-popup></div>

        <div class="sd-modal-box" role="dialog" aria-modal="true" aria-labelledby="sdModalTitle">
            <button type="button" class="sd-modal-close" data-close-popup aria-label="Tutup">
                &times;
            </button>

            <span class="sd-modal-tag">CREATIVEMU DIGITAL SOLUTION</span>

            <h2 id="sdModalTitle">Konsultasikan Kebutuhan Bisnis Anda</h2>

            <p id="sdModalDescription">
                Ceritakan kebutuhan bisnis Anda kepada tim Creativemu.
            </p>

            <ul class="sd-modal-list" id="sdModalList"></ul>

            <a href="{{ $waUrl }}" target="_blank" rel="noopener"
               class="sd-modal-action" id="sdModalWhatsapp">
                Lanjut Konsultasi WhatsApp ↗
            </a>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('sdModal');
    if (!modal) return;

    const title = document.getElementById('sdModalTitle');
    const description = document.getElementById('sdModalDescription');
    const list = document.getElementById('sdModalList');
    const whatsapp = document.getElementById('sdModalWhatsapp');

    const waNumber = @json($waNumber);
    const serviceTitle = @json($service->title);

    function openPopup(button) {
        const type = button.dataset.popup;
        let popupTitle = 'Konsultasikan Kebutuhan Bisnis Anda';
        let popupDescription = 'Ceritakan kebutuhan bisnis Anda kepada tim Creativemu.';
        let items = [];

        if (type === 'package') {
            popupTitle = button.dataset.title || 'Detail Paket';
            popupDescription = button.dataset.description || '';
            try {
                items = JSON.parse(button.dataset.items || '[]');
            } catch (error) {
                items = [];
            }
        }

        if (type === 'packages') {
            popupTitle = 'Pilihan Paket Layanan';
            popupDescription = 'Creativemu menyediakan tiga pilihan paket. Pilih paket yang paling sesuai dengan kebutuhan bisnis Anda.';
            items = [
                'Basic — Untuk kebutuhan awal',
                'Pro — Untuk bisnis berkembang',
                'Premium — Untuk kebutuhan menyeluruh'
            ];
        }

        if (type === 'consultation') {
            popupTitle = 'Yuk, Konsultasikan Bisnis Anda!';
            popupDescription = 'Diskusikan kebutuhan, tujuan, dan layanan digital yang sesuai bersama tim Creativemu.';
            items = [
                'Ceritakan kebutuhan bisnis Anda',
                'Diskusikan pilihan layanan',
                'Tentukan langkah pengerjaan berikutnya'
            ];
        }

        if (type === 'info' || type === 'faq') {
            popupTitle = button.dataset.title || 'Informasi Layanan';
            popupDescription = button.dataset.description || '';
        }

        title.textContent = popupTitle;
        description.textContent = popupDescription;
        list.replaceChildren();

        items.forEach(function (item) {
            const li = document.createElement('li');
            li.textContent = item;
            list.appendChild(li);
        });

        let message = 'Halo Creativemu, saya ingin konsultasi mengenai layanan ' + serviceTitle + '.';

        if (type === 'package') {
            message = 'Halo Creativemu, saya tertarik dengan ' + popupTitle + ' untuk layanan ' + serviceTitle + '. Saya ingin konsultasi lebih lanjut.';
        }

        whatsapp.href = 'https://wa.me/' + waNumber + '?text=' + encodeURIComponent(message);

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.service-detail [data-popup]').forEach(function (button) {
        button.addEventListener('click', function () {
            openPopup(button);
        });
    });

    modal.querySelectorAll('[data-close-popup]').forEach(function (element) {
        element.addEventListener('click', closePopup);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closePopup();
        }
    });
});
</script>

@endsection
