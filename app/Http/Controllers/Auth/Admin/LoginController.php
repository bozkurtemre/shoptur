<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('admin.auth.login');
        }
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            toastr()->success('Hoşgeldiniz, ' . Auth::user()->name, 'Sistem');
            return redirect()->intended('/admin/dashboard');
        }
        toastr()->error('Kullanıcı Adı veya Şifre Hatalı!');
        return redirect()->route('admin.login.index');
    }

    public function logout()
    {
        if (Auth::check()) {
            Session::flush();
            Auth::logout();
            return redirect()->route('admin.login.index');
        }
    }
}
