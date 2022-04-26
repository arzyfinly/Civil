<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PendaftaranPraktikumController,
    PraktikumController,
    InventarisController,
    ProfileController,
    ListOfAttendeesController,
    PracticalImplementationController,
    PracticumGroupController,
    DataMahasiswaController,
    PracticumPriceController,
    PracticeExamController
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
    Route::resource('daftarHadir',                  ListOfAttendeesController::class);
    Route::get('/daftarHadir',                      [App\Http\Controllers\ListOfAttendeesController::class, 'index'])->name('listOfAttendees');
    Route::resource('pelaksanaan',                  PracticalImplementationController::class);
    Route::get('/pelaksanaan',                      [App\Http\Controllers\PracticalImplementationController::class, 'index'])->name('practicalImplementation');
    Route::resource('inventaris',                   InventarisController::class);
    Route::get('/inventaris',                       [App\Http\Controllers\InventarisController::class, 'index'])->name('inventaris');
    Route::resource('profile',                      ProfileController::class);
    Route::get('/profile',                          [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::resource('kelompok',                     PracticumGroupController::class);
    Route::get('/kelompok',                         [App\Http\Controllers\PracticumGroupController::class, 'index'])->name('practicum-group');
    Route::resource('dataMahasiswa',                CollegeStudentController::class);
    Route::get('/dataMahasisa',                     [App\Http\Controllers\CollegeStudentController::class, 'index'])->name('student-data');
    Route::resource('hargaPraktikum',               PracticumPriceController::class);
    Route::get('/hargaPraktikum',                   [App\Http\Controllers\PracticumPriceController::class, 'index'])->name('practicumPrice');
    Route::delete('/hargaPracticum/{id}',             [App\Http\Controllers\PracticumPriceController::class, 'destroy']);
    Route::resource('practiceExam',                 PracticeExamController::class);
    Route::get('/practiceExam',                     [App\Http\Controllers\PracticeExamController::class, 'index'])->name('practiceExam');
});