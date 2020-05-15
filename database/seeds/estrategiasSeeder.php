<?php

use Illuminate\Database\Seeder;
use App\Model\estrategias;

class estrategiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estrategias::create([
            'Nameestrategias'=>'hola'
        ]);

        estrategias::create([
            'Nameestrategias'=>'como1'
        ]);

        estrategias::create([
            'Nameestrategias'=>'estas'
        ]);


        estrategias::create([
            'Nameestrategias'=>'2'
        ]);

        estrategias::create([
            'Nameestrategias'=>'3'
        ]);
    }
}
