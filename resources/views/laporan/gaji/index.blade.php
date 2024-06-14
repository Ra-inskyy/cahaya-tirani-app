<x-app-layout>
<div class="container">
    <form action="{{ route('laporan.gaji.index') }}" method="GET">
        <div class="form-group">
            <label for="bulan">Pilih Bulan:</label>
            <select name="bulan" id="bulan" class="form-control">
                <option value="">-- Pilih Bulan --</option>
                @foreach(range(1, 12) as $month)
                    <option value="{{ $month }}" {{ request('bulan') == $month ? 'selected' : '' }}>
                        {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Pilih Tahun:</label>
            <select name="tahun" id="tahun" class="form-control">
                <option value="">-- Pilih Tahun --</option>
                @foreach(range(date('Y'), 2000) as $year)
                    <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <h2>Laporan Gaji</h2>
    <table class="table">
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
                <th>Deduction</th>
                <th>Total Gaji</th>
                
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
                    <td>{{ $g->deduction }}</td>
                    <td>{{ $g->total_gaji }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>