<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasDeAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Alumno_id');
            $table->unsignedBigInteger('perido_id');
            //$table->unsignedBigInteger('clase_id');
            $table->timestamps();

            $table->foreign('Alumno_id')->references('id')->on('alumnos');
            $table->foreign('perido_id')->references('id')->on('peridos');
            //$table->foreign('clase_id')->references('id')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias_alumnos');
    }
}
