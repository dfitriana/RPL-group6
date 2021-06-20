<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengusulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengusul', function (Blueprint $table) {
            $table->id();
            $table->string('universitas');
            $table->string('unit_pengelola_prodi');
            $table->string('jenis_program');
            $table->string('prodi');
            $table->string('alamat');
            $table->integer('nomor_telf');
            $table->string('email');
            $table->string('website');
            $table->integer('nomor_sk');
            $table->integer('tanggal_sk');
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
        Schema::dropIfExists('pengusul');
    }
}
