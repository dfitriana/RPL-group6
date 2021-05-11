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
            'password' => 'required',
            //'g-recaptcha-response' => 'required|captcha',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->level == 'Administrator') {
                return redirect('/admin-dashboard')->with('message', 'Login Berhasil!');
            } elseif ($user->level == 'Operator') {
                return redirect('/operator-dashboard')->with('message', 'Login Berhasil!');
            } elseif ($user->level == 'Evaluator') {
                return redirect('/evaluator-dashboard')->with('message', 'Login Berhasil!');
            }
            return redirect('/')->with('warning', 'Login Gagal!');
        }
        return redirect('/')->with('warning', 'Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
