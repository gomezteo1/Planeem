<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionFactoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluacion_Factores', function (Blueprint $table) {
            $table->bigIncrements('id_Evaluacion_Factores');
            $table->string('tipo');
            $table->decimal('Peso_Relativo');
            $table->decimal('Calificación');
            $table->decimal('Peso_Ponderado');
            $table->unsignedBigInteger("id_respuesta_analisis_porters");
            $table->foreign("id_respuesta_analisis_porters","fk_id_respuesta_analisis_porters")->references("id")->on("respuesta_analisis_porters")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_Evaluacion_Factores")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('Evaluacion_Factores');
    }
}
