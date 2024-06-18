<x-app-layout>
<div class="container">
    <h1>Laporan Gaji</h1>
    <form action="{{ route('datagaji.cetak') }}" method="GET">
        <div class="form-group">
            <label for="bulan">Masukkan Bulan:</label>
            <select name="bulan" id="bulan" class="form-control">
                <option value="">Pilih Bulan</option>
                @foreach(range(1, 12) as $month)
                    <option value="{{ $month }}" {{ request('bulan') == $month ? 'selected' : '' }}>
                        {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Masukkan Tahun:</label>
            <select name="tahun" id="tahun" class="form-control">
                <option value="">Pilih Tahun</option>
                @foreach(range(date('Y'), 2000) as $year)
                    <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cetak Laporan Gaji</button>
    </form>
</div>
</x-app-layout>