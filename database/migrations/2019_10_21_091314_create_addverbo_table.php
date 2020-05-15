<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddverboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addverbo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('addverbo');
            $table->unsignedBigInteger("id_respuestaEstrategias");
            $table->foreign("id_respuestaEstrategias","id_respuestaEstrategias")->references("id_respuestaEstrategias")->on("respuestaEstrategias")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addverbo');
    }
}
