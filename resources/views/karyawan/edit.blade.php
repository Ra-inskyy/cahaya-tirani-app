<x-app-layout>
<div class="card">
    <h1>Edit Karyawan</h1>
    <form method="POST" action="{{ route('karyawan.update', $karyawan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $karyawan->nik }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan_id">Jabatan</label>
            <select class="form-control" id="jabatan_id" name="jabatan_id" required>
                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}" {{ $karyawan->jabatan_id == $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $karyawan->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</x-app-layout>