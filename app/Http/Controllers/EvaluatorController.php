<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class EvaluatorController extends Controller
{
    //
    public function evaluator(){
        $users = Auth::user();
        return view('Evaluator.dashboard', compact('users'));

    }
}
