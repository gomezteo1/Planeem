<?php

use Illuminate\Database\Seeder;
use App\Model\tipo_Desarrollo_Producto;


class Desarrollo_ProductoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Etiquetas'
        ]);

        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Usos,Beneficios,Aplicaciones'
        ]);

        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Intercambio de Tecnología'
        ]);


        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Sustituto'
        ]);

        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Nueva Linea de Productos'
        ]);


        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Alianzas, Convenios'
        ]);

        tipo_Desarrollo_Producto::create([
            'nombre'=> 'Promoción'
        ]);

    }
}
