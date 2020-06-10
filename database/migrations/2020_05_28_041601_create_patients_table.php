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
            $table->id('id');
            $table->char('no_rm', 6)->unique();
            $table->string('nama');
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();	
            $table->integer('usia')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('ruangan', ['IGD', 'Melati', 'Graha 2', 'Graha 3'])->nullable();	
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
