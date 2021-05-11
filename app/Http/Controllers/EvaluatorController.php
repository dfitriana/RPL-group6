<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class EvaluatorController extends Controller
{
    //
    public function evaluator(){
        $users = User::all();
        return view('Evaluator.dashboard', compact('users'));

    }
}
