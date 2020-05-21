<?php

use Illuminate\Database\Seeder;
use App\Model\capacidad;

class capacidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //directiva
        capacidad::create([
            'nombre'=>'La identidad corporativa de su empresa.',
            'idTipo'=> 1

        ]);

        capacidad::create([
            'nombre'=>'El análisis estratégico.',
            'idTipo'=> 1

        ]);
        capacidad::create([
            'nombre'=>'El uso de planes estratégicos.',
            'idTipo'=> 1

        ]);
        capacidad::create([
            'nombre'=>'El sistema de gestión, bioseguridad y control de procesos.',
            'idTipo'=> 1

        ]);
        capacidad::create([
            'nombre'=>'La capacidad del servicio y respuesta al cliente.',
            'idTipo'=> 1
            
        ]);
        capacidad::create([
            'nombre'=>'La coordinación en los niveles organizacionales, estratégico táctico y operativo.',
            'idTipo'=> 1
            
        ]);

        capacidad::create([
            'nombre'=>'La velocidad de respuesta a condiciones cambiantes.',
            'idTipo'=> 1

        ]);

        capacidad::create([
            'nombre'=>'La capacidad de negociación.',
            'idTipo'=> 1

        ]);

        capacidad::create([
            'nombre'=>'La toma de decisiones en cada área administrativa.',
            'idTipo'=> 1

        ]);

        capacidad::create([
            'nombre'=>'El cumplimento de metas.',
            'idTipo'=> 1

        ]);
        //Estas capacidades se usaban en la version anterior :D 

        // capacidad::create([
        //     'nombre'=>'La orientación empresarial.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'La habilidad para manejar la inflación.',
        //     'idTipo'=> 1

        // ]);
        // capacidad::create([
        //     'nombre'=>'La disponibilidad de líneas de crédito.',
        //     'idTipo'=> 1

        // ]);
        // capacidad::create([
        //     'nombre'=>'La capacidad de endeudamiento.',
        //     'idTipo'=> 1

        // ]);
        // capacidad::create([
        //     'nombre'=>'La exclusividad.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'La rotación de inventarios.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'El cumplimento de metas.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'La planificación operativa.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'La capacidad de negociación.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'El sistema de coordinación.',
        //     'idTipo'=> 1

        // ]);

        // capacidad::create([
        //     'nombre'=>'El sistema de toma de decisiones.',
        //     'idTipo'=> 1

        // ]);

        
        //Competitiva

        capacidad::create([
            'nombre'=>'La calidad en el producto.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La experiencia o antigüedad en el sector.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La experiencia y satisfacción del cliente.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La participación de su empresa en los canales de marketing digital.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La inversión en I+D+i para el desarrollo de nuevos productos.    ',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La disponibilidad de proveedores y de insumos.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La administración de sus clientes.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'El servicio en la atención oportuna al cliente.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'El acceso a organismos privados y públicos.',
            'idTipo'=> 2

        ]);
        capacidad::create([
            'nombre'=>'La imagen de la compañía en el mercado.',
            'idTipo'=> 2

        ]);
        //Estas capacidades competitivas son de la version anterior    
        
        // capacidad::create([
        //     'nombre'=>'La Inversión en I+D+i para el desarrollo de nuevos productos.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La ventaja del potencial de crecimiento del mercado. ',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La fortaleza de proveedores y disponibilidad de insumos.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La concentración de consumidores.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La administración de sus clientes.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'El servicio Postventa.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La competencia en el sector.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'El acceso a organismos privados y públicos.',
        //     'idTipo'=> 2

        // ]);
        // capacidad::create([
        //     'nombre'=>'La imagen de la compañía en el mercado.',
        //     'idTipo'=> 2

        // ]);

        //Financiera
        capacidad::create([
            'nombre'=>'La relación con el banco y la accesibilidad a créditos.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La rentabilidad, del retorno de la inversión (ROI).',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La capacidad de endeudamiento.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La rotación de Inventario.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'Días de rotación de cartera.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La evaluación de liquidez.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La fuente de financiamiento con (accionistas, acreedores, inversionistas y gobierno).',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La estabilidad en costes de producción, distribución y ventas.',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'El margen financiero bruto de un bien o servicio. (Beneficio o ganancia).',
            'idTipo'=> 3

        ]);
        capacidad::create([
            'nombre'=>'La declaración de impuestos de industria y comercio.',
            'idTipo'=> 3

        ]);
        
        //Estas son las capacidades financieras de la anterior versión
        // capacidad::create([
        //     'nombre'=>'La habilidad para mantener el esfuerzo ante la demanda cíclica.',
        //     'idTipo'=> 3

        // ]);

        // capacidad::create([
        //     'nombre'=>'La elasticidad de la demanda con respecto a los precios.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La fuente de financiamiento interno y externo.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La disponibilidad de líneas de crédito.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La estabilidad de costos.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'El tiempo que su negocio toma en cobrar la cartera.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La rotación de Inventario.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La poca demanda de su producto o servicio.',
        //     'idTipo'=> 3

        // ]);
        // capacidad::create([
        //     'nombre'=>'La oferta en su producto o servicio.',
        //     'idTipo'=> 3

        // ]);


        //Tecnologica

        capacidad::create([
            'nombre'=>'La intensidad en el uso de mano de obra.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'La aplicación de tecnologías informáticas.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'El nivel de desarrollo tecnológico.',
            'idTipo'=> 4

        ]);

        capacidad::create([
            'nombre'=>'El grado de implantación de tecnologías de la información.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'El nivel de tecnología aplicado en los procesos.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'La efectividad de la producción con procesos automatizados.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'La innovación, desarrollo e investigación en patentes y procesos.',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'La capacidad de gestión de métodos de producción computarizada.',
            'idTipo'=> 4

        ]);

        capacidad::create([
            'nombre'=>'La adquisición de software',
            'idTipo'=> 4

        ]);
        capacidad::create([
            'nombre'=>'El acceso a servicios públicos e internet.',
            'idTipo'=> 4

        ]);
        //Estas son las capacidades tecnologicas de la anterior versión

        // capacidad::create([
        //     'nombre'=>'La aplicación de tecnologías informáticas.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'La fuerza de producto.',
        //     'idTipo'=> 4

        // ]);

        // capacidad::create([
        //     'nombre'=>'La calidad y exclusividad de su producto o servicio.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'La participación del mercado.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'El bajo costo de distribución y ventas.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'El portafolio de productos.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'El nivel de desarrollo tecnológico.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'El grado de implantación de tecnologías de la información.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'El poder de negociación con los clientes.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'La rivalidad entre competidores.',
        //     'idTipo'=> 4

        // ]);
        // capacidad::create([
        //     'nombre'=>'La ubicación geográfica.',
        //     'idTipo'=> 4

        // ]);


        //factor humano

        capacidad::create([
            'nombre'=>'La experiencia técnica del personal.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'El nivel académico del recurso humano.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'La rotación interna.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'El ausentismo.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'La inversión en capacitación.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'El salario legal y justo.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'El índice de desempeño.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'El nivel de remuneración.',
            'idTipo'=> 5

        ]);

        capacidad::create([
            'nombre'=>'La identificación de habilidades blandas de las personas contratadas.',
            'idTipo'=> 5

        ]);
        capacidad::create([
            'nombre'=>'El reconocimiento al personal destacado en programas de desarrollo.',
            'idTipo'=> 5
        ]);

        //Factor humano de la ultima versión
        
        // capacidad::create([
        //     'nombre'=>'La estabilidad.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'La experiencia técnica.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'El nivel académico del recurso humano.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'La rotación interna.',
        //     'idTipo'=> 5

        // ]);
        
        // capacidad::create([
        //     'nombre'=>'El ausentismo.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'La falta de capacitación.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'El salario bajo.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'El capital de trabajo mal utilizado.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'Los recursos financieros.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'La calidad en el producto final.',
        //     'idTipo'=> 5

        // ]);
        // capacidad::create([
        //     'nombre'=>'La buena actitud del personal contratado.',
        //     'idTipo'=> 5

        // ]);

    }
}
