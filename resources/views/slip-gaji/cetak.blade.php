<x-app-layout>

<div class="container">
    <h2>Slip Gaji</h2>
    @if($gaji)
        <p>Bulan: {{ \Carbon\Carbon::create()->month($month)->format('F') }} {{ $year }}</p>
        <p>Nama: {{ $karyawan->nama }}</p>
        <p>Jabatan: {{ $karyawan->jabatan->nama_jabatan }}</p>
        <p>Gaji Pokok: {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</p>
        <p>Transportasi: {{ number_format($gaji->transportasi, 0, ',', '.') }}</p>
        <p>Uang Makan: {{ number_format($gaji->uang_makan, 0, ',', '.') }}</p>
        <p>Total Gaji: {{ number_format($gaji->total_gaji, 0, ',', '.') }}</p>

        <a href="{{ route('slip.gaji.cetak.pdf', ['karyawan_id' => $karyawan->id, 'month' => $month, 'year' => $year]) }}" target="_blank">
            <button type="button">Cetak PDF</button>
        </a>
    @else
        <p>Tidak ada data gaji untuk karyawan ini pada bulan dan tahun yang dipilih.</p>
    @endif
</div>
</x-app-layout>
