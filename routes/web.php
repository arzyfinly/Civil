<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PendaftaranPraktikumController,
    PracticumAttendanceController,
    PraktikumController,
    InventarisController,
    ProfileController,
    ListOfAttendeesController,
    PracticalImplementationController,
    PracticumGroupController,
    DataMahasiswaController,
    PracticumPriceController,
    PracticeExamController,
    PracticumTimeController,
    ToolRentalController
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
    Route::get('/praktikum/get/{id?}',              [App\Http\Controllers\PraktikumController::class, 'getID']);
    Route::get('/kelompok/get/{id?}',               [App\Http\Controllers\PracticumGroupController::class, 'getID']);
    Route::resource('praktikum',                    PraktikumController::class);
    Route::resource('daftarHadir',                  ListOfAttendeesController::class);
    Route::resource('pelaksanaan',                  PracticumAttendanceController::class);
    Route::resource('inventaris',                   InventarisController::class);
    Route::resource('sewaAlat',                     ToolRentalController::class);
    Route::resource('profile',                      ProfileController::class);
    Route::resource('kelompok',                     PracticumGroupController::class);
    Route::resource('hargaPraktikum',               PracticumPriceController::class);
    Route::resource('practiceExam',                 PracticeExamController::class);
    Route::resource('practicumTime',                PracticumTimeController::class);
    Route::get('/practicumTimeExport',              [App\Http\Controllers\PracticumTimeController::class, 'export_excel'])->name('export_excel');
    Route::get('/practiceExam',                     [App\Http\Controllers\PracticeExamController::class, 'index'])->name('practiceExam');
    Route::get('/kelompok/get/praktikum/{id?}',     [App\Http\Controllers\PracticumGroupController::class, 'GetCollegeStudent'])->name('practicum-group-get-by-id');
    Route::get('/kelompok/get/kelas/{id?}',         [App\Http\Controllers\PracticumGroupController::class, 'GetClass'])->name('class-get-by-id');
    Route::get('/profile',                          [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/daftarHadir',                      [App\Http\Controllers\ListOfAttendeesController::class, 'index'])->name('listOfAttendees');
});
