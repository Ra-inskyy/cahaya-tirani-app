<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';

    protected $fillable = [
        'nik', 'nama', 'jenis_kelamin', 'jabatan_id', 'tanggal_masuk', 'status'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}

