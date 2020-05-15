<?php

use Illuminate\Database\Seeder;
use App\Model\Tipoansorf;

class tipoAnsorftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        {
            Tipoansorf::create([
                    'nombre'=> 'Desarrollo de mercado'
            ]);
            Tipoansorf::create([
                    'nombre'=> 'Diversificacion.'
            ]);
            Tipoansorf::create([
                    'nombre'=> 'Desarrollo de producto'
            ]);
            Tipoansorf::create([
                    'nombre'=> 'Estrategia de penetracion'
            ]);
  
            
        }
    }
}
