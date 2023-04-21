<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Seeder;

class ClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clases = [
            [
                'nombre' => 'puente definitivo'
            ],
            [
                'nombre' => 'puente provisional'
            ],
            [
                'nombre' => 'puente artesanal'
            ]
        ];

        foreach( $clases as $clase) {
            Clase::updateOrCreate($clase);
        }
    }
}
