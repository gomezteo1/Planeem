<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Planeacion', function (Blueprint $table) {
            $table->bigIncrements('id_Planeacion');
            $table->string('nombre_proyecto')->unique();
            $table->date('fechainicio');
            $table->enum("estado",['Pendiente','Finalizado','1']);
            $table->enum("proceso",['proceso0','proceso1','proceso2','proceso3','proceso4']);
            $table->date('fechaculminacion')->nullable();
            $table->unsignedBigInteger("id_usuario");

            $table->foreign("id_usuario","fk_proyecto_usuario")->references("id")->on("users")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
