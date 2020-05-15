<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respues_Penetracion extends Model
{
    protected $primaryKey = 'id_respues_Penetracion';
     
    protected $table = 'respues_penetracion';

    protected $fillable = [
    
        'Peso_Relativo',
        'Calificación',
        'Peso_Ponderado',
        'id_tipo_preguntaansorfts',
        'id_tipo_Penetracion',
        'id_Planeacion',
    ];


}
