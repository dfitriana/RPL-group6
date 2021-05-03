<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        $users = DB::table('users')->get();
        // return $users;
        return view('Admin.dashboard', ['users' => $users]);
    }

    public function periode()
    {
        $users = User::all();
        return view('admin.penetapan-periode', compact('users'));
    }
}
