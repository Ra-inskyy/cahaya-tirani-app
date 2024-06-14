<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            JabatanSeeder::class,
            KaryawanSeeder::class,
            GajiSeeder::class,
        ]);
    }
}

