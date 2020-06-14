<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHematologyResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematology_results', function (Blueprint $table) {
            $table->id('id_hematology_results');
            $table->string('WBC', 100)->nullable();
            $table->string('Neu%', 100)->nullable();
            $table->string('Lym%', 100)->nullable();
            $table->string('Mon%', 100)->nullable();
            $table->string('Eos%', 100)->nullable();
            $table->string('Bas%', 100)->nullable();
            $table->string('Neu#', 100)->nullable();
            $table->string('Lym#', 100)->nullable();
            $table->string('Mon#', 100)->nullable();
            $table->string('Eos#', 100)->nullable();
            $table->string('Bas#', 100)->nullable();

            $table->string('RBC', 100)->nullable();
            $table->string('HGB', 100)->nullable();
            $table->string('HCT', 100)->nullable();
            $table->string('MCV', 100)->nullable();
            $table->string('MCH', 100)->nullable();
            $table->string('MCHC', 100)->nullable();
            $table->string('RDW-CV', 100)->nullable();
            $table->string('RDW-SD', 100)->nullable();

            $table->string('PLT', 100)->nullable();
            $table->string('MPV', 100)->nullable();
            $table->string('PDW', 100)->nullable();
            $table->string('PCT', 100)->nullable();
            $table->string('ALY%', 100)->nullable();
            $table->string('LIC%', 100)->nullable();
            $table->string('ALY#', 100)->nullable();
            $table->string('LIC#', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hematology_results');
    }
}
