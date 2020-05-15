<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class personaJuridica extends Model
{
    //
    protected $table = "personajuridica";

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIT', 
        'razonSocial', 
        'responsable',
        'sectorEconomico',
        'id_usuario'
    ];
    public $timestamps=false;
}
