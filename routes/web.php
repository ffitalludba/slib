<?php

use App\Http\Controllers\AhliController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelayakanController;
use App\Http\Controllers\KemasKiniTahunanController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\KumpulanController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\OlehanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PuncaController;
use App\Http\Controllers\SirkulasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;


Route::view('/', 'indeks');

Route::get('log_masuk', [LogController::class, 'masuk']);

Route::get('log_keluar', [LogController::class, 'keluar']);

Route::singleton('profil', ProfilController::class);

Route::prefix('pentadbir')->group(function () {

    Route::get('dashboard_pentadbir', null);

    Route::resource('pengguna', PenggunaController::class);

    Route::singleton('institusi', InstitusiController::class);

    Route::resource('cuti', CutiController::class);

    Route::singleton('polisi', InstitusiController::class);

    Route::get('kemas_kini_tahunan', [KemasKiniTahunanController::class, 'show']);

    Route::resource('jenis', JenisController::class);

    Route::resource('bahasa', BahasaController::class);

    Route::resource('klasifikasi', KlasifikasiController::class);

    Route::resource('lokasi', LokasiController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('punca', PuncaController::class);

    Route::resource('bidang', BidangController::class);

    Route::resource('katalog', KatalogController::class);

    Route::resource('judul', JudulController::class);

    Route::resource('bahan', BahanController::class);

    Route::resource('olehan', OlehanController::class);

    Route::resource('kumpulan', KumpulanController::class);

    Route::resource('ahli', AhliController::class);

    Route::resource('kelas', KelasController::class);

    Route::resource('kelayakan', KelayakanController::class);

    Route::get('pinjaman', [SirkulasiController::class, 'pinjaman']);

    Route::get('pulangan', [SirkulasiController::class, 'pulangan']);

    Route::get('bayaran_denda', [SirkulasiController::class, 'bayaranDenda']);

    Route::get('cetakan_peringatan', null);

    Route::get('cetakan_watikah', null);

    Route::get('cetakan_penghargaan', null);

    Route::get('cetakan_kod_bar', null);

    Route::get('cetakan_tulang_buku', null);

    Route::get('laporan', null);

    Route::get('analisis', null);

    Route::get('butiran', null);

});

Route::prefix('ahli')->group(function () {

    Route::get('dashboard_ahli', null);

    Route::get('pinjaman_semasa', null);

    Route::get('pinjaman_lampau', null);

});

