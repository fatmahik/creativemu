<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\Hash;use App\Models\{User,Service,Client,Testimonial,Article};
class DatabaseSeeder extends Seeder {public function run():void{
User::updateOrCreate(['email'=>'admin@creativemu.test'],['name'=>'Admin Creativemu','password'=>Hash::make('password')]);
$rows=[['Layanan Marketplace','layanan-marketplace','Marketplace','Optimasi toko online, iklan, dan upload produk.','🛒'],['Layanan Social Media','layanan-social-media','Social Media','Kelola media sosial dan kampanye Meta Ads.','📱'],['Layanan Website','layanan-website','Website','Pembuatan, pengelolaan, dan SEO website.','💻'],['Pelatihan Digital Marketing','pelatihan-digital-marketing','Academy','Pelatihan, magang, dan sertifikasi digital.','🎓']];
foreach($rows as $i=>$v)Service::updateOrCreate(['slug'=>$v[1]],['title'=>$v[0],'category'=>$v[2],'excerpt'=>$v[3],'description'=>'<p>'.$v[3].' Hubungi tim kami untuk konsultasi.</p>','icon'=>$v[4],'sort_order'=>$i+1,'is_active'=>true]);
foreach(['Partner Bisnis 01','Partner Bisnis 02','Partner Bisnis 03','Partner Bisnis 04'] as $i=>$n)Client::firstOrCreate(['name'=>$n],['sort_order'=>$i]);
Testimonial::firstOrCreate(['name'=>'Partner Creativemu'],['company'=>'Mitra Bisnis','message'=>'Pelayanan komunikatif, responsif, dan membantu kebutuhan digital kami.','rating'=>5,'is_active'=>true]);
Article::firstOrCreate(['slug'=>'strategi-digital-marketing-umkm'],['title'=>'Strategi Digital Marketing untuk UMKM','excerpt'=>'Langkah awal membangun kehadiran digital bisnis.','content'=>'Mulailah dengan memahami pelanggan, memilih kanal yang tepat, dan mengevaluasi hasil.','published_at'=>now(),'is_published'=>true]);
}}
