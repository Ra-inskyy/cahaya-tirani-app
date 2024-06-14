<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        return view('jabatan.index', compact('jabatans'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->input('nama_jabatan');
        $jabatan->gaji_pokok = $request->input('gaji_pokok');
        $jabatan->transportasi = $request->input('transportasi');
        $jabatan->uang_makan = $request->input('uang_makan');
        $jabatan->save();

        return redirect()->route('jabatan.index');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->nama_jabatan = $request->input('nama_jabatan');
        $jabatan->gaji_pokok = $request->input('gaji_pokok');
        $jabatan->transportasi = $request->input('transportasi');
        $jabatan->uang_makan = $request->input('uang_makan');
        $jabatan->save();

        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index');
    }
}
