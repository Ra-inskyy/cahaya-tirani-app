<!-- resources/views/slip-gaji/index.blade.php -->

<x-app-layout>
<div class="container">
    <h2>Slip Gaji Karyawan</h2>
    <form action="{{ route('slip.gaji.cetak') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="karyawan_id">Karyawan:</label>
            <select name="karyawan_id" id="karyawan_id" class="form-control">
                <option value="">Pilih Karyawan</option>
                @foreach($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="month">Bulan:</label>
            <select name="month" id="month" class="form-control">
                <option value="">Pilih Bulan</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ \Carbon\Carbon::create()->month($i)->format('F') }}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="year">Tahun:</label>
            <select name="year" id="year" class="form-control">
                <option value="">Pilih Tahun</option>
                @for($i = 2020; $i <= \Carbon\Carbon::now()->year; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cetak Slip Gaji</button>
    </form>
</div>
</x-app-layout>
