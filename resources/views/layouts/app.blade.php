
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#6d50a0">

    <meta name="description" content="@yield('meta_description', 'Creativemu membantu bisnis berkembang melalui digital marketing, website, dan strategi digital.')">

    <title>@yield('title', 'Creativemu | Digital Agency')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @stack('styles')

    <style>
        :root {
            --cm-purple: #7045c5;
            --cm-purple-dark: #432477;
            --cm-pink: #f45b91;
            --cm-text: #211b2d;
            --cm-muted: #777184;
            --cm-border: #eee9f5;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        }

        /* HEADER */
        .cm-header {
            position: sticky;
            top: 0;
            z-index: 999;
            width: 100%;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid #f0eafa;
            box-shadow: 0 5px 25px rgba(56,31,94,.045);
        }

        .cm-header-inner {
            max-width: 1440px;
            min-height: 88px;
            margin: auto;
            padding: 0 5.5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 35px;
        }

        .cm-logo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
        }

        .cm-logo img {
            width: 54px;
            height: 54px;
            object-fit: contain;
        }

        .cm-logo span {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #55409a;
        }

        .cm-logo .dot {
            color: var(--cm-pink);
        }

        .cm-nav {
            display: flex;
            align-items: center;
            gap: 37px;
        }

        .cm-nav > a,
        .cm-nav-button {
            color: var(--cm-text);
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: .25s ease;
        }

        .cm-nav > a:hover,
        .cm-nav-button:hover,
        .cm-nav-button.active {
            color: var(--cm-purple);
        }

        .cm-nav-button {
            border: 0;
            background: transparent;
            cursor: pointer;
            font-family: inherit;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 32px 0;
        }

        .cm-chevron {
            width: 8px;
            height: 8px;
            border-right: 2px solid currentColor;
            border-bottom: 2px solid currentColor;
            transform: rotate(45deg) translateY(-2px);
            transition: .25s;
        }

        .cm-navdrop.open .cm-chevron {
            transform: rotate(225deg) translate(-2px,-2px);
        }

        .cm-contact-btn {
            color: white !important;
            background: linear-gradient(120deg, #7045c5, #945ce0);
            padding: 14px 23px;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(112,69,197,.2);
            transition: .25s !important;
        }

        .cm-contact-btn:hover {
            color: white !important;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(112,69,197,.3);
        }

        /* MEGA MENU */
        .cm-navdrop {
            position: relative;
        }

        .cm-mega {
            position: absolute;
            top: calc(100% - 5px);
            left: 50%;
            width: min(1080px, 90vw);
            padding: 30px;
            background: white;
            border: 1px solid var(--cm-border);
            border-radius: 0 0 22px 22px;
            box-shadow: 0 25px 60px rgba(47,25,77,.13);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translate(-50%, 12px);
            transition: .25s ease;
        }

        .cm-navdrop.open .cm-mega,
        .cm-navdrop:hover .cm-mega,
        .cm-navdrop:focus-within .cm-mega {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translate(-50%, 0);
        }

        .cm-mega-column {
            min-width: 0;
        }

        .cm-mega-heading {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 17px;
            color: var(--cm-purple-dark);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 17px;
            font-weight: 800;
        }

        .cm-mega-icon {
            width: 39px;
            height: 39px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            color: var(--cm-purple);
            background: #f2ebff;
            font-size: 19px;
        }

        .cm-mega-link {
            display: block;
            padding: 12px 0;
            color: #565161;
            text-decoration: none;
            border-bottom: 1px solid #f0edf4;
            transition: .2s ease;
        }

        .cm-mega-link:last-child {
            border-bottom: 0;
        }

        .cm-mega-link strong {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #373044;
        }

        .cm-mega-link small {
            display: block;
            margin-top: 4px;
            color: #928b9e;
            font-size: 12px;
            line-height: 1.5;
        }

        .cm-mega-link:hover {
            padding-left: 7px;
        }

        .cm-mega-link:hover strong {
            color: var(--cm-purple);
        }

        .cm-menu-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 0;
            border-radius: 12px;
            background: #f4effb;
            color: var(--cm-purple);
            font-size: 23px;
            cursor: pointer;
        }

        /* FOOTER */
        .cm-footer {
            background: #211634;
            color: #fff;
            padding: 65px 5.5% 20px;
        }

        .cm-footer-grid {
            max-width: 1300px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 45px;
        }

        .cm-footer .cm-logo span {
            color: white;
        }

        .cm-footer p {
            max-width: 330px;
            color: #c3b9d0;
            line-height: 1.8;
            font-size: 14px;
        }

        .cm-footer h4 {
            margin: 0 0 20px;
            font-size: 15px;
        }

        .cm-footer-grid > div > a:not(.cm-logo) {
            display: block;
            width: fit-content;
            margin: 12px 0;
            color: #c3b9d0;
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        .cm-footer-grid > div > a:hover {
            color: #fff;
            transform: translateX(4px);
        }

        .cm-copyright {
            max-width: 1300px;
            margin: 45px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.12);
            color: #a99eb9;
            font-size: 13px;
        }

        .cm-whatsapp {
            position: fixed;
            z-index: 900;
            right: 25px;
            bottom: 25px;
            width: 57px;
            height: 57px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: white;
            background: linear-gradient(135deg, #7045c5, #f45b91);
            text-decoration: none;
            font-size: 27px;
            box-shadow: 0 8px 25px rgba(112,69,197,.3);
            transition: .25s;
        }

        .cm-whatsapp:hover {
            transform: translateY(-5px) scale(1.05);
        }


        /* CREATIVE PREMIUM HEADER & FOOTER */
        .cm-header {
            background: rgba(255,255,255,.94);
            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);
            border-bottom: 1px solid rgba(112,69,197,.12);
            box-shadow: 0 8px 35px rgba(55,30,90,.07);
        }

        .cm-header-inner {
            min-height: 82px;
        }

        .cm-logo img {
            transition: transform .35s ease;
        }

        .cm-logo:hover img {
            transform: rotate(-7deg) scale(1.06);
        }

        .cm-logo span {
            letter-spacing: 1.5px;
        }

        .cm-nav {
            gap: 32px;
        }

        .cm-nav > a:not(.cm-contact-btn) {
            position: relative;
            padding: 10px 0;
        }

        .cm-nav > a:not(.cm-contact-btn)::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 2px;
            width: 0;
            height: 2px;
            border-radius: 5px;
            background: linear-gradient(90deg,#7045c5,#f45b91);
            transition: width .25s ease;
        }

        .cm-nav > a:not(.cm-contact-btn):hover::after {
            width: 100%;
        }

        .cm-contact-btn {
            background: linear-gradient(120deg,#7045c5,#a05bd7,#f45b91);
            box-shadow: 0 9px 24px rgba(112,69,197,.22);
        }

        .cm-mega {
            top: calc(100% - 1px);
            border: 1px solid rgba(112,69,197,.13);
            border-top: 3px solid #a05bd7;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 28px 65px rgba(47,25,77,.16);
        }

        .cm-mega-link {
            border-radius: 10px;
            padding: 13px 10px;
            border-bottom: 0;
        }

        .cm-mega-link:hover {
            padding-left: 15px;
            background: #faf7ff;
        }

        .cm-mega-icon {
            background: linear-gradient(135deg,#f2ebff,#fff0f6);
            color: #7045c5;
        }

        .cm-footer {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 8% 0%,rgba(112,69,197,.28),transparent 38%),
                radial-gradient(ellipse at 95% 100%,rgba(244,91,145,.13),transparent 35%),
                #211634;
            padding-top: 75px;
        }

        .cm-footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 5.5%;
            right: 5.5%;
            height: 3px;
            border-radius: 0 0 5px 5px;
            background: linear-gradient(90deg,#7045c5,#f45b91,#7045c5);
        }

        .cm-footer h4 {
            position: relative;
            padding-bottom: 12px;
        }

        .cm-footer h4::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 32px;
            height: 2px;
            border-radius: 5px;
            background: #f45b91;
        }

        .cm-footer-grid > div > a:not(.cm-logo) {
            transition: color .2s ease,transform .2s ease;
        }

        .cm-footer-grid > div > a:hover {
            color: #f5b2d0;
            transform: translateX(5px);
        }

        .cm-copyright {
            border-top-color: rgba(255,255,255,.16);
        }

        .cm-whatsapp {
            background: linear-gradient(135deg,#7045c5,#a05bd7,#f45b91);
            box-shadow: 0 10px 28px rgba(112,69,197,.35);
        }

        .cm-whatsapp:hover {
            box-shadow: 0 14px 32px rgba(112,69,197,.45);
        }

        @media (max-width: 900px) {
            .cm-header-inner {
                min-height: 75px;
            }

            .cm-nav {
                gap: 0;
            }

            .cm-nav > a:not(.cm-contact-btn)::after {
                display: none;
            }

            .cm-nav > a:hover {
                color: #7045c5;
            }
        }
        /* MOBILE */
        @media (max-width: 900px) {
            .cm-header-inner {
                min-height: 75px;
                padding: 0 5%;
            }

            .cm-logo img {
                width: 45px;
                height: 45px;
            }

            .cm-logo span {
                font-size: 21px;
            }

            .cm-menu-toggle {
                display: block;
            }

            .cm-nav {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                padding: 15px 5% 25px;
                display: none;
                align-items: stretch;
                gap: 0;
                flex-direction: column;
                background: white;
                border-top: 1px solid var(--cm-border);
                box-shadow: 0 20px 30px rgba(47,25,77,.1);
            }

            .cm-nav.mobile-open {
                display: flex;
            }

            .cm-nav > a,
            .cm-nav-button {
                width: 100%;
                padding: 15px 0;
                text-align: left;
            }

            .cm-nav-button {
                justify-content: space-between;
            }

            .cm-contact-btn {
                margin-top: 12px;
                text-align: center !important;
            }

            .cm-mega {
                position: static;
                width: 100%;
                padding: 10px 0 15px;
                display: none;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 15px;
                border: 0;
                border-radius: 0;
                box-shadow: none;
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: none;
            }

            .cm-navdrop.open .cm-mega {
                display: grid;
            }

            .cm-navdrop:hover .cm-mega {
                transform: none;
            }

            .cm-footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 520px) {
            .cm-mega {
                grid-template-columns: 1fr;
            }

            .cm-footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 25px 15px;
            }

            .cm-footer-grid > div:first-child {
                grid-column: 1 / -1;
            }

            .cm-footer {
                padding: 45px 6% 20px;
            }

            .cm-whatsapp {
                width: 52px;
                height: 52px;
                right: 17px;
                bottom: 17px;
            }
        }
    </style>

