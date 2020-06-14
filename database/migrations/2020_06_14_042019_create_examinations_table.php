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
            $table->date('tanggal_pemeriksaan');
            $table->timestamps();

            $table->char('no_rm', 6);

            $table->foreign('no_rm')
                ->references('no_rm')
                ->on('patients');

            $table->foreignId('id_hematology_results');
            $table->foreignId('id_clinical_results');
            $table->foreignId('id_doctor');
            $table->foreignId('id_room');
            $table->foreignId('id_user');

            $table->foreign('id_hematology_results')
            ->references('id_hematology_results')
            ->on('hematology_results')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_clinical_results')
            ->references('id_clinical_results')
            ->on('clinical_results')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_doctor')
            ->references('id_doctor')
            ->on('doctor')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_room')
            ->references('id_room')
            ->on('room')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_user')
            ->references('id_user')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
