<!-- resources/views/utility/ubah-password.blade.php -->
<x-app-layout>
<div class="container">
    <h1>Ubah Password</h1>
    <form action="{{ route('utility.update-password') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="current_password">Password Saat Ini</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="new_password">Password Baru</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="new_password_confirmation">Konfirmasi Password Baru</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Password</button>
    </form>
</div>
</x-app-layout>
