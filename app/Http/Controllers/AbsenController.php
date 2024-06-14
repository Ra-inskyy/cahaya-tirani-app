<?php
namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $query = Absen::query()->with('karyawan');

        if ($request->has('bulan') && $request->has('tahun')) {
            $bulan = $request->input('bulan');
            $tahun = $request->input('tahun');
            $query->where('bulan', $bulan)->where('tahun', $tahun);
        }

        if ($request->has('karyawan_id')) {
            $query->where('karyawan_id', $request->input('karyawan_id'));
        }

        $absens = $query->orderBy('bulan')->orderBy('tahun')->get();

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
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|min:2000|max:' . date('Y'),
            'hadir' => 'required|array',
            'sakit' => 'required|array',
            'alpha' => 'required|array',
        ]);

        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        foreach ($request->hadir as $karyawanId => $hadir) {
            $sakit = $request->sakit[$karyawanId];
            $alpha = $request->alpha[$karyawanId];

            // Update or create absen record
            $absen = Absen::updateOrCreate(
                ['karyawan_id' => $karyawanId, 'bulan' => $bulan, 'tahun' => $tahun],
                ['hadir' => $hadir, 'sakit' => $sakit, 'alpha' => $alpha]
            );

            // Calculate deductions
            $deduction = $sakit * 25000 + $alpha * 50000;

            // Update or create Gaji record
            $karyawan = Karyawan::findOrFail($karyawanId);
            $jabatan = $karyawan->jabatan;
            $totalGaji = $jabatan->gaji_pokok + $jabatan->transportasi + $jabatan->uang_makan - $deduction;

            Gaji::updateOrCreate(
                ['karyawan_id' => $karyawan->id, 'bulan' => $bulan, 'tahun' => $tahun],
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
