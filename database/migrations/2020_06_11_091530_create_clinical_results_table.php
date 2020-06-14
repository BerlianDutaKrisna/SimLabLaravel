<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_results', function (Blueprint $table) {
            $table->id('id_clinical_result');
            $table->string('GDP', 100)->nullable();
            $table->string('GD2PP', 100)->nullable();
            $table->string('GDA', 100)->nullable();
            $table->string('CHOL', 100)->nullable();
            $table->string('CREAT', 100)->nullable();
            $table->string('UREA', 100)->nullable();
            $table->string('SGOT', 100)->nullable();
            $table->string('SGPT', 100)->nullable();
            
            $table->string('K', 100)->nullable();
            $table->string('Na', 100)->nullable();
            $table->string('Cl', 100)->nullable();
            $table->string('nCa', 100)->nullable();
            $table->string('iCa', 100)->nullable();
            $table->string('TCa', 100)->nullable();
            $table->string('pH', 100)->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_results');
    }
}
