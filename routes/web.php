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
    PracticeExamController,
    CollegeStudentController,
    PracticumTimeController
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
    Route::get('/praktikum/get/{id?}',              [App\Http\Controllers\PraktikumController::class, 'getID'])->name('getID');
    Route::resource('praktikum',                    PraktikumController::class);
    Route::resource('daftarHadir',                  ListOfAttendeesController::class);
    Route::resource('pelaksanaan',                  PracticalImplementationController::class);
    Route::resource('inventaris',                   InventarisController::class);
    Route::resource('profile',                      ProfileController::class);
    Route::resource('kelompok',                     PracticumGroupController::class);
    Route::resource('dataMahasiswa',                CollegeStudentController::class);
    Route::resource('hargaPraktikum',               PracticumPriceController::class);
    Route::resource('practiceExam',                 PracticeExamController::class);
    Route::resource('practicumTime',                PracticumTimeController::class);
    Route::get('/practiceExam',                     [App\Http\Controllers\PracticeExamController::class, 'index'])->name('practiceExam');
    Route::get('/dataMahasisa',                     [App\Http\Controllers\CollegeStudentController::class, 'index'])->name('student-data');
    Route::get('/kelompok',                         [App\Http\Controllers\PracticumGroupController::class, 'index'])->name('practicum-group');
    Route::get('/kelompok/get/praktikum',           [App\Http\Controllers\PracticumGroupController::class, 'GetCollegeStudent'])->name('practicum-group-get-by-id');
    Route::get('/profile',                          [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/pelaksanaan',                      [App\Http\Controllers\PracticalImplementationController::class, 'index'])->name('practicalImplementation');
    Route::get('/inventaris',                       [App\Http\Controllers\InventarisController::class, 'index'])->name('inventaris');
    Route::get('/daftarHadir',                      [App\Http\Controllers\ListOfAttendeesController::class, 'index'])->name('listOfAttendees');
});
