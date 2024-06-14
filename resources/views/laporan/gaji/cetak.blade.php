<!-- resources/views/slip-gaji/cetak.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cetak Slip Gaji</title>
</head>
<body>
    <h1>Slip Gaji</h1>
    <p>Nama: {{ $karyawan->nama }}</p>
    <p>Jabatan: {{ $karyawan->jabatan->nama_jabatan }}</p>
    <p>Gaji Pokok: {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</p>
    <p>Transportasi: {{ number_format($gaji->transportasi, 0, ',', '.') }}</p>
    <p>Uang Makan: {{ number_format($gaji->uang_makan, 0, ',', '.') }}</p>
    <p>Total Gaji: {{ number_format($gaji->total_gaji, 0, ',', '.') }}</p>

    <a href="{{ route('slip.gaji.cetak.pdf', ['karyawan_id' => $karyawan->id, 'month' => $month, 'year' => $year]) }}" target="_blank">
        <button type="button">Cetak PDF</button>
    </a>
</body>
</html>
