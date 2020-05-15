<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class analisis extends Model
{
    //
    protected $table = "analisis";
    
    protected $fillable = [
        
        'nombre',
        'idTipo',
    ];

    public function tipo(){
        return $this->belongsTo('App\Models\tipoAnalisis','idTipo');
    }

  

}

