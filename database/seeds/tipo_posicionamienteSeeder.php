<?php

use Illuminate\Database\Seeder;
use App\Model\tipo_posicionamiente;
class tipo_posicionamienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_posicionamiente::create([
            'tipo_posicionamiento'=>'POSICIONAMIENTO'
        ]);

        tipo_posicionamiente::create([
            'tipo_posicionamiento'=>'FIDELIZACIÓN'
        ]);

        tipo_posicionamiente::create([
            'tipo_posicionamiento'=>'DISTRIBUCIÓN'
        ]);

        tipo_posicionamiente::create([
            'tipo_posicionamiento'=>'CRECIMIENTO'
        ]);
    }
}
