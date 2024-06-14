<x-app-layout>
<div class="card">
    <div class="card-header">Data Jabatan</div>
    <div class="card-body">
        <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">Tambah Jabatan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Transportasi</th>
                    <th>Uang Makan</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jabatans as $jabatan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jabatan->nama_jabatan }}</td>
                        <td>{{ $jabatan->gaji_pokok }}</td>
                        <td>{{ $jabatan->transportasi }}</td>
                        <td>{{ $jabatan->uang_makan }}</td>
                        <td>{{ $jabatan->gaji_pokok + $jabatan->transportasi + $jabatan->uang_makan }}</td>
                        <td>
                            <a href="{{ route('jabatan.edit', $jabatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST" style="display:inline-block;">
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