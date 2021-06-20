<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodes', function (Blueprint $table) {
            $table->string('kode_periode', 20)->primary();
            $table->integer('kode_prodi');
            $table->string('program_studi', 50);
            $table->increments('evaluator_id')->references('id')->on('evaluators');
            $table->index('evaluator_id');
            $table->dropPrimary('evaluator_id');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
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
        Schema::dropIfExists('periodes');
    }
}
