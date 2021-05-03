<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function admin()
    {
        $users = User::all();

        return view('Admin.dashboard', compact('users'));
    }

    public function periode()
    {
        $users = User::all();
        $program = Http::withBasicAuth('webmipa', 'k4cangg0r3ngr3ny4h')->get('http://services.unnes.ac.id/api/listprodi/4');
        $programData = $program['data'];
        return view('admin.penetapan-periode', compact('users', 'programData'));
    }

    public function plotting()
    {
        $users = User::all();
        return view('admin.plotting-evaluator', compact('users'));
    }
}
