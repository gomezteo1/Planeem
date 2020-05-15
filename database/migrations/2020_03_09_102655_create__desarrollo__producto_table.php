<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrolloProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Desarrollo_Producto', function (Blueprint $table) {
            $table->bigIncrements('id_Desarrollo_Producto');
            $table->decimal('Peso_Relativo');
            $table->decimal('Calificación');
            $table->decimal('Peso_Ponderado');
            $table->unsignedBigInteger ('id_tipo_preguntaansorfts');
            $table->foreign("id_tipo_preguntaansorfts","fk_id_tipo_preguntaansorftsDesarrollo_Producto")->references("id")->on("tipo_preguntaansorfts")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_tipo_Desarrollo_Producto");
            $table->foreign("id_tipo_Desarrollo_Producto","fk_id_tipo_Desarrollo_Producto")->references("id_tipo_Desarrollo_Producto")->on("tipo_Desarrollo_Producto")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","Desarrollo_Producto")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Desarrollo_Producto');
    }
}
