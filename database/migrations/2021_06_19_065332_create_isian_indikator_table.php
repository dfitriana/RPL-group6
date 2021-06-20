<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsianIndikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isian_indikator', function (Blueprint $table) {
            $table->id();
            $table->integer('data_dosens_nip')->references('nip')->on('data_dosens');
            $table->integer('ts')->nullable();
            $table->integer('nomer_ts')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('keterangan')->nullable();
            $table->enum('tingkat', ['wilayah', 'nasional', 'internasional'])->nullable();
            $table->integer('rerata')->nullable();
            $table->enum('kepuasan', ['sangat_baik', 'baik', 'cukup', 'kurang'])->nullable();
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
        Schema::dropIfExists('isian_indikator');
    }
}
