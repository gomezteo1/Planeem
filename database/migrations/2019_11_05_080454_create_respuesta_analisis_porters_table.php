<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaAnalisisPortersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_analisis_porters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPlaneacion');
            $table->foreign('idPlaneacion')->references('id_Planeacion')->on('Planeacion');
            $table->unsignedBigInteger('idAnaPorter');
            $table->foreign('idAnaPorter')->references('id')->on('analisis_porters');
            $table->string('respuesta');
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
        Schema::dropIfExists('respuesta_analisis_porters');
    }
}
