<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('main.bootstrap');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->intended('');
        }
        return redirect()->back()->with('gagal', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
