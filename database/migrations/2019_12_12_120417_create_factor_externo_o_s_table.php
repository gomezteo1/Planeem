<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorExternoOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factor_externo_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idRespuestaAnalisis');
            $table->foreign('idRespuestaAnalisis')->references('id')->on('respuesta_analisis');
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
        Schema::dropIfExists('factor_externo_o_s');
    }
}
