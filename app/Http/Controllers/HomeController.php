<?php
namespace App\Http\Controllers;
use App\Models\{Service,Client,Testimonial,Article};
class HomeController extends Controller {
 public function index(){return view('home',['services'=>Service::where('is_active',1)->orderBy('sort_order')->get(),'clients'=>Client::orderBy('sort_order')->get(),'testimonials'=>Testimonial::where('is_active',1)->latest()->take(6)->get(),'articles'=>Article::where('is_published',1)->latest()->take(3)->get()]);}
}
