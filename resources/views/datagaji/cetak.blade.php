<!DOCTYPE html>
<html>
<head>
    <title>Laporan Gaji</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Laporan Gaji</h2>
    <p>Bulan: {{ $bulan }}</p>
    <p>Tahun: {{ $tahun }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Transportasi</th>
                <th>Uang Makan</th>
                <th>Total Gaji</th>
                <th>Deduction</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $index => $g)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $g->karyawan->nama }}</td>
                    <td>{{ $g->karyawan->jabatan->nama_jabatan }}</td>
                    <td>{{ $g->gaji_pokok }}</td>
                    <td>{{ $g->transportasi }}</td>
                    <td>{{ $g->uang_makan }}</td>
                              <td>{{ $g->deduction }}</td>
                    <td>{{ $g->total_gaji }}</td>
          
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
