<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class misEstrategias extends Model
{   
    protected $table="mis_estrategias";
    protected $primarykey="id";
    public $fillable= [
        'estrategia',
        'id_Planeacion'
    ];
    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','id_Planeacion');
    }
     public $timestamps=false;
}

