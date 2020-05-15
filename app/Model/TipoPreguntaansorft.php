<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoPreguntaansorft extends Model
{
    //
    protected $table="tipo_preguntaansorfts";
    protected $fillable  =[
         
        'nombre',
        'idTipo'
    
    ];
    public function tipo(){
        return $this->belongsTo('App\Models\Tipoansorf','idTipo');
    }
}
