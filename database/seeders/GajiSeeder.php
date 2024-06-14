<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GajiSeeder extends Seeder
{
    public function run()
    {
        DB::table('gajis')->insert([
            [
                'karyawan_id' => 1,
                'gaji_pokok' => 4000000,
                'transportasi' => 300000,
                'uang_makan' => 500000,
                'total_gaji' => 4800000,
                'tanggal_gajian' => '2023-06-10',
            ],
            [
                'karyawan_id' => 2,
                'gaji_pokok' => 4500000,
                'transportasi' => 300000,
                'uang_makan' => 500000,
                'total_gaji' => 5300000,
                'tanggal_gajian' => '2023-06-10',
            ],
            ['karyawan_id' => 3,
                'gaji_pokok' => 4500000,
                'transportasi' => 310000,
                'uang_makan' => 400000,
                'total_gaji' => 530000,
                'tanggal_gajian' => '2023-06-10',],
            ['karyawan_id' => 4,
                'gaji_pokok' => 4500000,
                'transportasi' => 310000,
                'uang_makan' => 400000,
                'total_gaji' => 530000,
                'tanggal_gajian' => '2023-06-11',],
        ]);
    }
}
