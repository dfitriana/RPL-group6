<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaLulusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_lulus', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama_mahasiswa');
            $table->integer('tahun_lulus');
            $table->boolean('is_lulus');
            $table->string('prodi');
            $table->string('fakultas');
            $table->date('tanggal_lulus')->nullable();
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
        Schema::dropIfExists('mahasiswa_lulus');
    }
}
