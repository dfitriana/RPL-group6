<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dosens', function (Blueprint $table) {
            $table->id('nip');
            $table->string('nama', 50);
            $table->string('email', 50)->nullable();
            $table->integer('jabatan_id')->nullable();
            $table->integer('kode_unit')->nullable();
            $table->integer('prodi_doskar')->nullable();
            $table->string('mail_unnes')->nullable();
            $table->string('bidang_ilmu')->nullable();
            $table->integer('prodi_jabatan')->nullable();
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_dosens');
    }
}
