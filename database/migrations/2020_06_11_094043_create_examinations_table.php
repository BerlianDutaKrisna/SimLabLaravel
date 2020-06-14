<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->id('id_examinations');
            $table->foreignId('no_rm')->constrained('patients_table')->nullable();
            $table->foreignId('id_dokter')->constrained('doctor_table')->nullable();
            $table->foreignId('id_user')->constrained('users_table')->nullable();
            $table->foreignId('id_hematology_results')->constrained('hematology_results_table')->nullable();
            $table->foreignId('id_clinical_result')->constrained('clinical_results_table')->nullable();
            $table->foreignId('id_room')->constrained('room_table')->nullable();
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
        Schema::dropIfExists('examinations');
    }
}
