<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            // $table->foreign('Materia_id')->references('id')->on('Materia')->onDelete('cascade');
            // $table->foreign('idprofesor')->references('id')->on('Profesor')->onDelete('cascade');
            // $table->foreign('idperido')->references('id')->on('Perido')->onDelete('cascade');
            $table->integer('capasidad')->unsigned();

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
        Schema::dropIfExists('clases');
    }
}
