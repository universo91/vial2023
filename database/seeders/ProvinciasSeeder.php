<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = [

            //Apurimac
            [
                'nombre' => 'abancay',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'antabamba',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'andahuylas',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'aymaraes',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'chincheros',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'cotabambas',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],
            [
                'nombre' => 'grau',
                'ubigeo' => '030100',
                'departamentos_id' => 1
            ],

            //Cusco
            [
                'nombre' => 'cusco',
                'ubigeo' => '070100',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'acomayo',
                'ubigeo' => '070200',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'anta',
                'ubigeo' => '070300',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'calca',
                'ubigeo' => '070400',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'canas',
                'ubigeo' => '070500',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'canchis',
                'ubigeo' => '070600',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'chumbivilcas',
                'ubigeo' => '070700',
                'departamentos_id' => 2
            ],
            [
                'nombre' => 'espinar',
                'ubigeo' => '070800',
                'departamentos_id' => 2
            ]

        ];

        foreach( $provincias as $provincia) {
            Provincia::updateOrCreate($provincia);
        }
    }
}
