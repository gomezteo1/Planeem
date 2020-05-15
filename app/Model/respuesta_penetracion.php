<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuesta_penetracion extends Model
{
    protected $primaryKey = 'id_respuesta_penetracion';
     
    protected $table = 'respuesta_penetracion';

    protected $fillable = [
        'id_penetracion_mercadoanf',
        'id_tipo_Penetracion',
        'id_tipo_Penetración',
        'id_Planeacion',
        'Peso_Relativo',
        'Calificación',
        'Peso_Ponderado'
    ];


    public $timestamps=false;
}
