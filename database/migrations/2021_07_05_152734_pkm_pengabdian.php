<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PkmPengabdian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkm_pengabdian', function (Blueprint $table) {
            $table->string('nama_dosen');
            $table->enum('tema_pkm',['Masyarakat Digital','IT Adaptation di Masyarakat Luas']);
            $table->string('nama_mahasiswa');
            $table->string('judul_kegiatan');
            $table->year('tahun');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkm_pengabdian');
    }
}