<style>
/* CREATIVEMU COMPACT HEADER AND MAP */

/* HEADER LEBIH RAMPING */
.cm-header-inner {
    max-width: 1280px !important;
    min-height: 68px !important;
    padding-left: 4% !important;
    padding-right: 4% !important;
    gap: 20px !important;
}

.cm-logo {
    gap: 9px !important;
    flex-shrink: 0;
}

.cm-logo img {
    width: 42px !important;
    height: 42px !important;
    object-fit: contain;
}

.cm-logo span {
    font-size: 17px !important;
    letter-spacing: 1px !important;
}

.cm-nav {
    gap: 23px !important;
}

.cm-nav > a,
.cm-nav-button {
    font-size: 13px !important;
}

.cm-contact-btn {
    padding: 10px 17px !important;
    font-size: 12px !important;
}

/* KONTEN HALAMAN PROPORSIONAL */
main {
    width: 100%;
    overflow-x: clip;
}

.wrap,
.container {
    width: min(1160px, calc(100% - 48px));
    margin-left: auto;
    margin-right: auto;
}

/* FOOTER MAPS */
.cm-footer-map {
    max-width: 1300px;
    margin: 48px auto 0;
    display: grid;
    grid-template-columns: .8fr 1.5fr;
    gap: 35px;
    align-items: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255,255,255,.14);
}

