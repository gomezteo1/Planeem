<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaCapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_capacidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPlaneacion');
            $table->foreign('idPlaneacion')->references('id_Planeacion')->on('Planeacion');
            $table->unsignedBigInteger('idCapacidad');
            $table->foreign('idCapacidad')->references('id')->on('capacidads');
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
        Schema::dropIfExists('respuesta_capacidad');
    }
}
