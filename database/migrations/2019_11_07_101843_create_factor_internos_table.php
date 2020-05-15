<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factor_internos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idRespuestaCapacidad');
            $table->foreign('idRespuestaCapacidad')->references('id')->on('respuesta_capacidad');
            $table->unsignedBigInteger('idPlaneacion');
            $table->foreign('idPlaneacion')->references('id_Planeacion')->on('Planeacion');
            $table->double('ponderacion');
            $table->decimal('totalPonderacion');
            $table->double('calificacion');
            $table->decimal('totalCalificacion');
            $table->double('puntuacionPonderada');
            $table->double('totalPuntuacion');
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
        Schema::dropIfExists('factor_internos');
    }
}
