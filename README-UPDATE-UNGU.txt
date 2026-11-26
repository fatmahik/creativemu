UPDATE CREATIVEMU — TEMA UNGU + LOGO + HALAMAN

PENTING: Ini adalah paket file tambahan/pembaruan untuk project Laravel 12 yang sudah ada, bukan Laravel utuh.

Isi paket ini perlu digabungkan ke folder project C:\laragon\www\creativemu-app.
Sebelum menyalin, backup folder project atau minimal file berikut:
- routes/web.php
- resources/views/layouts/app.blade.php
- public/css/site.css
- public/js/site.js
- app/Http/Controllers/Admin/ContentController.php

Salin isi folder paket ini ke folder project Laravel dan izinkan penggabungan folder. Jika ditanya Replace, file dengan nama sama memang merupakan pembaruan; pastikan backup sudah dibuat terlebih dahulu.

Setelah disalin, buka PowerShell pada folder project dan jalankan:
php artisan optimize:clear
php artisan migrate --seed
php artisan serve

Buka http://127.0.0.1:8000

Login admin demo:
Email: admin@creativemu.test
Password: password

Catatan:
- Ganti password admin sebelum website dipublikasikan.
- Isi kontak WhatsApp/email, konten, angka statistik, logo klien, testimoni, dan artikel contoh perlu diverifikasi/diganti dengan data resmi Creativemu.
- Paket ini memperbarui tema ungu, logo, navigasi dropdown, halaman Tentang, dan Kebijakan Privasi. Ini bukan salinan kode internal website asli.
