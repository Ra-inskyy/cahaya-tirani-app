<x-app-layout>

<div class="container">
    <h2>Input Kehadiran</h2>
    <form action="{{ route('absens.store') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alpha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                    <tr>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                        <td>
                            <input type="number" name="hadir[{{ $karyawan->id }}]" value="0" class="form-control">
                        </td>
                        <td>
                            <input type="number" name="sakit[{{ $karyawan->id }}]" value="0" class="form-control">
                        </td>
                        <td>
                            <input type="number" name="alpha[{{ $karyawan->id }}]" value="0" class="form-control">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</x-app-layout>
