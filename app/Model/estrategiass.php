<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategiass extends Model
{

    protected $table = 'estrategiass';

    protected $primarykey = 'id_estrategias' ;

    protected $fillable = ['id_respuesta_analisis','id_respuesta_capacidad'];



}
