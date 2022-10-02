<?php

use App\Http\Controllers\backend\v1\DashboardController;
use App\Http\Controllers\backend\v1\IkuController;
use App\Http\Controllers\backend\v1\KegiatanController;
use App\Http\Controllers\backend\v1\KegiatanIndikatorController;
use App\Http\Controllers\backend\v1\LaporanController;
use App\Http\Controllers\backend\v1\MisiController;
use App\Http\Controllers\backend\v1\ProgramController;
use App\Http\Controllers\backend\v1\ProgramIndikatorController;
use App\Http\Controllers\backend\v1\RenaksiController;
use App\Http\Controllers\backend\v1\SasaranRenstraController;
use App\Http\Controllers\backend\v1\SasaranRpjmdController;
use App\Http\Controllers\backend\v1\SubKegiatanController;
use App\Http\Controllers\backend\v1\SubKegiatanIndikatorController;
use App\Http\Controllers\backend\v1\TujuanRenstraController;
use App\Http\Controllers\backend\v1\TujuanRpjmdController;
use App\Http\Controllers\backend\v1\VisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');

    Route::resource('visi', VisiController::class);
    Route::resource('misi', MisiController::class);

    Route::resource('tujuan', TujuanRpjmdController::class);
    Route::resource('sasaran', SasaranRpjmdController::class);

    Route::resource('renstra', TujuanRenstraController::class);
    Route::resource('renstra-sasaran', SasaranRenstraController::class);

    Route::resource('renja', ProgramController::class);
    Route::resource('program-indikator', ProgramIndikatorController::class);

    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('kegiatan-indikator', KegiatanIndikatorController::class);

    Route::resource('sub-kegiatan', SubKegiatanController::class);
    Route::resource('sub-kegiatan-indikator', SubKegiatanIndikatorController::class);
    
    
    Route::resource('iku', IkuController::class);
    Route::resource('renaksi', RenaksiController::class);    

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

});
