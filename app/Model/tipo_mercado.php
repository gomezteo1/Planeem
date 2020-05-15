<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipo_mercado extends Model
{
    protected $primaryKey = 'id_tipo_mercado';
     
    protected $table = 'tipo_mercado';
    
    protected $fillable = [
        'Nametipo_mercado'
    ];
     
}
