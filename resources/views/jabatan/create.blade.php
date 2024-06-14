<x-app-layout>
    <div class="card">
    <div class="card-header">Tambah Jabatan</div>
    <div class="card-body">
        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Jabatan</label>
                <input type="text" name="nama_jabatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Gaji Pokok</label>
                <input type="number" name="gaji_pokok" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Transportasi</label>
                <input type="number" name="transportasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Uang Makan</label>
                <input type="number" name="uang_makan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
</x-app-layout>