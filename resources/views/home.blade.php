@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="creative-hero">
    <div class="hero-container">
        <div class="hero-content">
            <span class="eyebrow">
                <span class="eyebrow-dot"></span>
                CREATIVE DIGITAL AGENCY
            </span>

            <h1>
                Kembangkan Bisnis Anda dengan
                <span>Strategi Digital yang Tepat.</span>
            </h1>

            <p>
                Kami membantu bisnis berkembang melalui digital marketing,
                website profesional, dan strategi kreatif yang dirancang
                untuk menghasilkan pertumbuhan nyata.
            </p>

            <div class="hero-buttons">
                <a href="#kontak" class="btn-primary">
                    Konsultasi Sekarang <span>↗</span>
                </a>
                <a href="#layanan" class="btn-outline">
                    Jelajahi Layanan
                </a>
            </div>

            <div class="hero-trust">
                <div class="trust-avatars">
                    <span>C</span>
                    <span>M</span>
                    <span>U</span>
                </div>
                <div>
                    <strong>Partner Digital Bisnis Anda</strong>
                    <small>Creative ideas. Real results.</small>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-wrap">
                <img
                    src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1100&q=85"
                    alt="Digital marketing analytics dan strategi bisnis"
                >
            </div>

            <div class="floating-card floating-card-top">
                <div class="floating-icon">↗</div>
                <div>
                    <strong>Digital Growth</strong>
                    <small>Strategi berkembang</small>
                </div>
            </div>

            <div class="floating-card floating-card-bottom">
                <div class="growth-icon">✦</div>
                <div>
                    <strong>Creative Solution</strong>
                    <small>Ide untuk bisnis Anda</small>
                </div>
            </div>

            <div class="hero-circle"></div>
        </div>
    </div>

    <div class="hero-decoration"></div>
</section>

{{-- STATISTIK --}}
<section class="stats-section">
    <div class="stats-container">
        <div class="stat-item">
            <strong>50<span>+</span></strong>
            <p>Proyek Kreatif</p>
        </div>
        <div class="stat-item">
            <strong>4<span>+</span></strong>
            <p>Tahun Pengalaman</p>
        </div>
        <div class="stat-item">
            <strong>100<span>%</span></strong>
            <p>Komitmen Kualitas</p>
        </div>
        <div class="stat-item">
            <strong>24<span>/7</span></strong>
            <p>Dukungan Digital</p>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="about-section" id="tentang">
    <div class="about-container">
        <div class="about-visual">
            <img
                src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1000&q=85"
                alt="Tim kreatif sedang bekerja"
            >
            <div class="about-image-label">
                <span>✦</span>
                <div>
                    <strong>Think Creative</strong>
                    <small>Build Something Great</small>
                </div>
            </div>
        </div>

        <div class="about-content">
            <span class="section-label">TENTANG CREATIVEMU</span>
            <h2>
                Ide Kreatif untuk
                <span>Perkembangan Bisnis.</span>
            </h2>
            <p>
                Creativemu merupakan partner digital yang membantu bisnis
                membangun identitas, memperkuat kehadiran online, dan
                menjangkau lebih banyak pelanggan.
            </p>
            <p>
                Melalui perpaduan strategi, kreativitas, dan teknologi,
                kami menghadirkan solusi digital yang relevan dengan
                kebutuhan setiap bisnis.
            </p>

            <a href="{{ url('/tentang') }}" class="text-link">
                Kenali Kami Lebih Dekat <span>→</span>
            </a>
        </div>
    </div>
</section>

{{-- CLIENT --}}
@php
    $partners = [
        ['name' => 'DnD Legal Indo', 'file' => 'dnd-legal-indo.png'],
        ['name' => 'Klinik Mata Jogja', 'file' => 'klinik-mata-jogja.png'],
        ['name' => 'Richeese Factory', 'file' => 'richeese-factory.jpg'],
        ['name' => 'Lady Diyan', 'file' => 'lady-diyan.jpg'],
        ['name' => 'SPM', 'file' => 'spm.jpg'],
        ['name' => 'AMICOM', 'file' => 'amicom.jpg'],
        ['name' => 'Blambangan Powder', 'file' => 'blambangan-powder.jpg'],
        ['name' => 'A+ Akuntansi', 'file' => 'akuntansi.jpg'],
        ['name' => 'C-Sweet', 'file' => 'c-sweet.jpg'],
        ['name' => 'RENNO', 'file' => 'renno.jpg'],
        ['name' => 'Jogja Culinary School', 'file' => 'jogja-culinary-school.png'],
    ];
@endphp

