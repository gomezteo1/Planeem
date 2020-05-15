<?php

use Illuminate\Database\Seeder;
use App\Model\TipoPreguntaansorft;
class tipoPreguntaAnsorftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //Desarrollo de mercado
        {
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa  determina el tamaño de las empresas competidoras?',
            'idTipo'=>'1'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'la empresa sabe cuál es el precio de venta  de los competidores directos que ofrecen el mismo servicio o producto.',
            'idTipo'=>'1'         
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa  tiene informacion de la calidad del producto/servicio ofrecido por los competidores.',
            'idTipo'=>'1'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'Se identifica cuáles son los aspectos que más valora el cliente y/o la percepción de valor que el cliente obtiene de cada competitidor,  segun oferta del mercado actual.',
            'idTipo'=>'1'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa evalua y considera  los precios  según empresas líderes del mercado para  negociar entre sí para evitar la competencia.',
            'idTipo'=>'1'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento de las cuentas por cobrar elevadas, que no rotan o no se cobran.',
            'idTipo'=>'1'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa establece períodos de cobro promedio como tasa de medicion de los días que en promedio transcurren hasta el cobro o recuperación de las cuentas por cobrar.',
            'idTipo'=>'1'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento y rendimiento de las ventas  entre los costos y los ingresos que genera un determinado segmento.',
            'idTipo'=>'1'
            ]);

            //Diversificación
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento y rendimiento de las ventas  entre los costos y los ingresos que genera un determinado segmento.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento y rendimiento de las ventas  entre los costos y los ingresos que genera un determinado segmento.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa añade productos nuevos, relacionados con la actividad fundamental de la empresa.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa innova en: productos, procesos y servicios  para los nuevos mercados.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa cambia formatos de productos o servicios  pero no cambia el enfoque para venderlos . ',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza nuevos portafolios para los mercados existentes y nuevos.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa pone a la venta productos nuevos y en mercados que guardan relación con el espectro comercial.',
            'idTipo'=>'2'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa elabora sus productos y suministros nuevos  para el mercado nuevo.',
            'idTipo'=>'2'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'la empresa distribuye sus propios productos para el mercado actual y potencial.',
            'idTipo'=>'2'
            ]);

            //Desarrollo de producto 
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa  determina el tamaño de las empresas competidoras?',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'Lla empresa sabe cuál es el precio de venta  de los competidores directos que ofrecen el mismo servicio o producto.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa  tiene informacion de la calidad del producto/servicio ofrecido por los competidores.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'Se identifica cuáles son los aspectos que más valora el cliente y/o la percepción de valor que el cliente obtiene de cada competitidor,  segun oferta del mercado actual.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa evalua y considera  los precios  según empresas líderes del mercado para  negociar entre sí para evitar la competencia.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento de las cuentas por cobrar elevadas, que no rotan o no se cobran.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa establece períodos de cobro promedio como tasa de medicion de los días que en promedio transcurren hasta el cobro o recuperación de las cuentas por cobrar.',
            'idTipo'=>'3'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza seguimiento y rendimiento de las ventas  entre los costos y los ingresos que genera un determinado segmento.',
            'idTipo'=>'3'
            ]);

            //Estrategia de penetracion
            TipoPreguntaansorft::create([
            'nombre'=> ' La  empresa analiza e identifica el o (los ) producto y/o servicio (s) que  le (s) genera más rentabilidad y volúmen de ventas.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa cuenta con indicadores de gestión  de Tiempo de respuesta de acuerdo a las necesidades del cliente.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'Actualmente planeo  obtener acceso a las últimas tecnologías, acorde a las necesidades  de mis productos o servicios.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa tiene encuenta su ubicación estratégica para facilitar el acceso al producto y/o servicio.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa uitliza el SIM y la Investigacion de   Mercados para deteminar  su número de competidores con relación a sus productos y/o servicios.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa tiene encuenta o propone productos que pueden reemplazar otros,con función similar que permitan satisfacer las necesidades de los clientes.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa informa al equipo de ventas y marketing los criterios para identificar clientes potenciales en función de los objetivos de estargicos.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza servicio PostVenta  en cada una de sus  estrategias de venta.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa cuenta con un músculo finaciero para realizar la conquista de nuevos mercados.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa tiene en cuenta la forma en que  presenta el producto o servicio , la rotación  y la rentabilidad del mismo.',
            'idTipo'=>'4'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa vende o negocia sus productos a través de tiendas minoristas.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa implementa una promoción a un producto o servicio de interés a corto plazo con una fecha de terminación corta.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa considera participar  en las redes sociales.',
            'idTipo'=>'4'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> ' La empresa considera obtener un  espacio de ventas adicional en los canales de distribución actuales.',
            'idTipo'=>'4'
            ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa realiza la presentación, rotación y rentabilidad de un producto o servicio en el  Punto de Venta.',
            'idTipo'=>'4'
            ]);

            // TipoPreguntaansorft::create([
            // 'nombre'=> 'La empresa potencia  la visibilidad de los productos o servicios del punto de venta y/o E-commerce haciendo uso de la exhibición de sus características comerciales ante el segmento potencial de cliente.',
            // 'idTipo'=>'4'
            // ]);

            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa hace reconocimiento  y fortalece el canal que mas le aplica a sus clientes y usuarios.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa establece parámetros y capacidad de negociación de acuerdo a sus necesidades.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa cuenta con indicadores de gestión  de tiempo de respuesta de acuerdo a las necesidades del cliente.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa tiene encuenta el  número de proveedores necesarios que satisfagan el tiempo de respuesta para  los clientes.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa integra mecanismos digitales de promoción que atiendan a la evolución digital del consumidor.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa tiene encuenta  una web corporativa y de servicio de comercio electrónico como oportunidad de difusión de imagen,negocio y comercio global   entre sus clientes y proveedores.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa dispone de una fuerza de ventas y de rotación de personal para dar respuesta a los diferentes necesidades de los clientes.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'la empresa valora las herramientas  tecnológicas corporativas utilizandolas a nivel interno y externo.(Intranet y la web).',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa contempla un buzón de sugerencias para la escucha activa y atender los requerimientos de sus clientes internos y externos.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa comunica el valor real y diferenciador que ofrece a sus clientes.',
            'idTipo'=>'4'
            ]);
            TipoPreguntaansorft::create([
            'nombre'=> 'La empresa refleja como quiere posicionar  los productos o servicios.',
            'idTipo'=>'4'
            ]);


            }
    }
}
