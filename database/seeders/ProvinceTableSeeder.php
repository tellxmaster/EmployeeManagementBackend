<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('Provincia')->insert([
            'id' => 1,
            'nombre_provincia' => 'Azuay',
            'capital_provincia' => 'Cuenca',
            'descripcion_provincia' => 'Es llamada la Atenas del Ecuador por su arquitectura, su diversidad cultural, su aporte a las artes, ciencias y letras ecuatorianas y por ser el lugar de nacimiento de muchos personajes ilustres de la sociedad ecuatoriana',
            'poblacion_provincia' => '569.42',
            'superficie_provincia' => '122.00',
            'latitud_provincia' => '-2.902222',
            'longitud_provincia' => '- 79.005261',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 2,
            'nombre_provincia' => 'Bolivar',
            'capital_provincia' => 'Guaranda',
            'descripcion_provincia' => 'Bolívar es una provincia del centro de Ecuador, en la cordillera occidental de los Andes. Su capital es la ciudad de Guaranda. La Provincia de Bolívar se llama así en honor al Libertador Simón Bolívar.',
            'poblacion_provincia' => '183 641',
            'superficie_provincia' => '3254.00',
            'latitud_provincia' => '-1.6',
            'longitud_provincia' => '- 79',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 3,
            'nombre_provincia' => 'Cañar',
            'capital_provincia' => 'Azoguez',
            'descripcion_provincia' => 'La provincia destaca como uno de los sitios turísticos más importantes del país, destacándose entre otros la Fortaleza de Ingapirca, la Laguna de Culebrillas y la ciudad de Azogues.',
            'poblacion_provincia' => '33848.00',
            'superficie_provincia' => '3908.00',
            'latitud_provincia' => '-2.733333',
            'longitud_provincia' => '-78.833333',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 4,
            'nombre_provincia' => 'Carchi',
            'capital_provincia' => 'Tulcán',
            'descripcion_provincia' => 'Carchi es una provincia ecuatoriana situada al norte del Ecuador en la frontera con Colombia. Su capital es la ciudad de Tulcán. Forma parte de la región 1',
            'poblacion_provincia' => '82734.00',
            'superficie_provincia' => '3783.00',
            'latitud_provincia' => '0.811667',
            'longitud_provincia' => ' -77.718611',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 5,
            'nombre_provincia' => 'Chimborazo',
            'capital_provincia' => 'Riobamba',
            'descripcion_provincia' => 'En esta provincia se encuentran varias de las cumbres más elevadas del país, como el Carihuairazo, el Altar, Igualata, Sangay, entre otros, que en algunos casos comparte con otras provincias.',
            'poblacion_provincia' => '223586.00',
            'superficie_provincia' => '6487.00',
            'latitud_provincia' => '-1.666667',
            'longitud_provincia' => '- 78.65',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 6,
            'nombre_provincia' => 'Cotopaxi',
            'capital_provincia' => 'Latacunga',
            'descripcion_provincia' => 'La provincia toma el nombre del volcán más grande e importante de su territorio, el volcán Cotopaxi. Cotopaxi se encuentra dividida políticamente en 7 cantones. Según el último ordenamiento territorial, la provincia de Cotopaxi pertenece a la región centro 3',
            'poblacion_provincia' => '409 205',
            'superficie_provincia' => '6569.00',
            'latitud_provincia' => '-0.933333',
            'longitud_provincia' => ' -78.616667',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 7,
            'nombre_provincia' => 'El Oro',
            'capital_provincia' => 'Machala',
            'descripcion_provincia' => 'La capital de la provincia de El Oro es la ciudad de Machala, quinta ciudad del país, considerada como la capital bananera del mundo .',
            'poblacion_provincia' => '260528.00',
            'superficie_provincia' => '6188.00',
            'latitud_provincia' => '-3.266669',
            'longitud_provincia' => ' -79.9667',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 8,
            'nombre_provincia' => 'Esmeraldas',
            'capital_provincia' => 'Esmeraldas',
            'descripcion_provincia' => 'Provincia del Ecuador situada en su costa noroccidental, conocida popularmente como la provincia verde. Sucapital homónima es uno de los puertos principales del Ecuador y terminal del oleoducto transandino. Posee un aeropuerto para vuelos nacionales e internacionales',
            'poblacion_provincia' => '189504.00',
            'superficie_provincia' => '15 954',
            'latitud_provincia' => '-0.966667',
            'longitud_provincia' => ' -79.65',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 9,
            'nombre_provincia' => 'Galápagos',
            'capital_provincia' => 'P. Baquerizo Moreno',
            'descripcion_provincia' => 'Es el mayor centro turístico del Ecuador, así como también una de las reservas ecológicas más grandes e importantes del planeta. Con sus 26.640 habitantes, Galápagos es la provincia menos poblada del país, debido principalmente al afán de conservar al máximo la flora y fauna de la región.',
            'poblacion_provincia' => '5600.00',
            'superficie_provincia' => '8010.00',
            'latitud_provincia' => '-0.666667',
            'longitud_provincia' => ' - 90.55',
            'id_region' => 3,
        ]);
        DB::table('Provincia')->insert([
            'id' => 10,
            'nombre_provincia' => 'Guayas',
            'capital_provincia' => 'Guayaquil',
            'descripcion_provincia' => 'Es el mayor centro comercial e industrial del Ecuador. Con sus 3,8 millones de habitantes, Guayas es la provincia más poblada del país, constituyéndose con el 24,5% de la población de la República.',
            'poblacion_provincia' => '2526927.00',
            'superficie_provincia' => '17139.00',
            'latitud_provincia' => '-2.2',
            'longitud_provincia' => ' - 79.9667',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 11,
            'nombre_provincia' => 'Imbabura',
            'capital_provincia' => 'Ibarra',
            'descripcion_provincia' => 'La provincia también es conocida por sus contrastes poblacionales es así que la población está marcada por diferentes factores demográficos, además desde siempre ha sido núcleo de artesanías y cultura.',
            'poblacion_provincia' => '181722.00',
            'superficie_provincia' => '4599.00',
            'latitud_provincia' => '0.35',
            'longitud_provincia' => '- 78.133333',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 12,
            'nombre_provincia' => 'Loja',
            'capital_provincia' => 'Loja',
            'descripcion_provincia' => 'Loja es una ciudad del Ecuador, capital de la provincia y cantón Loja, tiene una rica tradición en las artes, y por esta razón es conocida como la capital musical y cultural del Ecuador.',
            'poblacion_provincia' => '206.83',
            'superficie_provincia' => '57.00',
            'latitud_provincia' => '-3.833',
            'longitud_provincia' => '-80.067',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 13,
            'nombre_provincia' => 'Los Rios',
            'capital_provincia' => 'Babahoyo',
            'descripcion_provincia' => 'Los Ríos, oficialmente Provincia de Los Ríos, es una de las 24 provincias de la República del Ecuador, localizada en la Región Costa del país. Su capital es la ciudad de Babahoyo y su localidad más poblada es la ciudad de Quevedo. Es uno de los más importantes centros agrícolas del Ecuador. Su territorio está ubicado en la parte central del litoral del país y limita con las provincias de Guayas, Santo Domingo de los Tsáchilas, Manabí, Cotopaxi y Bolívar. Según el último ordenamiento territorial, la provincia de Los Ríos pertenece a la región comprendida también por las provincias de Bolívar, Guayas y Santa Elena.',
            'poblacion_provincia' => '778115.00',
            'superficie_provincia' => '6254.00',
            'latitud_provincia' => '-1.766669',
            'longitud_provincia' => '- 79.45',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 14,
            'nombre_provincia' => 'Manabí',
            'capital_provincia' => 'Portoviejo',
            'descripcion_provincia' => 'Manabí es una provincia ecuatoriana localizada en el emplazamiento centro-noroeste del Ecuador continental, cuya unidad jurídica se ubica en la región geográfica del litoral, que a su vez se encuentra dividida por el cruce de la línea equinoccial. Su capital es Portoviejo. Limita al oeste con el Océano Pacífico, al norte con la provincia de Esmeraldas, al este con la provincia deSanto Domingo de los Tsáchilas y Los Ríos, al sur con la provincia de Santa Elena y al sur y este con la provincia de Guayas. Con una población de 1,395.249 habitantes, es la tercera provincia más poblada de Ecuador.',
            'poblacion_provincia' => '1369780.00',
            'superficie_provincia' => '18400.00',
            'latitud_provincia' => '-1.052219',
            'longitud_provincia' => '-80.4506',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 15,
            'nombre_provincia' => 'Morona Santiago',
            'capital_provincia' => 'Macas',
            'descripcion_provincia' => 'Morona Santiago (nombre oficial Provincia de Morona Santiago) es una de las 24 provincias que conforman la República del Ecuador. Es una provincia de la Amazonía ecuatoriana. Su capital es la ciudad de Macas, la cual además, es su urbe más poblada. Su territorio limita al norte con Pastaza, al sur con Zamora Chinchipe, al este con Perú, y al oeste con Tungurahua, Azuay, Chimborazo y Cañar. Ocupa una superficie de 25.690 km², un área similar a la de Cerdeña.',
            'poblacion_provincia' => '147940.00',
            'superficie_provincia' => '25690.00',
            'latitud_provincia' => '-2.366667',
            'longitud_provincia' => ' - 78.133333',
            'id_region' => 4,
        ]);
        DB::table('Provincia')->insert([
            'id' => 16,
            'nombre_provincia' => 'Napo',
            'capital_provincia' => 'Tena',
            'descripcion_provincia' => 'La provincia de Napo es una de las provincias de la Región Centro Norte (Ecuador), de la República del Ecuador, situada en la región amazónica ecuatoriana e incluyendo parte de las laderas de los Andes, hasta las llanuras amazónicas. Toma su nombre del río Napo. Su capital es la ciudad de Tena. Limita al norte con Sucumbíos, al sur con Pastaza, al oeste con Pichincha,Cotopaxi y Tungurahua y al este con la Provincia de Orellana.',
            'poblacion_provincia' => '103697.00',
            'superficie_provincia' => '13271.00',
            'latitud_provincia' => '0.989',
            'longitud_provincia' => '-77.8159',
            'id_region' => 4,
        ]);
        DB::table('Provincia')->insert([
            'id' => 17,
            'nombre_provincia' => 'Orellana',
            'capital_provincia' => 'Francisco de Orellana',
            'descripcion_provincia' => 'Orellana, provincia de la Región Centro Norte (Ecuador), Ecuador, La capital de la provincia es El Coca más conocida como «Coca». Al norte limita con Sucumbíos, al sur con la provincia de Pastaza, al este con Perú y al oeste con Napo. Tiene una superficie de 20.733 km², que en términos de extensión es similar a la de El Salvador. Es una de las provincias más nuevas del país, provincia 22, pues fue creada en 1998 al ser separada de Napo. Inicialmente su nombre iba a ser provincia de Amazonaspero ante un potencial reclamo de Perú se decidió denominarla Orellana. La población es de 136.396 habitantes; sus habitantes nativos pertenecen principalmente a las nacionalidades waorani, schuar y kichwa.',
            'poblacion_provincia' => '136396.00',
            'superficie_provincia' => '20773.00',
            'latitud_provincia' => '-0.933333',
            'longitud_provincia' => '- 75.666667',
            'id_region' => 4,
        ]);
        DB::table('Provincia')->insert([
            'id' => 18,
            'nombre_provincia' => 'Pastaza',
            'capital_provincia' => 'Puyo',
            'descripcion_provincia' => 'Pastaza, oficialmente Provincia de Pastaza, es una de las 24 provincias que conforman la República del Ecuador, situada en laRegión Amazónica del Ecuador. Recibe su nombre del río Pastaza, que la separa al sur de la provincia de Morona Santiago. Su capital es la ciudad de Puyo.',
            'poblacion_provincia' => '83933.00',
            'superficie_provincia' => '29520.00',
            'latitud_provincia' => '-1.066667',
            'longitud_provincia' => '- 78.001111',
            'id_region' => 4,
        ]);
        DB::table('Provincia')->insert([
            'id' => 19,
            'nombre_provincia' => 'Pichincha',
            'capital_provincia' => 'Quito',
            'descripcion_provincia' => 'La Provincia de Pichincha es una de las 24 provincias que conforman la República del Ecuador. Se encuentra ubicada al norte del país, en la zona geográfica conocida como sierra. Su capital administrativa es la ciudad de Quito, la cual además es su urbe más poblada y la capital del país. Es también el principal centro comercial del país.',
            'poblacion_provincia' => '2576287.00',
            'superficie_provincia' => '9612.00',
            'latitud_provincia' => '-0.25',
            'longitud_provincia' => '-78.583333',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 20,
            'nombre_provincia' => 'Santa Elena',
            'capital_provincia' => 'Santa Elena',
            'descripcion_provincia' => 'Santa Elena es una provincia de la costa de Ecuador creada el 7 de noviembre de 2007, la más reciente de las 24 actuales, con territorios que anterior a esa fecha formaban parte de la provincia del Guayas, al oeste de ésta.',
            'poblacion_provincia' => '308693.00',
            'superficie_provincia' => '3763.00',
            'latitud_provincia' => '- 2.2267',
            'longitud_provincia' => ' -80.8583',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 21,
            'nombre_provincia' => 'Santo Domingo de los Tsáchilas',
            'capital_provincia' => 'Santo Domingo',
            'descripcion_provincia' => 'La Provincia de Santo Domingo de los Tsáchilas es una de las provincias de la República del Ecuador y forma parte de laRegión Costa, históricamente conocida como Provincia de Yumbos. Su territorio está en zona de trópico húmedo. La provincia toma su nombre de los Tsáchilas, etnia ancestral de la zona.',
            'poblacion_provincia' => '410937.00',
            'superficie_provincia' => '4180.00',
            'latitud_provincia' => '-0.333333',
            'longitud_provincia' => '-79.25',
            'id_region' => 2,
        ]);
        DB::table('Provincia')->insert([
            'id' => 22,
            'nombre_provincia' => 'Sucumbios',
            'capital_provincia' => 'Nueva Loja',
            'descripcion_provincia' => 'Sucumbíos es una provincia del nor-oriente del Ecuador. Su capital es Nueva Loja. Es una de las principales provincias que proveen al Estado ecuatoriano del petróleo que necesita para las exportaciones. Se caracteriza por sus bellos paisajes amazónicos, entre ellos el río Aguarico.',
            'poblacion_provincia' => '176472.00',
            'superficie_provincia' => '18612.00',
            'latitud_provincia' => '-0.083333',
            'longitud_provincia' => '- 76.883333',
            'id_region' => 4,
        ]);
        DB::table('Provincia')->insert([
            'id' => 23,
            'nombre_provincia' => 'Tungurahua',
            'capital_provincia' => 'Ambato',
            'descripcion_provincia' => 'Tungurahua, oficialmente Provincia de Tungurahua, es una de las 24 provincias que conforman la República del Ecuador. Se encuentra al centro del país, en la región geográfica conocida como sierra. La ciudad de Ambato es su capital administrativa; se divide en 9 cantones. Forma parte de la región comprendida también por las provincias de Cotopaxi, Chimborazo y Pastaza.',
            'poblacion_provincia' => '504583.00',
            'superficie_provincia' => '3334.00',
            'latitud_provincia' => '- 1.233333',
            'longitud_provincia' => '-78.616667',
            'id_region' => 1,
        ]);
        DB::table('Provincia')->insert([
            'id' => 24,
            'nombre_provincia' => 'Zamora Chimchipe',
            'capital_provincia' => 'Zamora',
            'descripcion_provincia' => 'Zamora Chinchipe es una provincia de Ecuador ubicada en el suroriente de la Amazonía ecuatoriana, que limita con la provincia de Morona Santiago al norte; con la provincia de Loja al oeste; y con Perú al sur y este. Según el último ordenamiento territorial del Ecuador, Zamora Chinchipe pertenece a la Región Sur comprendida también por las provincias de Loja y El Oro. Tiene una superficie de 10.556 km², la cual comprende una orografía montañosa única que la distingue del resto de provincias amazónicas.',
            'poblacion_provincia' => '91376.00',
            'superficie_provincia' => '10556.00',
            'latitud_provincia' => '-2.883333',
            'longitud_provincia' => '-79',
            'id_region' => 4,
        ]);
    }
}
