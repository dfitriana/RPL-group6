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
            $table->varchar('kode',50);
            $table->varchar('nama_prodi',50);
            $table->integer('jenjang');
            $table->varchar('konsentrasi',50);
            $table->varchar('strjjg',5);
            $table->varchar('no_sk',50);
            $table->varchar('akreditasi',5);
            $table->date('tgl_sk');
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
