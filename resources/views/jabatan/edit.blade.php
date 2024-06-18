<x-app-layout>
<div class="card">
    <div class="card-header">Edit Jabatan</div>
    <div class="card-body">
        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Jabatan</label>
                <input type="text" name="nama_jabatan" class="form-control" value="{{ $jabatan->nama_jabatan }}" required>
            </div>
            <div class="form-group">
                <label>Gaji Pokok</label>
                <input type="number" name="gaji_pokok" class="form-control" value="{{ $jabatan->gaji_pokok }}" required>
            </div>
            <div class="form-group">
                <label>Transportasi</label>
                <input type="number" name="transportasi" class="form-control" value="{{ $jabatan->transportasi }}" required>
            </div>
            <div class="form-group">
                <label>Uang Makan</label>
                <input type="number" name="uang_makan" class="form-control" value="{{ $jabatan->uang_makan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</x-app-layout>