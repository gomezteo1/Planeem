<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiassTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategiass', function (Blueprint $table) {
            $table->bigIncrements('id_estrategias');
            $table->unsignedBigInteger("id_respuesta_analisis");
            $table->foreign("id_respuesta_analisis","fk_respuesta_analisis")->references("id")->on("respuesta_analisis")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_respuesta_capacidad");
            $table->foreign("id_respuesta_capacidad","respuesta_capacidad")->references("id")->on("respuesta_capacidad")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('estrategiass');
    }
}
