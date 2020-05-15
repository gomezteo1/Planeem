<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenetracionMercadoanfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penetracion_mercadoanf', function (Blueprint $table) {
            $table->bigIncrements('id_penetracion_mercadoanf');
            $table->string('name_penetracion_mercadoanf',1500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penetracion_mercadoanf');
    }
}
