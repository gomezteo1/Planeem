<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class capacidad extends Model
{
    protected $table = "capacidads";
    protected $fillable  =[
     
        'nombre',
        'idTipo'
        
    ];
    public function tipo(){
        return $this->belongsTo('App\Models\tipoCapacidad','idTipo');
    }
}
