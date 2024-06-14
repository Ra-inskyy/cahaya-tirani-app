<?php

// app/Models/Absen.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'hadir',
        'sakit',
        'alpha',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
