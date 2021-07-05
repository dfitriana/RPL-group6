<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PkmPengabdian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('pkm_pengabdian')->insert([
            [
                'nama_dosen' => 'Riza Arifudin',
                'tema_pkm' => 'Masyarakat Digital',
                'nama_mahasiswa' => 'SAHDA ARMANDIVA USMAN',
                'judul_kegiatan' => 'PEMANFAATAN SMARTPHONE BERBASIS ANDROID SEBAGAI ALTERNATIF PAPPERLESS TEST DI SMP 1 KARIMUNJAWA',
                'tahun' => '2019',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Riza Arifudin',
                'tema_pkm' => 'Masyarakat Digital',
                'nama_mahasiswa' => 'DIYAH AYU FITRIANA, ASHARINNISA SALSABILA',
                'judul_kegiatan' => 'PEMBERDAYAAN GURU DI SEKOLAH MENEGAH DALAM PEMANFAATAN PENGUJIAN BERBASIS ANDROID SEBAGAI UPAYA PENGIMPLEMENTASIAN MERDEKA BELAJAR',
                'tahun' => '2020',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Much Aziz Muslim',
                'tema_pkm' => 'IT Adaptation di Masyarakat Luas',
                'nama_mahasiswa' => 'DWIKA ANANDA AGUSTINA PERTIWI',
                'judul_kegiatan' => 'Sosialisasi Produk Solar Panel untuk Penerangan Jalan Umum di Desa Gedongsari Banjarejo Blora',
                'tahun' => '2020',
                'created_at' => '',
            ],
            [
                'nama_dosen' => 'Riza Arifudin',
                'tema_pkm' => 'Masyarakat Digital',
                'nama_mahasiswa' => 'GILANG RAMADHAN',
                'judul_kegiatan' => 'PEMBERDAYAAN GURU DI SEKOLAH MENENGAH DALAM PENGUJIAN BERBASIS ANDROID SEBAGAI UPAYA PENGIMPLEMENTASIAN MERDEKA BELAJAR',
                'tahun' => '2020',
                'created_at' => '',
            ]
        ]);
    }
}
