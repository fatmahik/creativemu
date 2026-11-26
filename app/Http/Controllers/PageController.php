<?php
namespace App\Http\Controllers;
use App\Models\{Service,Article};
class PageController extends Controller {
 public function service($slug){$service=Service::where('slug',$slug)->where('is_active',1)->firstOrFail();return view('service',compact('service'));}
 public function articles(){$articles=Article::where('is_published',1)->latest()->paginate(9);return view('articles',compact('articles'));}
 public function article($slug){$article=Article::where('slug',$slug)->where('is_published',1)->firstOrFail();return view('article',compact('article'));}
}
