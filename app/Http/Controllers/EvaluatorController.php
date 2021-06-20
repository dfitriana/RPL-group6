<?php

namespace App\Http\Controllers;

use App\Models\Notification;
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

    public function penugasan(){
        $users = Auth::User();
        $notifs= Notification::where('notifiable_id',$users->id)->get()->take(1);
        return view('Evaluator.penugasan',compact('users','notifs'));
    }

    public function detail($id){
        $users = Auth::User();
        $notifs = Notification::where('id',$id)->get();
        return view('Evaluator.penugasan', compact('users','notifs'));
    }
}
