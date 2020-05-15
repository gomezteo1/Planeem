<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoresCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores_corporativos', function (Blueprint $table) {
            $table->bigIncrements('id_valores_corporativos');
            $table->string('valores',100);
            $table->string('descripcion',1410);
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_valores_corporativos")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('valores_corporativos');
    }
}
