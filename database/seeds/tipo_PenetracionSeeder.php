<?php

use Illuminate\Database\Seeder;
use App\Model\tipo_Penetracion;

class tipo_PenetracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_Penetracion::create([
            'nombre'=> 'Telemercadeo'
        ]);

        tipo_Penetracion::create([
            'nombre'=> 'Canales'
        ]);

        tipo_Penetracion::create([
            'nombre'=> 'Puntos de Venta'
        ]);
        
        tipo_Penetracion::create([
            'nombre'=> 'Posicionamiento'
        ]);
        

        tipo_Penetracion::create([
            'nombre'=> 'E-Commerce'
        ]);


        tipo_Penetracion::create([
            'nombre'=> 'Personal'
        ]);

        
        
       
    }
}
