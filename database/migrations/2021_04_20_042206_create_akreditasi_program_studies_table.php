<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkreditasiProgramStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akreditasi_program_studies', function (Blueprint $table) {
            $table->string('programstudi')->primary()->autoIncrement();
            $table->enum('status',['Pending','Shipped']);
            $table->string('data');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akreditasi_program_studies');
    }
}
