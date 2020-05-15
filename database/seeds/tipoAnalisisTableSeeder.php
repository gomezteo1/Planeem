<?php

use Illuminate\Database\Seeder;
use App\Model\tipoAnalisis;

class tipoAnalisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        tipoAnalisis::create([
            'nombre' => 'Politico'
        ]);

        tipoAnalisis::create([
            'nombre' => 'Social'
        ]);

        tipoAnalisis::create([
            'nombre' => 'Legal'
        ]);

        tipoAnalisis::create([
            'nombre' => 'Económico'
        ]);

        tipoAnalisis::create([
            'nombre' => 'Ambiental'
        ]);
        
        tipoAnalisis::create([
            'nombre' => 'Tecnológico'
        ]);
        
    }
}
