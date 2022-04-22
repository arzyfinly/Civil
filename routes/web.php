<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PendaftaranPraktikumController,
    PraktikumController,
    InventarisController,
};

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
    return redirect('/home');
})->name('/');


Auth::routes();

Route::group(['middleware' => ['auth']], function(){ 
    Route::get('/home',                             [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('praktikum',                    PraktikumController::class);
    Route::get('/praktikum',                        [App\Http\Controllers\PraktikumController::class, 'index'])->name('praktikum');
    Route::get('/praktikum/pendaftaran/create',     [App\Http\Controllers\PraktikumController::class, 'pendaftaranCreate'])->name('praktikum.pendaftaran.create');
    Route::get('/praktikum/{$id}/edit',             [App\Http\Controllers\PraktikumController::class, 'pendaftaranEdit'])->name('pendaftaran.edit');
    Route::get('/praktikum/daftarHadir',            [App\Http\Controllers\DafdirController::class, 'index'])->name('daftarHadir');
    Route::get('profile',                           [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::resource('inventaris',                   InventarisController::class);
    Route::get('/inventaris',                       [App\Http\Controllers\InventarisController::class, 'index'])->name('inventaris');
    });
