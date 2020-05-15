<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaEstrategiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestaEstrategias', function (Blueprint $table) {
            $table->bigIncrements('id_respuestaEstrategias');
            $table->string('Verbos');
            $table->unsignedBigInteger("id_verbos");
            $table->foreign("id_verbos","fk_Verbos")->references("id_verbos")->on("Verbos")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestaEstrategias');
    }
}
