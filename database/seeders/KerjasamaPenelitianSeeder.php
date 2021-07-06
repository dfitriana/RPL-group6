<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KerjasamaPenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kerjasama_penelitians')->truncate();
        DB::table('kerjasama_penelitians')->insert([
            [
                'lembaga_mitra'     => 'Universitas Negeri Padang',
                'tingkat'           => 'Nasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Pendidikan',
                'manfaat'           => 'Kerjasama Bidang Pendidikan',
                'waktu_durasi'      => '2020, 2 tahun',
                'bukti_kerjasama'   => 'PKS',
                'tahun_berakhir'    => '2022'
            ],
            [
                'lembaga_mitra'     => 'Universitas Negeri Jakarta',
                'tingkat'           => 'Nasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Pendidikan',
                'manfaat'           => 'Kerjasama Bidang Pendidikan',
                'waktu_durasi'      => '2020, 2 tahun',
                'bukti_kerjasama'   => 'PKS',
                'tahun_berakhir'    => '2022'
            ],
            [
                'lembaga_mitra'     => 'Universitas Negeri Gorontalo',
                'tingkat'           => 'Nasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Pendidikan',
                'manfaat'           => 'Kerjasama Bidang Pendidikan',
                'waktu_durasi'      => '2020, 2 tahun',
                'bukti_kerjasama'   => 'PKS',
                'tahun_berakhir'    => '2022'
            ],
            [
                'lembaga_mitra'     => 'Association for Information System Indonesia',
                'tingkat'           => 'Nasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2020, 5 tahun',
                'bukti_kerjasama'   => 'MOA',
                'tahun_berakhir'    => '2025'
            ],
            [
                'lembaga_mitra'     => 'Universiti Malaysia Pahang',
                'tingkat'           => 'Internasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2019',
                'bukti_kerjasama'   => 'MOM',
                'tahun_berakhir'    => '2021'
            ],
            [
                'lembaga_mitra'     => 'University of Missouri-Kansas City',
                'tingkat'           => 'Internasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2020',
                'bukti_kerjasama'   => 'MOU',
                'tahun_berakhir'    => '2024'
            ],
            [
                'lembaga_mitra'     => 'Crocodic',
                'tingkat'           => 'Wilayah/Lokal',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2020',
                'bukti_kerjasama'   => 'MOA',
                'tahun_berakhir'    => '2022'
            ],
            [
                'lembaga_mitra'     => 'Stiflin',
                'tingkat'           => 'Wilayah/Lokal',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2020',
                'bukti_kerjasama'   => 'MOA',
                'tahun_berakhir'    => '2022'
            ],
            [
                'lembaga_mitra'     => 'Massey University (New Zealand)',
                'tingkat'           => 'Internasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2019',
                'bukti_kerjasama'   => 'MOM',
                'tahun_berakhir'    => '2024'
            ],
            [
                'lembaga_mitra'     => 'Hiroshima University (Jepang)',
                'tingkat'           => 'Internasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2018, 2 tahun',
                'bukti_kerjasama'   => 'MOM',
                'tahun_berakhir'    => '2020'
            ],
            [
                'lembaga_mitra'     => 'Guang Xi Normal University (China)',
                'tingkat'           => 'Internasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2018, 1 tahun',
                'bukti_kerjasama'   => 'MOM',
                'tahun_berakhir'    => '2019'
            ],
            [
                'lembaga_mitra'     => 'Universitas Gadjah Mada',
                'tingkat'           => 'Nasional',
                'judul_kegiatan'    => 'Kerjasama Bidang Tri Dharma',
                'manfaat'           => 'Kerjasama Bidang Tri Dharma',
                'waktu_durasi'      => '2018, 3 tahun',
                'bukti_kerjasama'   => 'MOM',
                'tahun_berakhir'    => '2021'
            ],
            
        ]);
    }
}
