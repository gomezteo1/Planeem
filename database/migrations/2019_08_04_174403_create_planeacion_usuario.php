<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneacionUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pensamiento_Pensamiento', function (Blueprint $table) {
           $table->bigIncrements('id_Pensamiento');
            $table->string('Mision_Organizacional',1000)->nullable();
            $table->string('Vision_Organizacional',1000)->nullable();
            $table->string('Mega_Empresarial',1000)->nullable();
            $table->string('Propuesta_valor',1000)->nullable();   
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_Planeacion_Pensamiento")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planeacion_usuario');
    }
}
