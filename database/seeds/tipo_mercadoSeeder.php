<?php

use Illuminate\Database\Seeder;
use App\Model\tipo_mercado;
class tipo_mercadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_mercado::create([
            'Nametipo_mercado'=>'Sustitutos'
        ]);

        tipo_mercado::create([
            'Nametipo_mercado'=>'Forma de Uso y Aplicación del Producto'
        ]);

        tipo_mercado::create([
            'Nametipo_mercado'=>'Intercambio de Tecnología'
        ]);


        tipo_mercado::create([
            'Nametipo_mercado'=>'Geográficamente'
        ]);

        
        tipo_mercado::create([
            'Nametipo_mercado'=>'Segmentación'
        ]);

        tipo_mercado::create([
            'Nametipo_mercado'=>'Alianzas Convenios'
        ]);

        tipo_mercado::create([
            'Nametipo_mercado'=>'Promoción'
        ]);

        tipo_mercado::create([
            'Nametipo_mercado'=>'Forma de Uso y Aplicación del Productotitutos'
        ]);
    }
}
