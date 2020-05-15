<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tipoAnalisisTableSeeder::class); 
        $this->call(analisisTableSeeder::class); 
        $this->call(tipoCapacidadTableSeeder::class);
        $this->call(capacidadTableSeeder::class);
        $this->call(tipoAnalisisPorterTableSeeder::class);
        $this->call(analisisPorterTableSeeder::class);
        $this->call(factoClaveTableSeeder::class);
        $this->call(tipoAnsorftTableSeeder::class);
        $this->call(tipoPreguntaAnsorftTableSeeder::class);
        $this->call(estrategiaSeeder::class);
        $this->call(verbosTableSeeder::class);
        $this->call(estrategiasSeeder::class);
        $this->call(tipo_mercadoSeeder  ::class);
        $this->call(penetracion_mercadoanfSedeer::class);
        $this->call(tipo_PenetracinSeeder::class);
        $this->call(tipo_PenetracionSeeder::class);
        $this->call(Desarrollo_ProductoSeed::class);
    }
}
