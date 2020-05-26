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
            'nombre' => 'La participación en el mercado'
        ]);

        factorclave::create([
            'nombre' => 'Los precios'
        ]);
        factorclave::create([
            'nombre' => 'Los atributos del producto'
        ]);
        factorclave::create([
            'nombre' => 'La calidad del Producto'
        ]);
        factorclave::create([
            'nombre' => 'La satisfacción del consumidor'
        ]);
        factorclave::create([
            'nombre' => 'El margen de utilidad'
        ]);
        factorclave::create([
            'nombre' => 'El posicionamiento en el mercado'
        ]);
        factorclave::create([
            'nombre' => 'La oferta de valor'
        ]);
        factorclave::create([
            'nombre' => 'La antigüedad en el mercado'
        ]);
        factorclave::create([
            'nombre' => 'El componente Innovador'
        ]);
        factorclave::create([
            'nombre' => 'Los canales de distribución'
        ]);
        factorclave::create([
            'nombre' => 'El tiempo de respuesta'
        ]);
        factorclave::create([
            'nombre' => 'La rotación de productos'
        ]);
        factorclave::create([
            'nombre' => 'Las ventas online'
        ]);
        factorclave::create([
            'nombre' => 'La fuerza de ventas'
        ]);
        factorclave::create([
            'nombre' => 'El servicio postventa'
        ]);
        factorclave::create([
            'nombre' => 'La publicidad'
        ]);
        factorclave::create([
            'nombre' => 'El portafolio de productos'
        ]);
        factorclave::create([
            'nombre' => 'La presencia en Redes sociales '
        ]);
        factorclave::create([
            'nombre' => 'El valor diferencial.'
        ]);
        // factorclave::create([
        //     'nombre' => 'Ventas Onlinne'
        // ]);
        // factorclave::create([
        //     'nombre' => 'Eficiencia en la producción'
        // ]);
        // factorclave::create([
        //     'nombre' => 'Diseño del producto'
        // ]);
    }
}
