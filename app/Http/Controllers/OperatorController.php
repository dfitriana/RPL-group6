<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class OperatorController extends Controller
{
    //operator-dashboard
    public function operator()
    {

        $users = Auth::user();
        return view('Operator.dashboard', compact('users'));
    }
    //dashboard-home
    public function mahasiswa()
    {
        $users = Auth::User();
        return view('Operator.Home.mahasiswa', compact('users'));
    }

    public function sdm()
    {
        $users = Auth::User();
        return view('Operator.Home.sdm', compact('users'));
    }

    public function keuanganhome()
    {
        $users = Auth::User();
        return view('Operator.Home.keuangan', compact('users'));
    }

    public function pendidikan()
    {
        $users = Auth::User();
        return view('Operator.Home.pendidikan', compact('users'));
    }

    public function penelitianhome()
    {
        $users = Auth::User();
        return view('Operator.Home.penelitian', compact('users'));
    }
    //dashboard-pengusul
    public function profilpengusul()
    {

        $users = Auth::user();
        return view('Operator.profil-pengusul', compact('users'));
    }

    public function editprofilpengusul()
    {

        $users = Auth::user();
        return view('Operator.edit-profil-pengusul', compact('users'));
    }
    //data kerjasama
    public function kerjasamapendidikan()
    {

        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-pendidikan', compact('users'));
    }

    public function kerjasamapenelitian()
    {

        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-penelitian', compact('users'));
    }

    public function kerjasamapengabdian()
    {

        $users = Auth::user();
        return view('Operator.Kerjasama.kerjasama-pengabdian', compact('users'));
    }
    //data mahasiswa
    public function kualitasinputmahasiswa()
    {

        $users = Auth::user();
        return view('Operator.Mahasiswa.kualitas-input-mahasiswa', compact('users'));
    }

    public function mahasiswaasing()
    {

        $users = Auth::user();
        return view('Operator.Mahasiswa.mahasiswa-asing', compact('users'));
    }
    //data sdm
    public function sdmewmpdtps()
    {

        $users = Auth::user();
        return view('Operator.SDM.EWMP-DTPS', compact('users'));
    }

    public function profildosen()
    {

        $users = Auth::user();
        return view('Operator.SDM.profil-dosen', compact('users'));
    }

    public function dosenpembimbing()
    {

        $users = Auth::user();
        return view('Operator.SDM.dosen-pembimbing', compact('users'));
    }

    public function dosentidaktetap()
    {

        $users = Auth::user();
        return view('Operator.SDM.dosen-tidaktetap', compact('users'));
    }

    public function rekognisi()
    {

        $users = Auth::user();
        return view('Operator.SDM.rekognisi', compact('users'));
    }

    public function sdmpenelitian()
    {

        $users = Auth::user();
        return view('Operator.SDM.penelitian', compact('users'));
    }

    public function sdmpublikasi()
    {

        $users = Auth::user();
        return view('Operator.SDM.publikasi', compact('users'));
    }

    public function sitasi()
    {

        $users = Auth::user();
        return view('Operator.SDM.sitasi', compact('users'));
    }

    public function paten()
    {

        $users = Auth::user();
        return view('Operator.SDM.paten', compact('users'));
    }

    public function hki()
    {

        $users = Auth::user();
        return view('Operator.SDM.hki', compact('users'));
    }

    public function teknologitepatguna()
    {

        $users = Auth::user();
        return view('Operator.SDM.teknologi-tepat-guna', compact('users'));
    }

    public function bookchapter()
    {

        $users = Auth::user();
        return view('Operator.SDM.book-chapter', compact('users'));
    }

    public function sdmpkm()
    {

        $users = Auth::user();
        return view('Operator.SDM.sdm-pkm', compact('users'));
    }
    //data keuangan sarpras
    public function keuangan()
    {
        $users = Auth::user();
        return view('Operator.KeuanganSarpras.keuangan', compact('users'));
    }
    //data pendidikan
    public function kepuasanmahasiswa()
    {
        $users = Auth::user();
        return view('Operator.Pendidikan.kepuasan-mahasiswa', compact('users'));
    }

    public function kurikulum()
    {
        $users = Auth::user();
        return view('Operator.Pendidikan.kurikulum', compact('users'));
    }

    public function integrasi()
    {
        $users = Auth::user();
        return view('Operator.Pendidikan.integrasi', compact('users'));
    }
    //data penelitian
    public function penelitian()
    {
        $users = Auth::user();
        return view('Operator.Penelitian.penelitian', compact('users'));
    }
    //data luaran tridharma
    public function prestasiakademikmhs()
    {
        $users = Auth::user();
        return view('Operator.LuaranTridharma.prestasi-akademik-mhs', compact('users'));
    }

    public function ipklulusan()
    {
        $users = Auth::user();
        return view('Operator.LuaranTridharma.ipk-lulusan', compact('users'));
    }

    public function prestasinonakademikmhs()
    {
        $users = Auth::user();
        return view('Operator.LuaranTridharma.prestasi-nonakademik-mhs', compact('users'));
    }

    public function lulusan()
    {
        $users = Auth::user();
        return view('Operator.LuaranTridharma.lulusan', compact('users'));
    }
    //data PKM
    public function pengabdian()
    {
        $users = Auth::user();
        return view('Operator.PKM.pengabdian', compact('users'));
    }

    //operator-manajemen
    public function cekvalidasiLKPS()
    {
        $users = Auth::user();
        return view('Operator.cek-validasi-LKPS', compact('users'));
    }
}
