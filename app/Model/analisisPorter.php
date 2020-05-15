<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class analisisPorter extends Model
{
    //
    protected $table = "analisis_porters";
    
    protected $fillable = [
        
        'nombre',
        'idTipo',
    ];

    public function tipo(){
        return $this->belongsTo('App\Models\tipoAnalisisPorter','idTipo');
    }

  

}
