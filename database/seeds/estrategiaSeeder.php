<?php

use Illuminate\Database\Seeder;
use App\Model\estrategia;
class estrategiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estrategia::create([
        	'Name_estrategia'=>'Telemercadeo'
        ]);

        estrategia::create([
        	'Name_estrategia'=>'Canales'
        ]);
        estrategia::create([
        	'Name_estrategia'=>'Puntos de Venta'
        ]);
        estrategia::create([
        	'Name_estrategia'=>'Posicionamiento'
        ]);
         estrategia::create([
        	'Name_estrategia'=>'E-commerce'
        ]);
          estrategia::create([
        	'Name_estrategia'=>'Personal'
        ]);
    }
}
