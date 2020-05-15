<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Corporativos extends Model
{
        protected $primarykey="id_Objetivos_Diseno";

        protected $table="valores_corporativos";

        public $fillable= [
        'valores',
        'id_Planeacion',
        'descripcion'
        ];

}
