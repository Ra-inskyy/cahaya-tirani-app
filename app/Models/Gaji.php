<?php

// app/Models/Gaji.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'tanggal_gajian',
        'gaji_pokok',
        'transportasi',
        'uang_makan',
        'total_gaji',
        'deduction',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}

