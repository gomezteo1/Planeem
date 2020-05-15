<?php

use Illuminate\Database\Seeder;
use App\Model\analisis;

class analisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Politico
        analisis::create([
            'nombre'=>'Las normativas comerciales y Aranceles',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'Los socios comerciales favorecidos',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La inestabilidad política',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La legislación actual en el mercado local',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'El periodo gubernamenal y cambios',
            'idTipo'=> 1

        ]);


        //Social

        analisis::create([
            'nombre'=>'La demografía',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La cultura (roles de género, etc.)',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La publicidad y relaciones públicas',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'Los patrones de compra del consumidor',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La moda y modelos a seguir',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'Los factores étnicos y religiosos',
            'idTipo'=> 2

        ]);

        //Legal

        analisis::create([
            'nombre'=>'Las normativas de precio',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Los Impuestos',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Los requerimientos de etiquetado de productos',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'La legislación salarial: Salario mínimo y horas extras',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'La normativa de seguridad industrial',
            'idTipo'=> 3

        ]);

        //Económico

        analisis::create([
            'nombre'=>'El nivel de capacitación de la fuerza laboral',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El costo de la mano de obra',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'La situación económica local',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El PIB y su evolución',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'Los motivadores de los clientes/usuarios',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El nivel de desempleo (normalmente a menor empleohay menos renta disponible)',
            'idTipo'=> 4

        ]);

        //Ambiental

       analisis::create([
            'nombre'=>'Los residuos tóxicos producidos',
            'idTipo'=> 5

        ]); 
        
        analisis::create([
            'nombre'=>'Los residuos líquidos liberados',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'El consumo de energía',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'El nivel de reciclad',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'El consumo de agua potable',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'El impacto ambiental total',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'La contaminación ambiental por electro-smog',
            'idTipo'=> 5

        ]); 
        analisis::create([
            'nombre'=>'Las Emisiones de Gases de Efecto Invernadero',
            'idTipo'=> 5

        ]); 

        //Tecnológico

        analisis::create([
            'nombre'=>'La madurez de la tecnología',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'La velocidad de transferencia de los desarrollos de investigación ',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'El desarrollo tecnológico de los competidores',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'La tecnologías/soluciones sustitutas',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'La capacidad y madurez de la manufactura',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'El desarrollo tecnológico reciente',
            'idTipo'=> 6

        ]); 
        analisis::create([
            'nombre'=>'El acceso a la tecnología, licenciamiento, patentes',
            'idTipo'=> 6

        ]); 

   



    }
}
