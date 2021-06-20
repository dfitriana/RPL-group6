<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspek', function (Blueprint $table) {
            $table->id();
            $table->integer('indikator_id')->references('id')->on('indikator');
            $table->integer('isian_indikator_id')->references('id')->on('isian_indikator');
            $table->string('nama_aspek');
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
        Schema::dropIfExists('aspek');
    }
}
