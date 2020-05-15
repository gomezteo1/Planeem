<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Respustaverbos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respustaverbos', function (Blueprint $table) {
            $table->bigIncrements('id_respustaverbos');
            $table->string('Objetivos');
            $table->unsignedBigInteger("id_Planeacion");
            $table->string('posiciones');
            $table->foreign("id_Planeacion","fk_respustaverbos")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('respustaverbos');
    }
}
