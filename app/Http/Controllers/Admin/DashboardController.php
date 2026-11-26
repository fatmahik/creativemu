<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\{Service,Article,Client,Testimonial,Contact};
class DashboardController extends Controller { public function index(){return view('admin.dashboard',['services'=>Service::count(),'articles'=>Article::count(),'clients'=>Client::count(),'testimonials'=>Testimonial::count(),'contacts'=>Contact::count(),'latest'=>Contact::latest()->take(8)->get()]);} }
