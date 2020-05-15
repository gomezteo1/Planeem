<?php

use Illuminate\Database\Seeder;
use App\Model\Penetracion_tipo;
class tipo_PenetracinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Adquisición o Fusión de Empresas'
        ]);

        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Adquisición de Marca'
        ]);

        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Nuevos Nichos de Mercado'
        ]);


        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Investigación'
        ]);


        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Incorporación de Nuevos Servicios'
        ]);

        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Controlar o Adquirir Dominio de Distribuidores o Detallista'
        ]);

        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Controlar o Adquirir Dominio de Distribuidores o Detallista'
        ]);
 
        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Controlar o Adquirir Dominio de Distribuidores o Detallistas'
        ]);

        Penetracion_tipo::create([
            'name_tipo_Penetración'=> 'Controlar o Adquirir el Dominio de los Proveedores'
        ]);
    }
    }

