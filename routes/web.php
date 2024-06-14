<?php

use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanGajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\SlipGajiController;
use App\Http\Controllers\GajiKaryawanController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\ProfileController;


// Home Route
    Route::get('/', function () {
    return view('welcome');
    });

    Route::get('/dashboard', function () {
    return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

// Data User
    Route::get('/datauser', function () {
    return view('datauser');
    });

// Master Data Routes
    Route::middleware(['auth'])->group(function () {
    Route::resource('jabatan', JabatanController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('LaporanGaji', LaporanGajiController::class);
    Route::resource('absens', AbsenController::class);
    });

// Transactions

    Route::get('laporan/gaji', [LaporanGajiController::class, 'index'])->name('laporan.gaji');
    Route::get('laporan/gaji/cetak', [LaporanGajiController::class, 'cetak'])->name('laporan.gaji.cetak');

    Route::get('/absens/create', [AbsenController::class, 'create'])->name('absens.create');
    Route::post('/absens', [AbsenController::class, 'store'])->name('absens.store');
    Route::get('/absens', [AbsenController::class, 'index'])->name('absens.index');
    Route::get('/gaji-karyawan', [GajiKaryawanController::class, 'index'])->name('gaji-karyawan.index');
    Route::post('/gaji-karyawan/filter', [GajiKaryawanController::class, 'filter'])->name('gaji-karyawan.filter');
    Route::get('/gaji-karyawan/cetak', [GajiKaryawanController::class, 'cetak'])->name('gaji-karyawan.cetak');
    Route::get('/slip-gaji', [SlipGajiController::class, 'index'])->name('slip.gaji.index');
    Route::post('/slip-gaji/cetak', [SlipGajiController::class, 'cetak'])->name('slip.gaji.cetak');
    Route::get('slip-gaji/cetak-pdf/{karyawan_id}/{month}/{year}', [App\Http\Controllers\SlipGajiController::class, 'cetakPdf'])->name('slip.gaji.cetak.pdf');

    Route::middleware('auth')->group(function () {
        Route::get('/datauser', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/datauser', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/datauser', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });;

    Route::get('/utility/ubah-password', [UtilityController::class, 'showChangePasswordForm'])->name('utility.ubah-password');
    Route::post('/utility/ubah-password', [UtilityController::class, 'updatePassword'])->name('utility.update-password');
    Route::post('logout', [UtilityController::class, 'logout'])->name('logout');

    require __DIR__.'/auth.php';