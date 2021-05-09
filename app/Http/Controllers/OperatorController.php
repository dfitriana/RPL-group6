<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OperatorController extends Controller
{
    public function operator(){
        $users = User::all();

        return view('Operator.dashboard', compact('users'));
    }
}
