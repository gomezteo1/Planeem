<?php

use Illuminate\Database\Seeder;
use App\Model\tipoCapacidad;

class tipoCapacidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        tipoCapacidad::create([
            'nombre' => 'Directiva'
        ]);

        tipoCapacidad::create([
            'nombre' => 'Competitiva'
        ]);

        tipoCapacidad::create([
            'nombre' => 'Financiera'
        ]);

        tipoCapacidad::create([
            'nombre' => 'Tecnológica'
        ]);

        tipoCapacidad::create([
            'nombre' => 'Factor Humano'
        ]);
    }
}
