<!DOCTYPE html>
<html>
    
<head>
    <title>Slip Gaji PDF</title>
    <style>
        body {
            font-family: "Poppins", "sans-serif";
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            width: 100%;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
    <div class="header" >
    <h1>CV Cahaya Tirani</h1>
</div>
</head>
<body>
    <div class="container">
        <div class="header" >
            <h2>Slip Gaji</h2>
            <p>Bulan: {{ \Carbon\Carbon::create()->month($month)->format('F') }} {{ $year }}</p>
        </div>
        <div class="content">
            <p>Nama: {{ $karyawan->nama }}</p>
            <p>Jabatan: {{ $karyawan->jabatan->nama_jabatan }}</p>
            <table class="table">
                <tr>
                    <th>Rincian</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>{{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Transportasi</td>
                    <td>{{ number_format($gaji->transportasi, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Uang Makan</td>
                    <td>{{ number_format($gaji->uang_makan, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total Gaji</td>
                    <td>{{ number_format($gaji->total_gaji, 0, ',', '.') }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Slip gaji ini dihasilkan oleh sistem.</p>
        </div>
    </div>
</body>
</html>
