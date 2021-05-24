<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id('kode');
            $table->string('nama_prodi', 50);
            $table->integer('jenjang')->nullable();
            $table->string('konsentrasi', 50)->nullable();
            $table->string('strjjg', 5)->nullable();
            $table->string('no_sk', 50)->nullable();
            $table->string('akreditasi', 5)->nullable();
            $table->date('tgl_sk')->nullable();
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodis');
    }
}