<section class="partner-marquee-section">
    <div class="partner-heading">
        <span class="section-label">OUR PARTNERS</span>
        <h2>Dipercaya oleh Berbagai Brand</h2>
        <p>Bersama para partner, kami membangun ide dan menghadirkan solusi digital yang memberikan dampak nyata.</p>
    </div>

    <div class="partner-marquee">
        <div class="partner-track">
            @for($group = 0; $group < 2; $group++)
                <div class="partner-group" @if($group === 1) aria-hidden="true" @endif>
                    @foreach($partners as $partner)
                        <div class="partner-logo-card">
                            @if(file_exists(public_path('images/partners/' . $partner['file'])))
                                <img src="{{ asset('images/partners/' . $partner['file']) }}" alt="{{ $partner['name'] }}" loading="lazy">
                            @else
                                <span>{{ $partner['name'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    <div class="partner-bottom-note">
        <span></span>
        <p>CREATIVE PARTNERS · GROWING TOGETHER</p>
        <span></span>
    </div>
</section>
{{-- SERVICES --}}
<section class="services-section" id="layanan">
    <div class="section-heading">
        <span class="section-label">WHAT WE DO</span>
        <h2>Solusi Digital untuk Bisnis Anda</h2>
        <p>
            Dari membangun identitas hingga meningkatkan jangkauan digital,
            kami siap membantu setiap langkah perkembangan bisnis Anda.
        </p>
    </div>

    <div class="services-grid">
        @forelse($services as $s)
            <a href="{{ route('service', $s->slug) }}" class="service-card">
                <div class="service-number">0{{ $loop->iteration }}</div>
                <div class="service-icon">
                    @if($loop->iteration % 4 === 1)
                        ✦
                    @elseif($loop->iteration % 4 === 2)
                        ◈
                    @elseif($loop->iteration % 4 === 3)
                        ◎
                    @else
                        ↗
                    @endif
                </div>
                <h3>{{ $s->title }}</h3>
                <p>{{ $s->excerpt }}</p>
                <span class="service-link">Pelajari Layanan <b>→</b></span>
            </a>
        @empty
            <div class="service-card">
                <div class="service-icon">✦</div>
                <h3>Digital Marketing</h3>
                <p>Strategi pemasaran digital untuk memperluas jangkauan bisnis.</p>
                <a href="#kontak" class="service-link">Konsultasi <b>→</b></a>
            </div>
            <div class="service-card">
                <div class="service-icon">◈</div>
                <h3>Website Development</h3>
                <p>Website profesional yang menarik, responsif, dan fungsional.</p>
                <a href="#kontak" class="service-link">Konsultasi <b>→</b></a>
            </div>
            <div class="service-card">
                <div class="service-icon">◎</div>
                <h3>SEO Optimization</h3>
                <p>Optimasi website untuk meningkatkan visibilitas di mesin pencari.</p>
                <a href="#kontak" class="service-link">Konsultasi <b>→</b></a>
            </div>
        @endforelse
    </div>

    <div class="center-action">
        <a href="{{ route('articles') }}" class="btn-outline">Lihat Informasi Digital</a>
    </div>
</section>

{{-- WHY US --}}
<section class="why-section">
    <div class="why-container">
        <div class="why-content">
            <span class="section-label">WHY CREATIVEMU</span>
            <h2>Bukan Sekadar Ide, Kami Hadirkan Solusi.</h2>
            <p>
                Kami mengutamakan strategi yang terarah, desain yang menarik,
                dan pengalaman digital yang memberikan nilai bagi bisnis Anda.
            </p>

            <div class="why-list">
                <div class="why-item">
                    <span>✓</span>
                    <div>
                        <strong>Strategi Terarah</strong>
                        <p>Setiap pekerjaan dimulai dari tujuan dan kebutuhan bisnis.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span>✓</span>
                    <div>
                        <strong>Desain Kreatif</strong>
                        <p>Tampilan profesional dengan pengalaman pengguna yang baik.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span>✓</span>
                    <div>
                        <strong>Solusi Terintegrasi</strong>
                        <p>Menggabungkan kreativitas dan teknologi untuk bisnis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-visual">
            <div class="why-big-symbol">C.</div>
            <div class="why-caption">
                <span>CREATIVE THINKING</span>
                <strong>Make Your Brand<br>More Meaningful.</strong>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIAL --}}
@if(isset($testimonials) && $testimonials->count())
<section class="testimonials-section">
    <div class="section-heading">
        <span class="section-label">TESTIMONIALS</span>
        <h2>Cerita dari Mereka yang Bertumbuh Bersama Kami</h2>
    </div>

    <div class="testimonial-grid">
        @foreach($testimonials as $t)
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>“{{ $t->message }}”</p>
                <div class="testimonial-person">
                    <div class="person-avatar">{{ strtoupper(substr($t->name, 0, 1)) }}</div>
                    <div>
                        <strong>{{ $t->name }}</strong>
                        <small>{{ $t->position ?? 'Client Creativemu' }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif

{{-- CTA --}}
<section class="cta-section">
    <div class="cta-content">
        <span class="section-label">LET'S CREATE SOMETHING GREAT</span>
        <h2>Siap Membawa Bisnis Anda ke Level Berikutnya?</h2>
        <p>Mari diskusikan ide dan kebutuhan digital bisnis Anda bersama tim Creativemu.</p>
        <a href="#kontak" class="btn-white">Mulai Konsultasi <span>↗</span></a>
    </div>
    <div class="cta-decoration">C.</div>
</section>

{{-- ARTICLES --}}
<section class="articles-section" id="artikel">
    <div class="section-heading">
        <span class="section-label">INSIGHT & IDEAS</span>
        <h2>Wawasan Digital untuk Anda</h2>
        <p>Temukan informasi, inspirasi, dan pengetahuan seputar dunia digital.</p>
    </div>

    <div class="articles-grid">
        @forelse($articles as $a)
            <a href="{{ route('article', $a->slug) }}" class="article-card">
                @if(!empty($a->thumbnail))
                    <div class="article-image">
                        <img src="{{ asset('storage/' . $a->thumbnail) }}" alt="{{ $a->title }}">
                    </div>
                @else
                    <div class="article-image article-image-placeholder">
                        <span>CREATIVEMU</span>
                    </div>
                @endif

                <div class="article-content">
                    <span class="article-category">DIGITAL INSIGHT</span>
                    <h3>{{ $a->title }}</h3>
                    <p>{{ $a->excerpt }}</p>
                    <span class="article-link">Baca Selengkapnya →</span>
                </div>
            </a>
        @empty
            <div class="article-empty">
                <span>✦</span>
                <h3>Artikel Segera Hadir</h3>
                <p>Nantikan informasi dan wawasan digital terbaru dari Creativemu.</p>
            </div>
        @endforelse
    </div>

    <div class="center-action">
        <a href="{{ route('articles') }}" class="btn-outline">Lihat Semua Artikel</a>
    </div>
</section>

{{-- CONTACT --}}
<section class="contact-section" id="kontak">
    <div class="contact-container">
        <div class="contact-info">
            <span class="section-label">CONTACT US</span>
            <h2>Mari Wujudkan Ide Digital Anda.</h2>
            <p>
                Ceritakan kebutuhan bisnis Anda kepada kami.
                Tim Creativemu siap membantu menemukan solusi yang tepat.
            </p>

            <div class="contact-photo">
                <img
                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80"
                    alt="Diskusi tim kreatif"
                >
            </div>
        </div>

        <div class="contact-form-card">
            <h3>Kirim Pesan kepada Kami</h3>
            <p>Isi formulir berikut dan kami akan menghubungi Anda.</p>

            @if(session('success'))
                <div class="form-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="form-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama Anda" required>

                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>

                <label for="phone">Nomor WhatsApp</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">

                <label for="service">Layanan yang Dibutuhkan</label>
                <select id="service" name="service">
                    <option value="">Pilih layanan</option>
                    @foreach($services as $s)
                        <option value="{{ $s->title }}" {{ old('service') == $s->title ? 'selected' : '' }}>
                            {{ $s->title }}
                        </option>
                    @endforeach
                </select>

                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="4" placeholder="Ceritakan kebutuhan bisnis Anda..." required>{{ old('message') }}</textarea>

                <button type="submit" class="btn-primary contact-submit">
                    Kirim Pesan <span>↗</span>
                </button>
            </form>
        </div>
    </div>
</section>

{{-- POPUP PROMO --}}
<div class="promo-overlay" id="promoPopup" aria-hidden="true">
    <div class="promo-modal" role="dialog" aria-modal="true" aria-labelledby="promoTitle">
        <button type="button" class="promo-close" id="closePromo" aria-label="Tutup popup">×</button>

        <div class="promo-image">
            <img
                src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=1000&q=85"
                alt="Konsultasi strategi digital"
            >
            <span class="promo-image-tag">CREATIVE OPPORTUNITY</span>
        </div>

        <div class="promo-content">
            <span class="section-label">LET'S GROW TOGETHER</span>
            <h2 id="promoTitle">Punya Ide Besar untuk Bisnis Anda?</h2>
            <p>
                Jangan biarkan ide hebat hanya menjadi rencana.
                Mulai konsultasikan kebutuhan digital bisnis Anda bersama Creativemu.
            </p>

            <a href="#kontak" class="btn-primary" id="promoContact">
                Konsultasi Gratis <span>↗</span>
            </a>

            <button type="button" class="promo-later" id="promoLater">
                Mungkin Nanti
            </button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('promoPopup');
    const closeButton = document.getElementById('closePromo');
    const laterButton = document.getElementById('promoLater');
    const contactButton = document.getElementById('promoContact');

    if (!popup) return;

    const storageKey = 'creativemuPromoSeen2026';

    function closePopup() {
        popup.classList.remove('show');
        popup.setAttribute('aria-hidden', 'true');
        sessionStorage.setItem(storageKey, 'yes');
    }

    // Tampilkan popup setelah 2 detik saat Home dibuka
    if (!sessionStorage.getItem(storageKey)) {
        setTimeout(function () {
            popup.classList.add('show');
            popup.setAttribute('aria-hidden', 'false');
        }, 2000);
    }

    closeButton?.addEventListener('click', closePopup);
    laterButton?.addEventListener('click', closePopup);
    contactButton?.addEventListener('click', closePopup);

    popup.addEventListener('click', function (event) {
        if (event.target === popup) {
            closePopup();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closePopup();
        }
    });
});
</script>
@endpush


