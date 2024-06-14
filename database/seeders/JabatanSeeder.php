<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    public function run()
    {
        DB::table('jabatans')->insert([
            [
                'nama_jabatan' => 'Staff Administrasi',
                'gaji_pokok' => 4000000,
                'transportasi' => 300000,
                'uang_makan' => 500000,
            ],
            [
                'nama_jabatan' => 'Staff Finance',
                'gaji_pokok' => 4500000,
                'transportasi' => 300000,
                'uang_makan' => 500000,
            ],
            [ 'nama_jabatan' => 'Staff Gudang',
            'gaji_pokok' => 4100000,
            'transportasi' => 330000,
            'uang_makan' => 510000,],
        ]);
    }
}
