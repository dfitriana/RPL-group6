<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('judul');
            $table->integer('nip')->nullable();
            $table->string('nama_dosen');
            $table->string('peran');
            $table->integer('total_peneliti');
            $table->integer('dana')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->string('nama_jurnal')->nullable();
            $table->string('nama_seminar')->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->integer('volume')->nullable();
            $table->integer('nomor')->nullable();
            $table->integer('halaman')->nullable();
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
        Schema::dropIfExists('penelitian');
    }
}
