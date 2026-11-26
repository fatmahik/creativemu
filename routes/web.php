<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,ContactController,PageController};
use App\Http\Controllers\Admin\{AuthController,DashboardController,ContentController};
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/layanan/{slug}',[PageController::class,'service'])->name('service');
Route::view('/tentang','about')->name('about');
Route::view('/kebijakan-privasi','privacy')->name('privacy');
Route::get('/artikel',[PageController::class,'articles'])->name('articles');
Route::get('/artikel/{slug}',[PageController::class,'article'])->name('article');
Route::post('/kontak',[ContactController::class,'store'])->name('contact.store');
Route::prefix('admin')->name('admin.')->group(function(){
 Route::middleware('guest')->group(function(){
  Route::get('/login',[AuthController::class,'show'])->name('login');
  Route::post('/login',[AuthController::class,'login'])->name('login.post');
 });
 Route::middleware('auth')->group(function(){
  Route::get('/',[DashboardController::class,'index'])->name('dashboard');
  Route::post('/logout',[AuthController::class,'logout'])->name('logout');
  Route::resource('/services',ContentController::class)->except(['show'])->parameters(['services'=>'service']);
  Route::resource('/articles',ContentController::class)->except(['show'])->parameters(['articles'=>'article']);
  Route::resource('/clients',ContentController::class)->except(['show'])->parameters(['clients'=>'client']);
  Route::resource('/testimonials',ContentController::class)->except(['show'])->parameters(['testimonials'=>'testimonial']);
  Route::get('/contacts',[ContentController::class,'contacts'])->name('contacts');
  Route::patch('/contacts/{id}',[ContentController::class,'readContact'])->name('contacts.read');
  Route::delete('/contacts/{id}',[ContentController::class,'deleteContact'])->name('contacts.delete');
 });
});
