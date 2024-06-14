<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use PDF;

class LaporanGajiController extends Controller
{
    public function index(Request $request)
    {
        // Menggunakan eager loading untuk relasi karyawan dan jabatan
        $gaji = Gaji::with('karyawan.jabatan')
                    ->where('tanggal_gajian', now()->format('Y-m'))
                    ->get();
        return view('laporan.gaji.index', compact('gaji'));
    }
        
    
    public function gaji()
    {
        $gaji = Gaji::with('karyawan.jabatan')
                    ->where('tanggal_gajian', now()->format('Y-m'))
                    ->get();
        return view('laporan.gaji.index', compact('gaji'));
    }
    public function cetak(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $query = Gaji::with('karyawan.jabatan');

        if ($month) {
            $query->whereMonth('tanggal_gajian', $month);
        }

        if ($year) {
            $query->whereYear('tanggal_gajian', $year);
        }

        $gaji = $query->get();

        $pdf = PDF::loadView('laporan.gaji.cetak', compact('gaji', 'month', 'year'));
        return $pdf->download('laporan_gaji.pdf');
    }
}
