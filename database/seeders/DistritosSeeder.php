<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Seeder;

class DistritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distritos = [
            // Apurimac
            //Abancay
            [
                'nombre' => 'abancay',
                'ubigeo' => '030101',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'circa',
                'ubigeo' => '030102',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'curahuasi',
                'ubigeo' => '030103',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'chacoche',
                'ubigeo' => '030104',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'huanipaca',
                'ubigeo' => '030105',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'abancay',
                'ubigeo' => '030101',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'lambrama',
                'ubigeo' => '030106',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'pichirhua',
                'ubigeo' => '030107',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'san pedro de cachora',
                'ubigeo' => '030108',
                'provincias_id' => 1
            ],
            [
                'nombre' => 'tamburco',
                'ubigeo' => '030109',
                'provincias_id' => 1
            ],
             //Antabamba
            [
                'nombre' => 'antabamba',
                'ubigeo' => '030401',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'el oro',
                'ubigeo' => '030402',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'huaquirca',
                'ubigeo' => '030403',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'juan espinoza medrano',
                'ubigeo' => '030404',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'oropesa',
                'ubigeo' => '030405',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'pachaconas',
                'ubigeo' => '030406',
                'provincias_id' => 2
            ],
            [
                'nombre' => 'sabaino',
                'ubigeo' => '030407',
                'provincias_id' => 2
            ],

            //Andahuaylas
            [
                'nombre' => 'andahuaylas',
                'ubigeo' => '030301',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'andarapa',
                'ubigeo' => '030302',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'chiara',
                'ubigeo' => '030303',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'huancarama',
                'ubigeo' => '030304',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'huancaray',
                'ubigeo' => '030305',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'kishuara',
                'ubigeo' => '030306',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'pacobamba',
                'ubigeo' => '030307',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'pampachiri',
                'ubigeo' => '030308',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'san antonio de cachi',
                'ubigeo' => '030309',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'san jeronimo',
                'ubigeo' => '030310',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'talavera',
                'ubigeo' => '030311',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'turpo',
                'ubigeo' => '030312',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'pacucha',
                'ubigeo' => '030313',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'pomacocha',
                'ubigeo' => '030314',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'santa maria de chicmo',
                'ubigeo' => '030315',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'tumay huaraca',
                'ubigeo' => '030316',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'huayana',
                'ubigeo' => '030317',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'san miguel de chaccrampa',
                'ubigeo' => '030318',
                'provincias_id' => 3
            ],
            [
                'nombre' => 'kaquiabamba',
                'ubigeo' => '030319',
                'provincias_id' => 3
            ],

            //Aymaraes
            [
                'nombre' => 'chalhuanca',
                'ubigeo' => '030201',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'capaya',
                'ubigeo' => '030202',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'caraybamba',
                'ubigeo' => '030203',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'colcabamba',
                'ubigeo' => '030204',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'cotaruse',
                'ubigeo' => '030205',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'chapimarca',
                'ubigeo' => '030206',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'huayllo',
                'ubigeo' => '030207',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'lucre',
                'ubigeo' => '030208',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'pocohuanca',
                'ubigeo' => '030209',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'sañayca',
                'ubigeo' => '030210',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'soraya',
                'ubigeo' => '030211',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'tapairihua',
                'ubigeo' => '030212',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'tintay',
                'ubigeo' => '030213',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'toraya',
                'ubigeo' => '030214',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'yanaca',
                'ubigeo' => '030215',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'san juan de chacña',
                'ubigeo' => '030216',
                'provincias_id' => 4
            ],
            [
                'nombre' => 'justo apu sahuraura',
                'ubigeo' => '030217',
                'provincias_id' => 4
            ],
            //Chincheros
            [
                'nombre' => 'chincheros',
                'ubigeo' => '030701',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'ongoy',
                'ubigeo' => '030702',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'ocobamba',
                'ubigeo' => '030703',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'cocharcas',
                'ubigeo' => '030704',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'anco huallo',
                'ubigeo' => '030705',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'huaccana',
                'ubigeo' => '030706',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'uranmarca',
                'ubigeo' => '030707',
                'provincias_id' => 5
            ],
            [
                'nombre' => 'ranracancha',
                'ubigeo' => '030708',
                'provincias_id' => 5
            ],
            //Cotabambas
            [
                'nombre' => 'tambobamba',
                'ubigeo' => '030501',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'coyllurqui',
                'ubigeo' => '030502',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'cotabambas',
                'ubigeo' => '030503',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'haquira',
                'ubigeo' => '030504',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'mara',
                'ubigeo' => '030505',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'challhuahuacho',
                'ubigeo' => '030506',
                'provincias_id' => 6
            ],
            //Grau
            [
                'nombre' => 'chuquibambilla',
                'ubigeo' => '030601',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'curpahuasi',
                'ubigeo' => '030602',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'huayllati',
                'ubigeo' => '030603',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'mamara',
                'ubigeo' => '030604',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'mariscal gamarra',
                'ubigeo' => '030605',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'micaela bastidas',
                'ubigeo' => '030606',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'progreso',
                'ubigeo' => '030607',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'pataypampa',
                'ubigeo' => '030608',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'san antonio',
                'ubigeo' => '030609',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'turpay',
                'ubigeo' => '030610',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'vilcabamba',
                'ubigeo' => '030611',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'virundo',
                'ubigeo' => '030612',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'santa rosa',
                'ubigeo' => '030613',
                'provincias_id' => 6
            ],
            [
                'nombre' => 'curasco',
                'ubigeo' => '030614',
                'provincias_id' => 6
            ],

            //Cusco
            //cusco
            [
                'nombre' => 'cusco',
                'ubigeo' => '070101',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'ccorca',
                'ubigeo' => '070102',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'poroy',
                'ubigeo' => '070103',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'san jeronimo',
                'ubigeo' => '070104',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'san sebastian',
                'ubigeo' => '070105',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'santiago',
                'ubigeo' => '070106',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'saylla',
                'ubigeo' => '070107',
                'provincias_id' => 7
            ],
            [
                'nombre' => 'wanchaq',
                'ubigeo' => '070108',
                'provincias_id' => 7
            ],
            //acomayo
            [
                'nombre' => 'acomayo',
                'ubigeo' => '070201',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'acopia',
                'ubigeo' => '070202',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'acos',
                'ubigeo' => '070203',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'pomacanchi',
                'ubigeo' => '070204',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'randocan',
                'ubigeo' => '070205',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'sangarara',
                'ubigeo' => '070206',
                'provincias_id' => 8
            ],
            [
                'nombre' => 'mosoc llacta',
                'ubigeo' => '070207',
                'provincias_id' => 8
            ],
            //Anta
            [
                'nombre' => 'anta',
                'ubigeo' => '070301',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'chinchaypujio',
                'ubigeo' => '070302',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'huarocondo',
                'ubigeo' => '070303',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'limatambo',
                'ubigeo' => '070304',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'mollepata',
                'ubigeo' => '070305',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'pucyura',
                'ubigeo' => '070306',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'zurite',
                'ubigeo' => '070307',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'cachimayo',
                'ubigeo' => '070308',
                'provincias_id' => 9
            ],
            [
                'nombre' => 'cachimayo',
                'ubigeo' => '070309',
                'provincias_id' => 9
            ],
            //Calca
            [
                'nombre' => 'calca',
                'ubigeo' => '070401',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'coya',
                'ubigeo' => '070402',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'lamay',
                'ubigeo' => '070403',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'lares',
                'ubigeo' => '070404',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'pisac',
                'ubigeo' => '070405',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'san salvador',
                'ubigeo' => '070406',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'taray',
                'ubigeo' => '070407',
                'provincias_id' => 10
            ],
            [
                'nombre' => 'yanatile',
                'ubigeo' => '070408',
                'provincias_id' => 10
            ],
            //Canas
            [
                'nombre' => 'yanaocca',
                'ubigeo' => '070501',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'checca',
                'ubigeo' => '070502',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'kunturkanki',
                'ubigeo' => '070503',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'langui',
                'ubigeo' => '070504',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'layo',
                'ubigeo' => '070505',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'pampamarca',
                'ubigeo' => '070506',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'quehue',
                'ubigeo' => '070507',
                'provincias_id' => 11
            ],
            [
                'nombre' => 'tupac amaru',
                'ubigeo' => '070508',
                'provincias_id' => 11
            ],
            //Canchis
            [
                'nombre' => 'sicuani',
                'ubigeo' => '070601',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'compata',
                'ubigeo' => '070602',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'checacupe',
                'ubigeo' => '070603',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'marangani',
                'ubigeo' => '070604',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'pitumarca',
                'ubigeo' => '070605',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'san pablo',
                'ubigeo' => '070606',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'san pedro',
                'ubigeo' => '070607',
                'provincias_id' => 12
            ],
            [
                'nombre' => 'tinta',
                'ubigeo' => '070608',
                'provincias_id' => 12
            ],

            //Chumbivilcas
            [
                'nombre' => 'santo tomas',
                'ubigeo' => '070701',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'copac marca',
                'ubigeo' => '070702',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'qolquemarca',
                'ubigeo' => '070703',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'chamaca',
                'ubigeo' => '070704',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'livitaca',
                'ubigeo' => '070705',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'llusco',
                'ubigeo' => '070706',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'quiñota',
                'ubigeo' => '070707',
                'provincias_id' => 13
            ],
            [
                'nombre' => 'velille',
                'ubigeo' => '070708',
                'provincias_id' => 13
            ],
            //Espinar
            [
                'nombre' => 'espinar',
                'ubigeo' => '070801',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'condorama',
                'ubigeo' => '070802',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'coporaque',
                'ubigeo' => '070803',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'ocoruro',
                'ubigeo' => '070804',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'pallpata',
                'ubigeo' => '070805',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'pichigua',
                'ubigeo' => '070806',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'sugkutambo',
                'ubigeo' => '070807',
                'provincias_id' => 14
            ],
            [
                'nombre' => 'alto pichigua',
                'ubigeo' => '070808',
                'provincias_id' => 14
            ]

        ];

        foreach( $distritos as $distrito) {
            Distrito::updateOrCreate( $distrito);
        }
    }
}
