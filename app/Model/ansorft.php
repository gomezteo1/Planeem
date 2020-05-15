<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ansorft extends Model
{
    //
    protected $table = "ansorfts";


    protected $fillable = [
        
        'id_tipo_mercado',
        'idPlaneacion',
        'idTipoPregunta',
        'pesoRelativo',
        'calificacion',
        'pesoPonderado',
    ];

    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }

    public function tipoPregunta(){
        return $this->belongsTo('App\Models\TipoPreguntaansorft','idTipoPregunta');
    }

    
}
