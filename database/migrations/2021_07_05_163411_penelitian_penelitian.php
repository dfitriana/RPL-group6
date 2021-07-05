<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenelitianPenelitian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_penelitian', function (Blueprint $table) {
            $table->string('nama_dosen');
            $table->enum('tema_penelitian',['IT Adaptation on E-Governmen','IT Adaptation on E-Bussiness','Artificial Intelligent','Data Mining']);
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
        Schema::dropIfExists('penelitian_penelitian');
    }
}
