<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Data_dosen;
use App\Models\Evaluator;
use App\Models\User;
use App\Models\Periode;
use App\Models\Prodi;
use App\Notifications\PenugasanEvaluator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use PhpParser\Node\Stmt\Foreach_;

class AdminController extends Controller
{
    public function admin()
    {
        $periodes = Periode::all();
        $users = Auth::user();

        return view('Admin.dashboard', compact('users', 'periodes'));
    }

    public function periode()
    {
        $kode_periode = Helper::IDGenerator(new Periode, 'kode_periode', 7, 'PKK');
        $users = Auth::user();
        $prodi = Prodi::all();
        $program = Http::withBasicAuth('webmipa', 'k4cangg0r3ngr3ny4h')->get('http://services.unnes.ac.id/api/listprodi/4');
        $programData = $program['data'];
        foreach ($programData as $data) {
            DB::table('prodis')
                ->updateOrInsert(
                    ['kode'         => $data['kode']],
                    ['nama_prodi'   => $data['nama'],
                    'jenjang'       => $data['jenjang'],
                    'konsentrasi'   => $data['konsentrasi'],
                    'strjjg'        => $data['strjjg'],
                    'no_sk'         => $data['no_sk'],
                    'akreditasi'    => $data['akreditasi'],
                    'tgl_sk'        => $data['tgl_sk']]

                );
        }

        return view('admin.penetapan-periode', compact('users', 'prodi', 'kode_periode'));
    }

    public function setperiode(Request $request, $kode_periode)
    {
        $idperiode = $kode_periode;
        $prodi = Prodi::where('kode',$request->program_studi)->value('nama_prodi');

        $periode = new Periode;
        $periode->kode_periode      = $idperiode;
        $periode->kode_prodi        = $request->program_studi;
        $periode->program_studi     = $prodi;
        $periode->tgl_awal          = $request->tglawal;
        $periode->tgl_akhir         = $request->tglakhir;
        $periode->save();
        return redirect()->route('plotting', $idperiode);
    }

    public function plotting($idperiode)
    {
        $users = Auth::user();
        $evaluator = Data_dosen::all();
        $evaluatorData = Http::withBasicAuth('webmipa', 'k4cangg0r3ngr3ny4h')->get('http://services.unnes.ac.id/api/listpejabatsimpeg/2020-12-18/111/4')->json();
        foreach ($evaluatorData as $data) {
            DB::table('Data_dosens')
                ->updateOrInsert(
                    ['nip'          => $data['nip']],
                    ['nama'         => $data['nama'],
                    'email'         => $data['email'],
                    'jabatan_id'    => $data['jabatan_id'],
                    'kode_unit'     => $data['kode_unit'],
                    'prodi_doskar'  => $data['prodi_doskar'],
                    'mail_unnes'    => $data['mail_unnes'],
                    'bidang_ilmu'   => $data['bidang_ilmu'],
                    'prodi_jabatan' => $data['prodi_jabatan']]
                );
        }
        // $periodes = periode::latest('upload_time')->first;
        $periodes = periode::find($idperiode);
        // periode::find($kode_periode);

        return view('admin.plotting-evaluator', compact('users', 'periodes', 'evaluator'), ['idperiode' => $idperiode]);
    }

    public function savedata(Request $request, $idperiode)
    {
        $evas    = $request->evaluator;
        $periode = Periode::find($idperiode);
        for ($i=0; $i < count($evas); $i++) {
            $users[] = User::whereIn('nip', [$evas[$i]])
                ->get();
        }
            for ($i=0; $i < count($evas); $i++) { 
                $dosen[]    = Data_dosen::whereIn('nip',[$evas[$i]])->value('nama');
                $data = [
                    'kode_periode'  => $idperiode,
                    'id_evaluator'  => $i+1,
                    'nip'           => $evas[$i],
                    'nama_dosen'    => $dosen[$i]
                ];
                DB::table('plottings')->insert($data);
            }

            foreach($users as $user){
                Notification::send($user, new PenugasanEvaluator($periode));
            }
        return redirect('/admin-dashboard')->with('info', 'Data berhasil ditambahkan!');
    }
}
