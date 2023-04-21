<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            [
               'nombre' => 'losa',
               'clases_id' => 1
            ],
            [
               'nombre' => 'losa con vigas',
               'clases_id' => 1
            ],
            [
               'nombre' => 'celular estilo alcantarilla',
               'clases_id' => 1
            ],
            [
               'nombre' => 'portico',
               'clases_id' => 1
            ],
            [
               'nombre' => 'reticulado',
               'clases_id' => 1
            ],
            [
               'nombre' => 'arco',
               'clases_id' => 1
            ],
            [
               'nombre' => 'atirantado',
               'clases_id' => 1
            ],
            [
               'nombre' => 'colgante',
               'clases_id' => 1
            ],
            [
               'nombre' => 'otro',
               'clases_id' => 1
            ],
            [
               'nombre' => 'modular bailey',
               'clases_id' => 2
            ],
            [
                'nombre' => 'modular Mabey',
                'clases_id' => 2
             ],
            [
               'nombre' => 'modular acrow',
               'clases_id' => 2
            ],
            [
               'nombre' => 'modular sima',
               'clases_id' => 2
            ],
            [
               'nombre' => 'wayata',
               'clases_id' => 2
            ],
            [
               'nombre' => 'otro',
               'clases_id' => 2
            ],
            [
               'nombre' => 'vigas de troncos de arboles',
               'clases_id' => 3
            ],
            [
               'nombre' => 'mamposteria',
               'clases_id' => 3
            ],
            [
               'nombre' => 'concreto simple o cilopeo',
               'clases_id' => 3
            ],
            [
               'nombre' => 'concreto reforzado con rieles de ferrocarril',
               'clases_id' => 3
            ],
            [
               'nombre' => 'otro',
               'clases_id' => 3
            ]
        ];

        foreach( $tipos as $tipo) {
            Tipo::updateOrCreate($tipo);
        }
    }
}
