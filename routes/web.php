<?php

use App\Http\Controllers\BahanController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\PerolehanController;
use App\Http\Controllers\ProfailController;
use App\Http\Controllers\ProsesApdmController;
use App\Http\Controllers\ProsesTahunanController;
use App\Http\Controllers\PuncaController;
use App\Http\Controllers\SenaraiUtamaJudulController;
use App\Http\Controllers\SubjekController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;


Route::redirect('/', '/utama');

Route::get('/utama', UtamaController::class);

Route::singleton('/profail', ProfailController::class);

Route::resource('/pengguna', PenggunaController::class);

Route::singleton('/institusi', InstitusiController::class);

Route::resource('/cuti', CutiController::class);

Route::singleton('/polisi', InstitusiController::class);

Route::get('/proses_tahunan', ProsesTahunanController::class);

Route::get('/proses_apdm', ProsesApdmController::class);

Route::resource('/jenis', JenisController::class);

Route::resource('/bahasa', BahasaController::class);

Route::resource('/subjek', SubjekController::class);

Route::resource('/lokasi', LokasiController::class);

Route::resource('/kategori', KategoriController::class);

Route::resource('/punca', PuncaController::class);

Route::resource('/bidang', BidangController::class);

Route::resource('/senarai_utama_judul', SenaraiUtamaJudulController::class);

Route::resource('/judul', JudulController::class);

Route::resource('/bahan', BahanController::class);

Route::resource('/perolehan', PerolehanController::class);