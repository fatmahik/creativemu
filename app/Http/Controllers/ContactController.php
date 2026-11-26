<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller {
 public function store(Request $r){$d=$r->validate(['name'=>'required|max:120','email'=>'required|email','phone'=>'nullable|max:40','service'=>'nullable|max:100','message'=>'required|max:3000']);Contact::create($d);return back()->with('success','Terima kasih! Pesan kamu sudah terkirim.');}
}
