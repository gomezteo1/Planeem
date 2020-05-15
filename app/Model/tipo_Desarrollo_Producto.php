<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipo_Desarrollo_Producto extends Model
{
    protected $table = 'tipo_Desarrollo_Producto';

    protected $primarykey = 'id_tipo_Desarrollo_Producto' ;

    protected $fillable = ['nombre'];
}
