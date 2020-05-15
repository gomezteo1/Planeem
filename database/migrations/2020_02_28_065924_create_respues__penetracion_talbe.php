<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuesPenetracionTalbe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respues_Penetracion', function (Blueprint $table) {
            $table->bigIncrements('id_respues_Penetracion');
            $table->decimal('Peso_Relativo');
            $table->decimal('Calificación');
            $table->decimal('Peso_Ponderado');
            $table->unsignedBigInteger ('id_tipo_preguntaansorfts');
            $table->foreign("id_tipo_preguntaansorfts","fk_id_tipo_preguntaansorfts")->references("id")->on("tipo_preguntaansorfts")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_tipo_Penetracion");
            $table->foreign("id_tipo_Penetracion","fk_id_tipo_Penetracion")->references("id_tipo_Penetracion")->on("tipo_Penetracion")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_respues_Penetracion")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('respues_Penetracion');
    }
}
