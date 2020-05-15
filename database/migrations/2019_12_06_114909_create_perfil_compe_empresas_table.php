<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilCompeEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_compe_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idFactorClave');
            $table->foreign('idFactorClave')->references('id')->on('factorclaves');
            $table->unsignedBigInteger('idPlaneacion');
            $table->string('nombreEmpresa');
            $table->decimal('pesoRelativo');
            $table->decimal('totalPeso')->nullable();
            $table->decimal('calificacion');
            $table->decimal('totalCalificacion')->nullable();
            $table->decimal('pesoPonderado');
            $table->decimal('totalPonderado')->nullable();
            $table->string('cantidad');
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
        Schema::dropIfExists('perfil_compe_empresas');
    }
}
