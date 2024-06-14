<x-app-layout>
<div class="card">
    <div class="card-header">Data Karyawan</div>
    <div class="card-body">
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jenis_kelamin }}</td>
                        <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                        <td>{{ $karyawan->tanggal_masuk }}</td>
                        <td>{{ $karyawan->status }}</td>
                        <td>
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
