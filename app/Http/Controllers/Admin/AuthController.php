<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth;
class AuthController extends Controller {
 public function show(){return view('admin.login');}
 public function login(Request $r){$d=$r->validate(['email'=>'required|email','password'=>'required']);if(Auth::attempt($d,$r->boolean('remember'))){$r->session()->regenerate();return redirect()->route('admin.dashboard');}return back()->withErrors(['email'=>'Email atau password salah.']);}
 public function logout(Request $r){Auth::logout();$r->session()->invalidate();$r->session()->regenerateToken();return redirect()->route('home');}
}
