<?php

use Illuminate\Database\Seeder;
use App\Model\analisisPorter;

class analisisPorterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        analisisPorter::create([
            'nombre'=>'Número de suministradores importantes',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Disponibilidad de sustitutos para los productos de los suministradores',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Diferencia o costes de cambio de los productos de los suministradores',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Amenaza de integración adelante del suministrador',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Amenaza de integración hacia atrás en el sector',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Contribución del suministrador a la calidad de los productos del sector',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Contribución del suministrador a los costes totales del sector',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Importancia del sector para el grupo de suministradores',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Calidad del producto',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Relación',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Grado de confianza',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'Número de compradores importantes sobre el total',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'Disponibilidad de sustitutos',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'Costes de cambio para el comprador',
            'idTipo'=> 2
        ]);



        analisisPorter::create([
            'nombre'=>'Posibilidad de integración hacia atrás del comprador',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'Posibilidad de integración hacia adelante en el sector',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'Contribución del sector a la calidad del producto',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'Implicación con el producto',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'Rentabilidad del comprador',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'Poder de negociación',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'Disponibilidad de sustitutos próximamente',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Costes de cambio para el usuario',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Rentabilidad y agresividad del producto del sustituto',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Ratio precio/valor del sustituto en el sector',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Contraste relación valor-precio',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Agresividad del marketing del producto',
            'idTipo'=> 3
        ]);

        
        analisisPorter::create([
            'nombre'=>'Número de competidores Número de competidores Número de competidor',
            'idTipo'=> 4
        ]);

        
        analisisPorter::create([
            'nombre'=>'Diferenciación de producto',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Acceso canal de distribución',
            'idTipo'=> 4
        ]);
        

        
        analisisPorter::create([
            'nombre'=>'Necesidades de capital',
            'idTipo'=> 4
        ]);


        
        analisisPorter::create([
            'nombre'=>'Acceso a nueva tecnología',
            'idTipo'=> 4
        ]);


        
        analisisPorter::create([
            'nombre'=>'Protección gubernamental/regulación de la industria',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Efecto de la experiencia (y el aprendizaje)',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Costes de cambio de cliente',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Especialización de activos',
            'idTipo'=> 4
        ]);


        analisisPorter::create([
            'nombre'=>'Coste de salida',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Interrelación con otras unidades de negocio',
            'idTipo'=> 4
        ]);


        analisisPorter::create([
            'nombre'=>'Barreras emocionales',
            'idTipo'=> 4
        ]);


        analisisPorter::create([
            'nombre'=>'Restricciones de gobierno',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Número de competidores Número de competidores Número de competidor',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Crecimiento del sector',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Crecimiento de la industria',
            'idTipo'=> 5
        ]);

        
        analisisPorter::create([
            'nombre'=>'Tipo de producto',
            'idTipo'=> 5
        ]);

        
        analisisPorter::create([
            'nombre'=>'Variedad de competidores',
            'idTipo'=> 5
        ]);

        
        analisisPorter::create([
            'nombre'=>'Costes fijos o de almacenaje',
            'idTipo'=> 5
        ]);

        
        analisisPorter::create([
            'nombre'=>'Posiciones estratégicas del sector',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Manera de incrementar capacidad',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Guerra de precios',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Número de competidores',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Crecimiento del sector',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Variedad de competidores',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Costes fijos o de almacenaje',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'Posiciones estratégicas del sector',
            'idTipo'=> 5
        ]);



        




    }
}
