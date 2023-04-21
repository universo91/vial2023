<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            [
                'nombre' => 'apurimac',
                'ubigeo' => '030000',
                'zona' => '18'
            ],
            [
                'nombre' => 'cusco',
                'ubigeo' => '070000',
                'zona' => '18'
            ]
        ];

        foreach($departamentos as $departamento) {
            Departamento::updateOrCreate($departamento);
        }
    }
}
