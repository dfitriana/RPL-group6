<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamaPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasama_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga_mitra');
            $table->enum('tingkat',['Internasional','Nasional','Wilayah/Lokal']);
            $table->string('judul_kegiatan');
            $table->string('manfaat');
            $table->string('waktu_durasi');
            $table->string('bukti_kerjasama');
            $table->year('tahun_berakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerjasama_penelitians');
    }
}
