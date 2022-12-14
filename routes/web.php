<?php

use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKriteriaController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PeriodeController;
use App\Models\dataKriteria;
use App\Models\dataMahasiswa;
use App\Models\periode;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/data-kriteria', [DataKriteriaController::class, 'index']);
Route::get('/data-kriteria/create', [DataKriteriaController::class, 'create']);
Route::post('/data-kriteria/create', [DataKriteriaController::class, 'store']);
Route::get('/data-kriteria/edit/{id}', [DataKriteriaController::class, 'edit']);
Route::post('/data-kriteria/edit/{id}', [DataKriteriaController::class, 'update']);

Route::get('/data-mahasiswa', [DataMahasiswaController::class, 'index']);
Route::get('/data-mahasiswa/create', [DataMahasiswaController::class, 'create']);
Route::post('/data-mahasiswa/create', [DataMahasiswaController::class, 'store']);
Route::get('/data-mahasiswa/{id}', [DataMahasiswaController::class, 'prodi']);
Route::get('/data-mahasiswa/{prodi_id}/{id}', [DataMahasiswaController::class, 'edit']);
Route::post('/data-mahasiswa/{prodi_id}/{id}', [DataMahasiswaController::class, 'update']);
Route::post('/data-mahasiswa/{idProdi}/hapus/{id}', [DataMahasiswaController::class, 'destroy']);

Route::get('/periode', [PeriodeController::class, 'index']);
Route::post('/periode', [PeriodeController::class, 'store']);
Route::get('/periode/edit', [PeriodeController::class, 'edit']);
Route::get('/periode/edit/{periode}', [PeriodeController::class, 'edit']);
Route::post('/periode/edit/{periode}', [PeriodeController::class, 'update']);
Route::get('/periode/update', [PeriodeController::class, 'edit']);
Route::post('/periode/destroyed/{periode}', [PeriodeController::class, 'destroyed']);

Route::get('/perhitungan', [PerhitunganController::class, 'periodePerhitungan']);
Route::get('/perhitungan/{periode}', [PerhitunganController::class, 'index']);
Route::get('/perhitungan/{periode}/{prodi}', [PerhitunganController::class, 'prodi']);
