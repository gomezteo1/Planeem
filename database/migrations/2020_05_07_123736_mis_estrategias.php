<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MisEstrategias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mis_estrategias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estrategia');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_mis_estrategias")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('mis_estrategias');
    }
}
