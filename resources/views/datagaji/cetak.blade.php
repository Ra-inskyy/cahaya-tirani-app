resources/views/laporan/gaji/cetak.blade.php
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
<h1>Slip Gaji</h1>
    <p>Karyawan: {{ $karyawan->nama }}</p>
    <p>Bulan: {{ $month }}</p>
    <p>Tahun: {{ $year }}</p>
    
    @if($gaji)
        <p>Gaji Pokok: {{ $gaji->gaji_pokok }}</p>
        <p>Transportasi: {{ $gaji->transportasi }}</p>
        <p>Uang Makan: {{ $gaji->uang_makan }}</p>
        <p>Total Gaji: {{ $gaji->total_gaji }}</p>
        <p>Deduction: {{ $gaji->deduction }}</p>
    @else
        <p>Data gaji tidak ditemukan untuk bulan dan tahun ini.</p>
    @endif

    <form action="{{ route('slip-gaji.cetakPdf', ['karyawanId' => $karyawan->id, 'month' => $month, 'year' => $year]) }}" method="GET">
        <button type="submit">Cetak PDF</button>
    </form>
</body>
</html>
