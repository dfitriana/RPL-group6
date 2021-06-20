<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlottingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plottings', function (Blueprint $table) {
            $table->id();
            $table->string('kode_periode',20);
            $table->integer('id_evaluator');
            $table->integer('nip');
            $table->string('nama_dosen');
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
        Schema::dropIfExists('plottings');
    }
}
