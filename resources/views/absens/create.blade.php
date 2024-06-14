<x-app-layout>

<div class="container">
    <h2>Input Kehadiran</h2>
    <form action="{{ route('absens.store') }}" method="POST">
        @csrf

        <!-- Input Bulan dan Tahun -->
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <input type="number" name="bulan" id="bulan" class="form-control" required min="1" max="12">
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" required min="2000" max="{{ date('Y') }}">
        </div>

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
