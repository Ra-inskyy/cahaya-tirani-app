<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Gaji;
use PDF;

class SlipGajiController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('slip-gaji.index', compact('karyawans'));
    }

    public function cetak(Request $request)
    {
        $karyawanId = $request->input('karyawan_id');
        $month = intval($request->input('month'));
        $year = intval($request->input('year'));

        $gaji = Gaji::where('karyawan_id', $karyawanId)
                    ->whereMonth('tanggal_gajian', $month)
                    ->whereYear('tanggal_gajian', $year)
                    ->first();

        $karyawan = Karyawan::findOrFail($karyawanId);

        return view('slip-gaji.cetak', compact('karyawan', 'gaji', 'month', 'year'));
    }

    public function cetakPdf($karyawanId, $month, $year)
    {
        $month = intval($month);
        $year = intval($year);

        $gaji = Gaji::where('karyawan_id', $karyawanId)
                    ->whereMonth('tanggal_gajian', $month)
                    ->whereYear('tanggal_gajian', $year)
                    ->first();

        $karyawan = Karyawan::findOrFail($karyawanId);

        $pdf = PDF::loadView('slip-gaji.pdf', compact('karyawan', 'gaji', 'month', 'year'));
        return $pdf->download('slip_gaji_' . $karyawan->nama . '_' . $month . '_' . $year . '.pdf');
    }
}
