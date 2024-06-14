<!-- resources/views/laporan/gaji/cetak.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Gaji</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Laporan Gaji</h2>
    <p>Bulan: {{ DateTime::createFromFormat('!m', $bulan)->format('F') }} Tahun: {{ $tahun }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Gaji Pokok</th>
                <th>Transportasi</th>
                <th>Uang Makan</th>
                <th>Total Gaji</th>
                <th>Deduction</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $g)
                <tr>
                    <td>{{ $g->id }}</td>
                    <td>{{ $g->karyawan->nama }}</td>
                    <td>{{ $g->karyawan->jabatan->nama_jabatan }}</td>
                    <td>{{ \Carbon\Carbon::parse($g->tanggal_gajian)->format('F') }}</td>
                    <td>{{ \Carbon\Carbon::parse($g->tanggal_gajian)->format('Y') }}</td>
                    <td>{{ $g->gaji_pokok }}</td>
                    <td>{{ $g->transportasi }}</td>
                    <td>{{ $g->uang_makan }}</td>
                    <td>{{ $g->total_gaji }}</td>
                    <td>{{ $g->deduction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
