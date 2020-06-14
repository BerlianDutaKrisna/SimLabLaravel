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
            $table->char('no_rm_ex');
            $table->string('nama_pasien_ex');
            $table->foreignId('id_hematology_results_ex');
            $table->foreignId('id_clinical_result_ex');
            $table->foreignId('id_dokter_ex');
            $table->foreignId('id_room_ex');
            $table->foreignId('id_user_ex');
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
