<x-app-layout>
<div class="container">
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" name="nik" id="nik" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan_id">Jabatan:</label>
            <select name="jabatan_id" id="jabatan_id" class="form-control" required>
                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
    </form>
</div>
</x-app-layout>