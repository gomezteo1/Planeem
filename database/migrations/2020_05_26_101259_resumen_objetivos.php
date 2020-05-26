<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class ResumenObjetivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_objetivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('objetivos');
            $table->string('nombre_indicador');
            $table->string('lo_que_se_va_a_medir');
            $table->string('sobre_lo_que_se_va_a_medir');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_resumen_objetivos")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('resumen_objetivos');
    }
}