<?php

namespace App\Http\Controllers;

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
}
