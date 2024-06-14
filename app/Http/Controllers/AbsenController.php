<?php

// app/Http/Controllers/AbsenController.php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $absens = Absen::with('karyawan')->get();
        return view('absens.index', compact('absens'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        return view('absens.create', compact('karyawans'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'hadir' => 'required|array',
        'sakit' => 'required|array',
        'alpha' => 'required|array',
    ]);

    foreach ($request->hadir as $karyawanId => $hadir) {
        $sakit = $request->sakit[$karyawanId];
        $alpha = $request->alpha[$karyawanId];

        // Update or create absen record
        $absen = Absen::updateOrCreate(
            ['karyawan_id' => $karyawanId],
            ['hadir' => $hadir, 'sakit' => $sakit, 'alpha' => $alpha]
        );

        // Calculate deductions
        $deduction = ($sakit + $alpha) * 25000;

        // Update or create Gaji record
        $karyawan = Karyawan::findOrFail($karyawanId);
        $jabatan = $karyawan->jabatan;
        $totalGaji = $jabatan->gaji_pokok + $jabatan->transportasi + $jabatan->uang_makan - $deduction;

        Gaji::updateOrCreate(
            ['karyawan_id' => $karyawan->id, 'tanggal_gajian' => now()->format('Y-m')],
            [
                'gaji_pokok' => $jabatan->gaji_pokok,
                'transportasi' => $jabatan->transportasi,
                'uang_makan' => $jabatan->uang_makan,
                'total_gaji' => $totalGaji,
                'deduction' => $deduction,
            ]
        );
    }

    return redirect()->route('absens.index')->with('success', 'Absensi berhasil ditambahkan.');
}
}
