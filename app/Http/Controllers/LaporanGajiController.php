<?php
namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use PDF;

class LaporanGajiController extends Controller
{
    public function index(Request $request)
    {
        // Membuat query dasar dengan eager loading relasi karyawan dan jabatan
        $query = Gaji::with('karyawan.jabatan');

        // Filter berdasarkan bulan dan tahun (jika ada dalam request)
        if ($request->has('bulan') && $request->has('tahun')) {
            $bulan = $request->input('bulan');
            $tahun = $request->input('tahun');
            $query->where('bulan', $bulan)
                  ->where('tahun', $tahun);
        } else {
            // Jika tidak ada filter, gunakan bulan dan tahun saat ini
            $query->where('bulan', now()->month)
                  ->where('tahun', now()->year);
        }

        // Eksekusi query dan dapatkan hasil
        $gaji = $query->get();

        return view('laporan.gaji.index', compact('gaji'));
    }

    public function cetak(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $query = Gaji::with('karyawan.jabatan');

        if ($bulan) {
            $query->where('bulan', $bulan);
        }

        if ($tahun) {
            $query->where('tahun', $tahun);
        }

        $gaji = $query->get();

        $pdf = PDF::loadView('laporan.gaji.cetak', compact('gaji', 'bulan', 'tahun'));
        return $pdf->download('laporan_gaji.pdf');
    }
}
