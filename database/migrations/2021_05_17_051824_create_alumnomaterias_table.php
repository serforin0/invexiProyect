<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnoMaterias', function (Blueprint $table) {
             $table->id();
            // //$table->foreign('idAlumno')->references('id')->on('Alumnos');
            // $table->foreign('idperido')->references('id')->on('Perido')->onDelete('cascade');
            // $table->foreign('idclase')->references('id')->on('Clase')->onDelete('cascade');
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
        Schema::dropIfExists('alumno_materias');
    }
}
