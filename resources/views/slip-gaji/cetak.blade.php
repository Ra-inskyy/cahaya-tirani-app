<x-app-layout>
<style>
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .info {
        font-size: 16px;
        line-height: 1.5;
        color: #555;
    }

    .table-container {
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .form-container {
        text-align: center;
        margin-top: 20px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <h1>Slip Gaji</h1>
    <p class="info">Karyawan: {{ $karyawan->nama }}</p>
    <p class="info">Bulan: {{ $month }}</p>
    <p class="info">Tahun: {{ $year }}</p>
    
    @if($gaji)
    <div class="table-container">
        <table>
            <tr>
                <th>Jenis</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>{{ $gaji->gaji_pokok }}</td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td>{{ $gaji->transportasi }}</td>
            </tr>
            <tr>
                <td>Uang Makan</td>
                <td>{{ $gaji->uang_makan }}</td>
            </tr>
            <tr>
                <td>Total Gaji</td>
                <td>{{ $gaji->total_gaji }}</td>
            </tr>
            <tr>
                <td>Deduction</td>
                <td>{{ $gaji->deduction }}</td>
            </tr>
        </table>
    </div>
    @else
        <p class="info">Data gaji tidak ditemukan untuk bulan dan tahun ini.</p>
    @endif

    <div class="form-container">
        <form action="{{ route('slip-gaji.cetakPdf', ['karyawanId' => $karyawan->id, 'month' => $month, 'year' => $year]) }}" method="GET">
            <button type="submit">Cetak PDF</button>
        </form>
    </div>
</div>
</x-app-layout>
