PAKET WEBSITE CREATIVEMU - LARAVEL 12
Ini adalah website company profile bergaya digital agency, bukan salinan source code/aset internal Creativemu.id.

INSTALASI:
1. Backup project Laravel kamu.
2. Ekstrak ZIP, lalu salin isi folder ini ke folder project Laravel (misalnya C:\laragon\www\creativemu).
3. Buat database MySQL bernama creativemu melalui phpMyAdmin.
4. Atur .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=creativemu
DB_USERNAME=root
DB_PASSWORD=
5. Jalankan dari terminal folder project:
php artisan migrate --seed
php artisan serve
6. Buka http://127.0.0.1:8000

LOGIN ADMIN DEMO:
Email: admin@creativemu.test
Password: password

Ganti password demo, nomor WhatsApp, email, gambar, dan konten sebelum website dipublikasikan.
Paket berisi routes, models, controllers, migrations, seeder, Blade views, CSS, dan JavaScript.
