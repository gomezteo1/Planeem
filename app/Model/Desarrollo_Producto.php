<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Desarrollo_Producto extends Model
{
    protected $primaryKey = 'id_Desarrollo_Producto';
     
    protected $table = 'Desarrollo_Producto';

    protected $fillable = [
    
        'Peso_Relativo',
        'Calificación',
        'Peso_Ponderado',
        'id_tipo_preguntaansorfts',
        'id_tipo_Desarrollo_Producto',
        'id_Planeacion',
    ];
    public $timestamps=false;


}
