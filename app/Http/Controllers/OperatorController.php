<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class OperatorController extends Controller
{
    public function operator(){
        
        $users = Auth::user();
        return view('Operator.dashboard', compact('users'));
    }

    public function profilpengusul(){
        
        $users = Auth::user();
        return view('Operator.profil-pengusul', compact('users'));
    }

    public function editprofilpengusul(){
        
        $users = Auth::user();
        return view('Operator.edit-profil-pengusul', compact('users'));
    }

    public function kerjasamapendidikan(){
        
        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-pendidikan', compact('users'));
    }

    public function kualitasinputmahasiswa(){
        
        $users = Auth::user();
        return view('Operator.Mahasiswa.kualitas-input-mahasiswa', compact('users'));
    }

    public function sdmewmpdtps(){
        
        $users = Auth::user();
        return view('Operator.SDM.EWMP-DTPS', compact('users'));
    }

    public function keuangan(){
        $users = Auth::user();
        return view('Operator.KeuanganSarpras.keuangan', compact('users'));
    }

    public function kepuasanmahasiswa(){
        $users = Auth::user();
        return view('Operator.Pendidikan.kepuasan-mahasiswa', compact('users'));
    }

    public function penelitian(){
        $users = Auth::user();
        return view('Operator.Penelitian.penelitian', compact('users'));
    }

    public function prestasiakademikmhs(){
        $users = Auth::user();
        return view('Operator.LuaranTridharma.prestasi-akademik-mhs', compact('users'));
    }

    public function pengabdian(){
        $users = Auth::user();
        return view('Operator.PKM.pengabdian', compact('users'));
    }
}
