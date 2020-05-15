<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsorftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ansorfts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_tipo_mercado");
            $table->foreign('id_tipo_mercado')->references('id_tipo_mercado')->on('tipo_mercado');
            $table->unsignedBigInteger("idPlaneacion");
            $table->foreign('idPlaneacion')->references('id_Planeacion')->on('Planeacion');
            $table->unsignedBigInteger('idTipoPregunta');
            $table->foreign('idTipoPregunta')->references('id')->on('tipo_preguntaansorfts');
            $table->decimal('pesoRelativo');
            $table->decimal('calificacion');
            $table->decimal('pesoPonderado');
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
        Schema::dropIfExists('ansorfts');
    }
}
