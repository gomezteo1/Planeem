<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaNaturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personanatural', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("documento")->unique();
            $table->enum("tipoDocumento",['Tarjeta de identidad','Cedula de ciudadania','Cedula de extranjeria']);
            $table->string("nombres");
            $table->string("apellidos");
            $table->unsignedBigInteger("id_usuario");
            $table->foreign("id_usuario","fk_personaNatural_usuario")->references("id")->on("users")->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_natural');
    }
}
