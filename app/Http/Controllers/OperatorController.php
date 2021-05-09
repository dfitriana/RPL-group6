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

    public function profilpengusul(){
        
        $users = User::all();
        return view('Operator.profil-pengusul', compact('users'));
    }

    public function editprofilpengusul(){
        
        $users = User::all();
        return view('Operator.edit-profil-pengusul', compact('users'));
    }

    public function kerjasamapendidikan(){
        
        $users = User::all();
        return view('Operator.Kerjasama.kerjasama-pendidikan', compact('users'));
    }

    public function kualitasinputmahasiswa(){
        
        $users = User::all();
        return view('Operator.Mahasiswa.kualitas-input-mahasiswa', compact('users'));
    }

    public function sdmewmpdtps(){
        
        $users = User::all();
        return view('Operator.SDM.EWMP-DTPS', compact('users'));
    }
}
