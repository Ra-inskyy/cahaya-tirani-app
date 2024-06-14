<!-- resources/views/absens/index.blade.php -->

<x-app-layout>
<div class="container">
    <h2>Data Kehadiran Karyawan</h2>
    <form method="GET" action="{{ route('absens.index') }}">
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <select name="bulan" id="bulan" class="form-control">
                <option value="">--Pilih Bulan--</option>
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <select name="tahun" id="tahun" class="form-control">
                <option value="">--Pilih Tahun--</option>
                @for ($i = date('Y'); $i >= 2000; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tampilkan Data</button>
    </form>
    <div class="mt-3">
        <a href="{{ route('absens.create') }}" class="btn btn-success">Input Kehadiran</a>
    </div>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>No Rekap</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Hadir</th>
                <th>Sakit</th>
                <th>Alpha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absens as $absen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $absen->karyawan->nik }}</td>
                    <td>{{ $absen->karyawan->nama }}</td>
                    <td>{{ $absen->karyawan->jenis_kelamin }}</td>
                    <td>{{ $absen->karyawan->jabatan->nama_jabatan }}</td>
                    <td>{{ $absen->bulan }}</td>
                    <td>{{ $absen->tahun }}</td>
                    <td>{{ $absen->hadir }}</td>
                    <td>{{ $absen->sakit }}</td>
                    <td>{{ $absen->alpha }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
