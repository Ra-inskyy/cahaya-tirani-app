<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::with('jabatan')->get();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('karyawan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:karyawans,nik',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'jabatan_id' => 'required|exists:jabatans,id',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string',
        ]);

        // Buat karyawan baru
        $karyawan = Karyawan::create($validatedData);

        // Ambil data gaji dari tabel jabatan
        $jabatan = Jabatan::find($request->input('jabatan_id'));

        // Buat data gaji baru
        Gaji::create([
            'karyawan_id' => $karyawan->id,
            'tanggal_gajian' => now(), // Atur tanggal gajian sesuai kebutuhan
            'gaji_pokok' => $jabatan->gaji_pokok,
            'transportasi' => $jabatan->transportasi,
            'uang_makan' => $jabatan->uang_makan,
            'total_gaji' => $jabatan->gaji_pokok + $jabatan->transportasi + $jabatan->uang_makan
        ]);

        return redirect()->route('karyawan.index');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $jabatans = Jabatan::all();
        return view('karyawan.edit', compact('karyawan', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:karyawans,nik,' . $id,
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'jabatan_id' => 'required|exists:jabatans,id',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string',
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($validatedData);

        // Hapus data gaji yang lama
        Gaji::where('karyawan_id', $karyawan->id)->delete();

        // Ambil data gaji dari tabel jabatan
        $jabatan = Jabatan::find($request->input('jabatan_id'));

        // Buat data gaji baru
        Gaji::create([
            'karyawan_id' => $karyawan->id,
            'tanggal_gajian' => now(), // Atur tanggal gajian sesuai kebutuhan
            'gaji_pokok' => $jabatan->gaji_pokok,
            'transportasi' => $jabatan->transportasi,
            'uang_makan' => $jabatan->uang_makan,
            'total_gaji' => $jabatan->gaji_pokok + $jabatan->transportasi + $jabatan->uang_makan
        ]);

        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        // Hapus data gaji yang terkait
        Gaji::where('karyawan_id', $karyawan->id)->delete();

        return redirect()->route('karyawan.index');
    }
}

