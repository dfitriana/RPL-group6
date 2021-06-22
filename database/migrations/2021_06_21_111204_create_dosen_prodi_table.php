<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_prodi', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->string('nama_dosen');
            $table->integer('nidn');
            $table->string('prodi');
            $table->string('jurusan');
            $table->string('mail_unnes');
            $table->string('email');
            $table->string('jabatan');
            $table->string('des_jab');
            $table->string('jabfung');
            $table->string('namapangk');
            $table->string('golrupangk');
            $table->string('fakultas');
            $table->string('jenjang');
            $table->string('statuskep');
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
        Schema::dropIfExists('dosen_prodi');
    }
}
