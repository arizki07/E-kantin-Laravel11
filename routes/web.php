<?php

use App\Http\Controllers\_product\KaryawanController;
use App\Http\Controllers\_Product\PenganturanController;
use App\Http\Controllers\_Product\QrcodeController;
use App\Http\Controllers\_Product\RekapController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Datatables\KaryawanList;
use Illuminate\Support\Facades\Route;

Route::resource('getKaryawan', KaryawanList::class);

Route::get('error', function () {
    return view('pages.error');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('authenticate', 'authenticate')->name('login.post');
    Route::get('dashboard', 'dashboard');
});

Route::controller(RekapController::class)->group(function () {
    Route::get('rekap', 'index');
});

Route::controller(KaryawanController::class)->group(function () {
    Route::get('karyawan', 'karyawan');
});

Route::controller(PenganturanController::class)->group(function () {
    Route::get('pengaturan', 'index');
});

Route::controller(QrcodeController::class)->group(function () {
    Route::get('qrcode', 'index');
});
