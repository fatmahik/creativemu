@extends('layouts.app')

@section('title', 'Kebijakan Privasi | Creativemu')
@section('meta_description', 'Pelajari bagaimana Creativemu mengumpulkan, menggunakan, menyimpan, dan melindungi informasi yang Anda kirimkan melalui website.')

@section('content')

<style>
.privacy-page{color:#30263d;overflow:hidden}
.privacy-page *{box-sizing:border-box}
.privacy-page .wrap{width:min(1100px,calc(100% - 40px));margin:auto}
.privacy-hero{padding:95px 0 85px;background:radial-gradient(circle at 85% 15%,rgba(170,125,220,.25),transparent 30%),linear-gradient(135deg,#f5effd,#fff 75%)}
.privacy-label{display:inline-block;padding:8px 15px;border-radius:30px;background:#eee3fa;color:#7546a8;font-size:12px;font-weight:800;letter-spacing:2px}
.privacy-hero h1{margin:22px 0 15px;font-size:clamp(38px,6vw,62px);line-height:1.15;letter-spacing:-2px;color:#30263d}
.privacy-hero h1 em{font-style:normal;color:#8055b5}
.privacy-hero p{max-width:650px;color:#777080;font-size:16px;line-height:1.9}
.privacy-updated{margin-top:25px;color:#8c8298;font-size:13px}
.privacy-content{padding:75px 0 100px}
.privacy-layout{display:grid;grid-template-columns:270px 1fr;gap:55px;align-items:start}
.privacy-sidebar{position:sticky;top:30px;padding:25px;border:1px solid #eee5f8;border-radius:18px;background:#fbf9ff}
.privacy-sidebar h3{margin:0 0 18px;font-size:16px;color:#30263d}
.privacy-sidebar a{display:block;padding:9px 0;color:#777080;font-size:14px;text-decoration:none;transition:.2s}
.privacy-sidebar a:hover{color:#8055b5;padding-left:5px}
.privacy-main section{padding:0 0 32px;margin-bottom:32px;border-bottom:1px solid #eee8f4;scroll-margin-top:30px}
.privacy-main h2{margin:0 0 15px;font-size:25px;color:#30263d}
.privacy-main p{margin:0 0 13px;color:#777080;font-size:15px;line-height:1.9}
.privacy-main ul{padding-left:22px;color:#777080;line-height:2}
.privacy-highlight{padding:25px;border-radius:17px;background:#f7f1fd;border:1px solid #eee3fa}
.privacy-highlight h3{margin:0 0 10px;color:#7546a8}
.privacy-highlight p{margin:0}
.privacy-footer{padding:65px 0;background:linear-gradient(120deg,#593184,#8554b7);text-align:center;color:white}
.privacy-footer h2{margin:0 0 12px;font-size:30px;color:white}
.privacy-footer p{color:#eee3fa;line-height:1.8}
.privacy-button{display:inline-block;margin-top:15px;padding:13px 25px;border-radius:40px;background:white;color:#70449e;font-weight:700;text-decoration:none}
@media(max-width:750px){.privacy-layout{grid-template-columns:1fr;gap:30px}.privacy-sidebar{position:static}.privacy-hero{padding:70px 0}.privacy-content{padding:55px 0 70px}}
</style>

<div class="privacy-page">

    <section class="privacy-hero">
        <div class="wrap">
            <span class="privacy-label">INFORMASI & PERLINDUNGAN DATA</span>
            <h1>Privasi Anda,<br><em>Prioritas Kami.</em></h1>
            <p>
                Kami menghargai kepercayaan Anda. Halaman ini menjelaskan
                bagaimana informasi yang Anda berikan melalui website
                Creativemu digunakan dan dikelola.
            </p>
            <div class="privacy-updated">Informasi Kebijakan Privasi Creativemu</div>
        </div>
    </section>

    <section class="privacy-content">
        <div class="wrap privacy-layout">

            <aside class="privacy-sidebar">
                <h3>Daftar Isi</h3>
                <a href="#pengantar">Pengantar</a>
                <a href="#informasi">Informasi yang Dikumpulkan</a>
                <a href="#penggunaan">Penggunaan Informasi</a>
                <a href="#penyimpanan">Penyimpanan Data</a>
                <a href="#keamanan">Keamanan Informasi</a>
                <a href="#hak">Hak Pengguna</a>
                <a href="#perubahan">Perubahan Kebijakan</a>
                <a href="#kontak">Hubungi Kami</a>
            </aside>

            <div class="privacy-main">

                <section id="pengantar">
                    <h2>01. Pengantar</h2>
                    <p>
                        Creativemu berkomitmen untuk menghargai privasi
                        setiap pengunjung website. Kebijakan ini menjelaskan
                        jenis informasi yang dapat kami terima ketika Anda
                        menggunakan website dan bagaimana informasi tersebut
                        digunakan untuk menindaklanjuti kebutuhan Anda.
                    </p>
                </section>

                <section id="informasi">
                    <h2>02. Informasi yang Dikumpulkan</h2>
                    <p>
                        Ketika Anda mengirimkan formulir kontak, kami dapat
                        menerima beberapa informasi berikut:
                    </p>
                    <ul>
                        <li>Nama lengkap atau nama panggilan.</li>
                        <li>Alamat email.</li>
                        <li>Nomor WhatsApp atau telepon.</li>
                        <li>Jenis layanan yang diminati.</li>
                        <li>Isi pesan atau kebutuhan yang disampaikan.</li>
                    </ul>
                    <p>
                        Informasi diberikan secara langsung oleh pengunjung
                        melalui formulir yang tersedia di website.
                    </p>
                </section>

                <section id="penggunaan">
                    <h2>03. Penggunaan Informasi</h2>
                    <p>Informasi yang diterima dapat digunakan untuk:</p>
                    <ul>
                        <li>Menanggapi pertanyaan dan permintaan konsultasi.</li>
                        <li>Memberikan informasi mengenai layanan.</li>
                        <li>Menindaklanjuti komunikasi dengan calon klien.</li>
                        <li>Meningkatkan kualitas pelayanan dan website.</li>
                    </ul>
                    <p>
                        Kami tidak bermaksud menggunakan informasi yang
                        dikirimkan melalui formulir untuk tujuan yang tidak
                        berkaitan dengan kebutuhan komunikasi tersebut.
                    </p>
                </section>

                <section id="penyimpanan">
                    <h2>04. Penyimpanan Data</h2>
                    <p>
                        Informasi yang dikirim melalui formulir kontak dapat
                        disimpan dalam database website agar pengelola dapat
                        membaca dan menindaklanjuti pesan yang masuk.
                    </p>
                    <p>
                        Informasi sebaiknya hanya disimpan selama diperlukan
                        untuk tujuan komunikasi dan pengelolaan layanan,
                        dengan tetap memperhatikan kewajiban hukum yang berlaku.
                    </p>
                </section>

                <section id="keamanan">
                    <h2>05. Keamanan Informasi</h2>
                    <p>
                        Kami berupaya menjaga informasi yang diterima melalui
                        website dengan langkah pengamanan yang sesuai.
                        Namun, tidak ada sistem penyimpanan atau pengiriman
                        data melalui internet yang dapat dijamin sepenuhnya
                        bebas dari risiko.
                    </p>
                    <div class="privacy-highlight">
                        <h3>Perhatikan informasi yang Anda kirim</h3>
                        <p>
                            Jangan mengirimkan kata sandi, PIN, informasi
                            rekening, data kartu pembayaran, atau informasi
                            pribadi sensitif lainnya melalui formulir kontak.
                        </p>
                    </div>
                </section>

                <section id="hak">
                    <h2>06. Hak Pengguna</h2>
                    <p>
                        Anda dapat menghubungi pengelola website untuk
                        mengajukan permintaan terkait informasi yang pernah
                        dikirimkan, termasuk permintaan akses, koreksi,
                        atau penghapusan data sesuai ketentuan yang berlaku.
                    </p>
                </section>

                <section id="perubahan">
                    <h2>07. Perubahan Kebijakan</h2>
                    <p>
                        Kebijakan Privasi dapat diperbarui sewaktu-waktu
                        untuk menyesuaikan perubahan layanan, pengelolaan
                        website, maupun ketentuan hukum yang berlaku.
                        Versi terbaru akan ditampilkan pada halaman ini.
                    </p>
                </section>

                <section id="kontak">
                    <h2>08. Hubungi Kami</h2>
                    <p>
                        Jika Anda memiliki pertanyaan atau ingin menyampaikan
                        permintaan terkait privasi dan informasi pribadi,
                        silakan hubungi tim Creativemu melalui halaman kontak.
                    </p>
                    <a href="{{ route('home') }}#kontak" class="privacy-button">
                        Hubungi Creativemu ↗
                    </a>
                </section>

                <div class="privacy-highlight">
                    <h3>Catatan penting</h3>
                    <p>
                        Halaman ini merupakan draf kebijakan privasi untuk
                        website Creativemu dan perlu disesuaikan dengan
                        praktik pengelolaan data yang benar-benar diterapkan
                        sebelum website dipublikasikan secara resmi.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="privacy-footer">
        <div class="wrap">
            <h2>Masih ada pertanyaan?</h2>
            <p>Tim Creativemu siap membantu menjawab pertanyaan Anda.</p>
            <a href="{{ route('home') }}#kontak" class="privacy-button">
                Hubungi Kami ↗
            </a>
        </div>
    </section>

</div>

@endsection
