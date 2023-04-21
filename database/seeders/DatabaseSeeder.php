<?php

namespace Database\Seeders;

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
        $this->call(ClasesSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(DistritosSeeder::class);
    }
}