.cm-footer-map h4 {
    color: white;
    font-size: 19px;
    margin: 0 0 12px;
}

.cm-footer-map p {
    color: #c3b9d0;
    font-size: 13px;
    line-height: 1.8;
    margin: 0;
}

.cm-map-frame {
    width: 100%;
    height: 220px;
    border: 0;
    border-radius: 15px;
    display: block;
    box-shadow: 0 12px 30px rgba(0,0,0,.18);
}

@media(max-width:900px) {
    .cm-header-inner {
        min-height: 66px !important;
        padding-left: 5% !important;
        padding-right: 5% !important;
    }

    .cm-logo img {
        width: 39px !important;
        height: 39px !important;
    }

    .cm-logo span {
        font-size: 15px !important;
    }

    .cm-footer-map {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .cm-map-frame {
        height: 210px;
    }
}

@media(max-width:520px) {
    .cm-header-inner {
        min-height: 62px !important;
    }

    .cm-footer-map {
        margin-top: 32px;
    }

    .cm-map-frame {
        height: 190px;
    }
}
</style>

</head>

<body>

<header class="cm-header">
    <div class="cm-header-inner">

        <a class="cm-logo" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-creativemu.png') }}" alt="Logo Creativemu">
            <span>CREATIVEMU<span class="dot">.</span></span>
        </a>

        <button class="cm-menu-toggle" type="button"
                aria-label="Buka menu"
                aria-expanded="false">
            ☰
        </button>

        <nav class="cm-nav" aria-label="Navigasi utama">

            <a href="{{ route('home') }}">Home</a>

            <div class="cm-navdrop">
                <button class="cm-nav-button" type="button" aria-expanded="false">
                    Layanan <span class="cm-chevron"></span>
                </button>

                <div class="cm-mega">

                    <div class="cm-mega-column">
                        <div class="cm-mega-heading">
                            <span class="cm-mega-icon">▣</span>
                            Marketplace
                        </div>

                        <a class="cm-mega-link" href="{{ route('service', 'layanan-marketplace') }}">
                            <strong>Iklan Marketplace</strong>
                            <small>Strategi promosi dan peningkatan penjualan</small>
                        </a>
                        <a class="cm-mega-link" href="{{ route('service', 'layanan-marketplace') }}">
                            <strong>Optimasi Marketplace</strong>
                            <small>Optimasi toko dan produk online</small>
                        </a>
                    </div>

                    <div class="cm-mega-column">
                        <div class="cm-mega-heading">
                            <span class="cm-mega-icon">◉</span>
                            Sosial Media
                        </div>

                        <a class="cm-mega-link" href="{{ route('service', 'layanan-social-media') }}">
                            <strong>Kelola Sosial Media</strong>
                            <small>Bangun identitas dan kehadiran brand</small>
                        </a>
                        <a class="cm-mega-link" href="{{ route('service', 'layanan-social-media') }}">
                            <strong>Jasa Meta Ads</strong>
                            <small>Jangkau lebih banyak calon pelanggan</small>
                        </a>
                    </div>

                    <div class="cm-mega-column">
                        <div class="cm-mega-heading">
                            <span class="cm-mega-icon">⌘</span>
                            Website
                        </div>

                        <a class="cm-mega-link" href="{{ route('service', 'layanan-website') }}">
                            <strong>SEO Website</strong>
                            <small>Tingkatkan visibilitas di Google</small>
                        </a>
                        <a class="cm-mega-link" href="{{ route('service', 'layanan-website') }}">
                            <strong>Pembuatan Website</strong>
                            <small>Website profesional untuk bisnis</small>
                        </a>
                        <a class="cm-mega-link" href="{{ route('service', 'layanan-website') }}">
                            <strong>Kelola Website</strong>
                            <small>Perawatan dan pengembangan website</small>
                        </a>
                    </div>

                    <div class="cm-mega-column">
                        <div class="cm-mega-heading">
                            <span class="cm-mega-icon">✦</span>
                            Academy
                        </div>

                        <a class="cm-mega-link" href="{{ route('service', 'pelatihan-digital-marketing') }}">
                            <strong>Pelatihan Digital Marketing</strong>
                            <small>Belajar strategi pemasaran digital</small>
                        </a>
                        <a class="cm-mega-link" href="{{ route('service', 'pelatihan-digital-marketing') }}">
                            <strong>Magang / Prakerin</strong>
                            <small>Pengalaman belajar dunia industri</small>
                        </a>
                    </div>

                </div>
            </div>

            <a href="{{ route('articles') }}">Blog</a>
            <a href="{{ route('about') }}">Tentang</a>

            <a class="cm-contact-btn" href="{{ route('home') }}#kontak">
                Hubungi Kami ↗
            </a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="cm-footer">
    <div class="cm-footer-grid">

        <div>
            <a class="cm-logo" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-creativemu.png') }}" alt="Creativemu">
                <span>CREATIVEMU<span class="dot">.</span></span>
            </a>

            <p>
                Mitra digital untuk membantu bisnis bertumbuh melalui strategi,
                kreativitas, dan teknologi.
            </p>
        </div>

        <div>
            <h4>Jelajahi</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">Tentang Kami</a>
            <a href="{{ route('articles') }}">Artikel</a>
            <a href="{{ route('privacy') }}">Kebijakan Privasi</a>
        </div>

        <div>
            <h4>Layanan</h4>
            <a href="{{ route('service', 'layanan-marketplace') }}">Marketplace</a>
            <a href="{{ route('service', 'layanan-social-media') }}">Social Media</a>
            <a href="{{ route('service', 'layanan-website') }}">Website</a>
            <a href="{{ route('service', 'pelatihan-digital-marketing') }}">Academy</a>
        </div>

        <div>
            <h4>Hubungi Kami</h4>
            <a href="https://wa.me/6289618472759" target="_blank" rel="noopener">WhatsApp</a>
            <a href="mailto:halo@creativemu.id">Email</a>
            <a href="{{ route('admin.login') }}">Admin</a>
        </div>

    </div>

        <div class="cm-footer-map">
        <div>
            <h4>Temukan Kantor Kami</h4>
            <p>
                Jl. Gn. Bulu No. 89, RT.34, Bandut Lor,
                Argorejo, Sedayu, Kabupaten Bantul,
                DI Yogyakarta 55752.
            </p>
            <p style="margin-top:12px;">
                Kami siap membantu kebutuhan digital bisnis Anda.
            </p>
        </div>

        <iframe
            class="cm-map-frame"
            src="https://maps.google.com/maps?q=Jl.%20Gn.%20Bulu%20No.%2089%2C%20Bandut%20Lor%2C%20Argorejo%2C%20Sedayu%2C%20Bantul%2C%20Yogyakarta&t=&z=15&ie=UTF8&iwloc=&output=embed"
            title="Lokasi Kantor Creativemu"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen>
        </iframe>
    </div>

    <div class="cm-copyright">
        &copy; {{ date('Y') }} Creativemu. All rights reserved.
    </div>
</footer>

<a class="cm-whatsapp"
   href="https://wa.me/6289618472759"
   target="_blank"
   rel="noopener"
   aria-label="Hubungi Creativemu melalui WhatsApp">
    ☎
</a>

<script src="{{ asset('js/site.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.cm-menu-toggle');
    const nav = document.querySelector('.cm-nav');
    const dropdown = document.querySelector('.cm-navdrop');
    const dropdownButton = document.querySelector('.cm-nav-button');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function () {
            const opened = nav.classList.toggle('mobile-open');
            menuToggle.setAttribute('aria-expanded', opened);
            menuToggle.innerHTML = opened ? '✕' : '☰';
        });
    }

    if (dropdown && dropdownButton) {
        dropdownButton.addEventListener('click', function (event) {
            event.stopPropagation();
            const opened = dropdown.classList.toggle('open');
            dropdownButton.setAttribute('aria-expanded', opened);
        });
    }

    document.addEventListener('click', function (event) {
        if (dropdown && !dropdown.contains(event.target)) {
            dropdown.classList.remove('open');
            dropdownButton.setAttribute('aria-expanded', 'false');
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            dropdown?.classList.remove('open');
            dropdownButton?.setAttribute('aria-expanded', 'false');
            nav?.classList.remove('mobile-open');
            menuToggle?.setAttribute('aria-expanded', 'false');
            if (menuToggle) menuToggle.innerHTML = '☰';
        }
    });
});
</script>

@stack('scripts')

</body>
</html>



