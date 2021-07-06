<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PenelitianPenelitian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penelitian_penelitian')->truncate();
        DB::table('penelitian_penelitian')->insert([
            [
                'nama_dosen' => 'Much Aziz Muslim',
                'tema_penelitian' => 'IT Adaptation on E-Governmen',
                'nama_mahasiswa' => 'OKTARIA GINA KHOIRUNNISA, AFAN ISMI FAUZAN',
                'judul_kegiatan' => 'PENGEMBANGAN PERANGKAT LUNAK AUDIT MUTU INTERNAL DENGAN ISO 9001 PADA JURUSAN ILMU KOMPUTER UNIVERSITAS NEGERI SEMARANG',
                'tahun' => '2019',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Endang Sugiharti',
                'tema_penelitian' => 'IT Adaptation on E-Bussiness',
                'nama_mahasiswa' => 'OKTARIA GINA KHOIRUNNISA, AFAN ISMI FAUZAN',
                'judul_kegiatan' => 'AUTOMATED DISASTER RECOVERY PLAN UNTUK SUSTAINIBILITY SISTEM INFORMASI KOMPREHENSIF FMIPA UNNES',
                'tahun' => '2019',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Much Aziz Muslim',
                'tema_penelitian' => 'Artificial Intelligent',
                'nama_mahasiswa' => 'DWIKA ANANDA AGUSTINA PERTIWI',
                'judul_kegiatan' => 'Analisis Watermarking Image Menggunakan Metode Haar dan Daubechies dengan Menerapkan Gaussian Filter untuk Pengamatan Data Digital',
                'tahun' => '2020',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Riza Arifudin',
                'tema_penelitian' => 'Data Mining',
                'nama_mahasiswa' => 'OKTARIA GINA KHOIRUNNISA',
                'judul_kegiatan' => 'Pengembangan Aplikasi Deteksi Komentar Spam Otomatis pada Website Berbahasa Indonesia Menggunakan Metode SVM',
                'tahun' => '2020',
                'created_at' => '',
            ]
        ]);
    }
}
