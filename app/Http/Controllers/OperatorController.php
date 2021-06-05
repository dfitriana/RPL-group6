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

    public function kerjasamapenelitian(){
        
        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-penelitian', compact('users'));
    }
//belom ada UI-nya
    public function kerjasamapengabdian(){
        
        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-pengabdian', compact('users'));
    }

    public function kualitasinputmahasiswa(){
        
        $users = Auth::user();
        return view('Operator.Mahasiswa.kualitas-input-mahasiswa', compact('users'));
    }

    public function mahasiswaasing(){
        
        $users = Auth::user();
        return view('Operator.Mahasiswa.mahasiswa-asing', compact('users'));
    }

    public function sdmewmpdtps(){
        
        $users = Auth::user();
        return view('Operator.SDM.EWMP-DTPS', compact('users'));
    }

    public function profildosen(){
        
        $users = Auth::user();
        return view('Operator.SDM.profil-dosen', compact('users'));
    }

    public function dosenpembimbing(){
        
        $users = Auth::user();
        return view('Operator.SDM.dosen-pembimbing', compact('users'));
    }

    public function dosentidaktetap(){
        
        $users = Auth::user();
        return view('Operator.SDM.dosen-tidaktetap', compact('users'));
    }

    public function rekognisi(){
        
        $users = Auth::user();
        return view('Operator.SDM.rekognisi', compact('users'));
    }

    public function sdmpenelitian(){
        
        $users = Auth::user();
        return view('Operator.SDM.penelitian', compact('users'));
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

    public function cekvalidasiLKPS(){
        $users = Auth::user();
        return view('Operator.cek-validasi-LKPS', compact('users'));
    }
}
