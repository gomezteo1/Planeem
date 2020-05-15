<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaPenetracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_penetracion', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta_penetracion');
            $table->unsignedBigInteger("id_penetracion_mercadoanf");
            $table->foreign("id_penetracion_mercadoanf","fk_penetracion_mercadoanf")->references("id_penetracion_mercadoanf")->on("penetracion_mercadoanf")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_tipo_Penetracion');
            $table->foreign('id_tipo_Penetracion')->references('id_tipo_Penetración')->on('tipo_Penetración');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_Planeacion_penetracion")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
            $table->decimal('Peso_Relativo');
            $table->decimal('Calificación');
            $table->decimal('Peso_Ponderado');
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
        Schema::dropIfExists('respuesta__penetracion');
    }
}
