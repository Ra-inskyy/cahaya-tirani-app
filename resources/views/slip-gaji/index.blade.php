<x-app-layout>
<div class="container">
    <h2>Slip Gaji Karyawan</h2>
    <form action="{{ route('slip-gaji.cetak') }}" method="GET">
        @csrf
        <div class="form-group">
            <table>
            <label for="karyawan_id">Karyawan:</label>
            <select name="karyawan_id" id="karyawan_id">
                @foreach($karyawans as $karyawan)
                <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
        <label for="month">Bulan:</label>
        <select name="month" id="month">
            @for($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <div class="form-group">
        <label for="year">Tahun:</label>
        <select name="year" id="year">
            @for($i = 2020; $i <= date('Y'); $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        </div>
        <button type="submit">Cetak Slip Gaji</button>
    </form>
</div>
</div>
</x-app-layout>