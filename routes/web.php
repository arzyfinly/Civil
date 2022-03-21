<?php

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

Route::get('/', function () {
    return view('mahasiswa.index');
})->name('/');

Auth::routes();

Route::get('/home',                             [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran/praktikum',            [App\Http\Controllers\PendaftaranPraktikumController::class, 'index'])->name('pendaftaran-praktikum');
Route::get('/praktikum',                        [App\Http\Controllers\PraktikumController::class, 'index'])->name('praktikum');
Route::get('/mahasiswa/daftar-hadir/',          [App\Http\Controllers\DafdirController::class, 'index'])->name('daftar-hadir');
Route::get('/mahasiswa/pelaksanaan-praktikum/', [App\Http\Controllers\PelaksanaanPrakController::class, 'index'])->name('pelaksanaan');
Route::get('/mahasiswa/pelaksanaan-ujian/',     [App\Http\Controllers\PelaksanaanUjianController::class, 'index'])->name('ujian');
Route::get('/mahasiswa/profile/',               [App\Http\Controllers\ProfileController::class, 'index'])->name('data-pribadi');
