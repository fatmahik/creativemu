<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Illuminate\Support\Str;
use App\Models\{Service,Article,Client,Testimonial,Contact};
class ContentController extends Controller {
 private function model($type){return match($type){'services'=>new Service,'articles'=>new Article,'clients'=>new Client,'testimonials'=>new Testimonial,default=>abort(404)};}
 private function type($request){$type=$request->route()->getName();return str_contains($type,'services')?'services':(str_contains($type,'articles')?'articles':(str_contains($type,'clients')?'clients':'testimonials'));}
 public function index(Request $r){$type=$this->type($r);$items=$this->model($type)->latest()->paginate(15);return view('admin.list',compact('type','items'));}
 public function create(Request $r){$type=$this->type($r);$item=$this->model($type);return view('admin.form',compact('type','item'));}
 private function data(Request $r,$type){$rules=match($type){
 'services'=>['title'=>'required|max:160','slug'=>'nullable|max:180','category'=>'nullable|max:100','excerpt'=>'nullable|max:500','description'=>'nullable','icon'=>'nullable|max:20','is_active'=>'nullable'],
 'articles'=>['title'=>'required|max:180','slug'=>'nullable|max:200','excerpt'=>'nullable|max:500','content'=>'required','image'=>'nullable','published_at'=>'nullable|date','is_published'=>'nullable'],
 'clients'=>['name'=>'required|max:150','logo'=>'nullable','website'=>'nullable|url','sort_order'=>'nullable|integer'],
 'testimonials'=>['name'=>'required|max:150','company'=>'nullable|max:150','message'=>'required','rating'=>'nullable|integer|min:1|max:5','is_active'=>'nullable']};
 $d=$r->validate($rules);if(in_array($type,['services','articles'])&&!$d['slug'])$d['slug']=Str::slug($d['title']);foreach(['is_active','is_published'] as $f)if(in_array($f,$this->model($type)->getFillable(),true))$d[$f]=$r->boolean($f);return $d;}
 public function store(Request $r){$t=$this->type($r);$this->model($t)->create($this->data($r,$t));return redirect()->route('admin.'.$t.'.index')->with('success','Data ditambahkan.');}
 public function edit(Request $r,$id){$t=$this->type($r);$item=$this->model($t)->findOrFail($id);return view('admin.form',compact('t','item')+['type'=>$t]);}
 public function update(Request $r,$id){$t=$this->type($r);$this->model($t)->findOrFail($id)->update($this->data($r,$t));return redirect()->route('admin.'.$t.'.index')->with('success','Data diperbarui.');}
 public function destroy(Request $r,$id){$t=$this->type($r);$this->model($t)->findOrFail($id)->delete();return back()->with('success','Data dihapus.');}
 public function contacts(){ $items=Contact::latest()->paginate(15);return view('admin.contacts',compact('items')); }
 public function readContact($id){Contact::findOrFail($id)->update(['is_read'=>true]);return back();}
 public function deleteContact($id){Contact::findOrFail($id)->delete();return back();}
}
