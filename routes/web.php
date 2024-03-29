<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApprentinceController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\InternshipFileController;
use App\Http\Controllers\InternshipScoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tatib', [App\Http\Controllers\HomeController::class, 'tatib'])->name('tatib');



// Apprentince
Route::group(['controller' => ApprentinceController::class, 'prefix' => 'apprentince', 'as' => 'apprentince.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    Route::get('/datatable_verification', 'datatable_verification')->name('datatable_verification');

    /* Store & Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    Route::put('/accept/{id}', 'accept')->name('accept');
    Route::put('/reject/{id}', 'reject')->name('reject');

    /* Views */
    Route::get('/', 'index')->name('index');
    Route::get('/verification', 'index_verification')->name('index_verification');
    Route::get('/create', 'create')->name('create');
    Route::get('/create_accept/{id}', 'create_accept')->name('create_accept');
    Route::get('/create_reject/{id}', 'create_reject')->name('create_reject');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
});

// Attendence
Route::group(['controller' => AttendanceController::class, 'prefix' => 'attendance', 'as' => 'attendance.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');
    Route::get('/datatable_manager', 'datatable_manager')->name('datatable_manager');

    /* Store & Update */
    Route::post('/store_present_in', 'store_present_in')->name('store_present_in');
    Route::put('/store_present_out', 'store_present_out')->name('store_present_out');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* Views */
    Route::get('/', 'index')->name('index');
    Route::get('/create_present', 'create_present')->name('create_present');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
});


// Daily Activity
Route::group(['controller' => DailyActivityController::class, 'prefix' => 'daily_activity', 'as' => 'daily_activity.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
});

// Division
Route::group(['controller' => DivisionController::class, 'prefix' => 'division', 'as' => 'division.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
});

// Internship File
Route::group(['controller' => InternshipFileController::class, 'prefix' => 'internship_file', 'as' => 'internship_file.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/datatable_student', 'datatable_student')->name('datatable_student');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::put('/update_verification/{id}', 'update_verification')->name('update_verification');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/create_verification/{id}', 'create_verification')->name('create_verification');
    Route::get('/edit/{id}', 'edit')->name('edit');
});

// Internship Score
Route::group(['controller' => InternshipScoreController::class, 'prefix' => 'internship_score', 'as' => 'internship_score.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_pdf', 'report_pdf')->name('report_pdf');
});


// Unit
Route::group(['controller' => UnitController::class, 'prefix' => 'unit', 'as' => 'unit.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
});

// User
Route::group(['controller' => UserController::class, 'prefix' => 'user', 'as' => 'user.'], function () {

    /* Data Table */
    Route::get('/datatable', 'datatable')->name('datatable');

    /* Store dan Update */
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');

    /* View */
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
});
