<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PenetracionMercado extends Model
{
    protected $primaryKey = 'id_respuesta_penetracion';
     
    protected $table = 'respuesta_penetracion';

    protected $fillable = [
    
        'id_penetracion_mercadoanf',
        'id_tipo_Penetracion',
        'id_Planeacion',
        'Peso_Relativo',
        'Calificación',
        'Peso_Ponderado',
    ];


     public $timestamps=false;
}
