<?php

use App\Model\factorclave;
use Illuminate\Database\Seeder;

class factoClaveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factorclave::create([
            'nombre' => 'Lealtad del cliente'
        ]);

        factorclave::create([
            'nombre' => 'Componente innovador'
        ]);
        factorclave::create([
            'nombre' => 'Superioridad Tecnológica'
        ]);
        factorclave::create([
            'nombre' => 'Reconocimiento en el canal'
        ]);
        factorclave::create([
            'nombre' => 'Ubicación estratégica'
        ]);
        factorclave::create([
            'nombre' => 'Número de competidores'
        ]);
        factorclave::create([
            'nombre' => 'Capacidad de negociación'
        ]);
        factorclave::create([
            'nombre' => 'Tiempo de respuesta'
        ]);
        factorclave::create([
            'nombre' => 'Capacidad de negociación con el cliente'
        ]);
        factorclave::create([
            'nombre' => 'Capacidad de negociación con el proveedor'
        ]);
        factorclave::create([
            'nombre' => 'Rotación de personal'
        ]);
        factorclave::create([
            'nombre' => 'Plataforma web'
        ]);
        factorclave::create([
            'nombre' => 'Capacidad de negociación'
        ]);
        factorclave::create([
            'nombre' => 'Herramientas tecnológicas'
        ]);
        factorclave::create([
            'nombre' => 'Fuerza de ventas'
        ]);
        factorclave::create([
            'nombre' => 'Servicio PostVenta'
        ]);
        factorclave::create([
            'nombre' => 'Buzón de sugerencias'
        ]);
        factorclave::create([
            'nombre' => 'Margen de utilidad'
        ]);
        factorclave::create([
            'nombre' => 'Retención de empleados'
        ]);
        factorclave::create([
            'nombre' => 'Capacidad tecnológica'
        ]);
        factorclave::create([
            'nombre' => 'Ventas Onlinne'
        ]);
        factorclave::create([
            'nombre' => 'Eficiencia en la producción'
        ]);
        factorclave::create([
            'nombre' => 'Diseño del producto'
        ]);
    }
}
