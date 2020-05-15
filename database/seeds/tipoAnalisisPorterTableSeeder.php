<?php
use App\Model\tipoAnalisisPorter;
use Illuminate\Database\Seeder;

class tipoAnalisisPorterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipoAnalisisPorter::create([
            'nombre' => 'Poder de Negociación de los Proveedores'
        ]);
        
        tipoAnalisisPorter::create([
            'nombre' => 'Poder de Negociación de los Clientes'
        ]);

        tipoAnalisisPorter::create([
            'nombre' => 'Productos Sustitutos'
        ]);

        tipoAnalisisPorter::create([
            'nombre' => 'Amenazas de Entrada de Nuevos Competidores'
        ]);

        tipoAnalisisPorter::create([
            'nombre' => 'Rivalidad Entre Competidores'
        ]);
       
    }
}
