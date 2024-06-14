<?php
namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use PDF;

class DataGajiController extends Controller
{
    public function index(Request $request)
    {
        $query = Gaji::with('karyawan.jabatan');

        if ($request->has('bulan') && $request->has('tahun')) {
            $bulan = $request->input('bulan');
            $tahun = $request->input('tahun');
            $query->where('bulan', $bulan)
                  ->where('tahun', $tahun);
        }

        $gaji = $query->get();

        return view('datagaji.index', compact('gaji'));
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

        $pdf = PDF::loadView('datagaji.cetak', compact('gaji', 'bulan', 'tahun'));
        return $pdf->download('laporan_gaji.pdf');
    }
}
