<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginpage()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin');
        }
        return redirect('/');
    }
}
