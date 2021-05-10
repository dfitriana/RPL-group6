<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Models\Periode;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Foreach_;

class AdminController extends Controller
{
    public function admin()
    {
        $users = User::all();

        return view('Admin.dashboard', compact('users'));
    }

    public function periode()
    {
        $kode_periode = Helper::IDGenerator(new Periode, 'kode_periode', 7, 'PKK');
        $users = User::all();
        $prodi = Prodi::all();
        $program = Http::withBasicAuth('webmipa', 'k4cangg0r3ngr3ny4h')->get('http://services.unnes.ac.id/api/listprodi/4');
        $programData = $program['data'];
        foreach ($programData as $data) {
            DB::table('prodis')
                ->updateOrInsert(
                    ['kode' => $data['kode']],
                    ['nama_prodi' => $data['nama']]
                    // ['jenjang' => $data['jenjang']],
                    // ['konsentrasi' => $data['konsentrasi']],
                    // ['strjjg' => $data['strjjg']],
                    // ['no_sk' => $data['no_sk']],
                    // ['akreditasi' => $data['akreditasi']],
                    // ['tgl_sk' => $data['tgl_sk']]

                );
        }

        return view('admin.penetapan-periode', compact('users', 'prodi', 'kode_periode'));
    }

    public function setperiode(Request $request, $kode_periode)
    {
        $idperiode = $kode_periode;

        $periode = new Periode;
        $periode->kode_periode = $idperiode;
        $periode->program_studi = $request->program_studi;
        $periode->tglawal = $request->tglawal;
        $periode->tglakhir = $request->tglakhir;
        $periode->save();
        return redirect()->route('plotting', $idperiode);
    }

    public function plotting()
    {
        $users = User::all();
        return view('admin.plotting-evaluator', compact('users'));
    }
}
