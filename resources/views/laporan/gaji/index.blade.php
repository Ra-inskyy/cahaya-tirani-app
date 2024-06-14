<x-app-layout>
<div class="container">
    <h2>Laporan Gaji</h2>
    <a href="{{ route('laporan.gaji.cetak') }}" class="btn btn-success mb-3">Cetak PDF</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Transportasi</th>
                <th>Uang Makan</th>
                <th>Potongan</th>
                <th>Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $item)
                <tr>
                    <td>{{ $item->karyawan->nik }}</td>
                    <td>{{ $item->karyawan->nama }}</td>
                    <td>{{ $item->karyawan->jabatan->nama_jabatan }}</td>
                    <td>{{ number_format($item->gaji_pokok, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->transportasi, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->uang_makan, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->deduction, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->total_gaji, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>