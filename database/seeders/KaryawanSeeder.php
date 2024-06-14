<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        DB::table('karyawans')->insert([
            [
                'nik' => '123',
                'nama' => 'Vivin',
                'jenis_kelamin' => 'Perempuan',
                'jabatan_id' => 1,
                'tanggal_masuk' => '2020-05-25',
                'status' => 'Karyawan Tetap',
            ],
            [
                'nik' => '124',
                'nama' => 'Karyo',
                'jenis_kelamin' => 'Laki-laki',
                'jabatan_id' => 2,
                'tanggal_masuk' => '2020-05-25',
                'status' => 'Karyawan Tidak Tetap',
            ],
            [
                'nik' => '125',
                'nama' => 'Riko',
                'jenis_kelamin' => 'Laki-laki',
                'jabatan_id' => 3,
                'tanggal_masuk' => '2020-06-17',
                'status' => 'Karyawan Tidak Tetap',
            ],
            [
                'nik' => '128',
                'nama' => 'koko',
                'jenis_kelamin' => 'Laki-laki',
                'jabatan_id' => 2,
                'tanggal_masuk' => '2024-06-12',
                'status' => 'Karyawan Tetap',
            ],
        ]);
    }
}
