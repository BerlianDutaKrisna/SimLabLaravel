<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('no_rm');
            $table->string('nama');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);	
            $table->integer('usia');
            $table->date('tanggal_lahir');
            $table->enum('ruangan', ['IGD', 'Melati', 'Graha 2', 'Graha 3']);	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
