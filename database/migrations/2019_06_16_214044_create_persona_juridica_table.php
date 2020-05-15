<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaJuridicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajuridica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("NIT")->unique();
            $table->string("razonSocial");
            $table->string("responsable");
            $table->enum("sectorEconomico",[
                'Agricultura',
                'Ganaderia',
                'Pesca',
                'Caza',
                'Mineria',
                'Construccion',
                'Industria',
                'Servicios',
                'Comercio',
                'Financiero',
                'Turismo',
                'Transporte',
                'Comunicacion'
                ]);
            $table->unsignedBigInteger("id_usuario");
            $table->foreign("id_usuario","fk_personaJuridica_usuario")->references("id")->on("users")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_juridica');
    }
}
