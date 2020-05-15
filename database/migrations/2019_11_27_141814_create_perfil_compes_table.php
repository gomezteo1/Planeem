<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilCompesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_compe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idFactorClave');
            $table->foreign('idFactorClave')->references('id')->on('factorclaves');
            $table->unsignedBigInteger('idPlaneacion');
            $table->foreign('idPlaneacion')->references('id_Planeacion')->on('Planeacion');
            $table->string('nombreEmpresa');
            $table->decimal('pesoRelativo');
            $table->decimal('totalPeso')->nullable();
            $table->decimal('calificacion');
            $table->decimal('totalCalificacion')->nullable();
            $table->decimal('pesoPonderado');
            $table->decimal('totalPonderado')->nullable();
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
        Schema::dropIfExists('perfil_compe');
    }
}
