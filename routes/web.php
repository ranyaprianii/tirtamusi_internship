<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApprentinceController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DailyActivityController;

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
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Attendence
Route::group(['controller' => AttendanceController::class, 'prefix' => 'attendance', 'as' => 'attendance.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});


// Daily Activity
Route::group(['controller' => DailyActivityController::class, 'prefix' => 'daily_activity', 'as' => 'daily_activity.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Division
Route::group(['controller' => DivisionController::class, 'prefix' => 'division', 'as' => 'division.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Unit
Route::group(['controller' => UnitController::class, 'prefix' => 'unit', 'as' => 'unit.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// User
Route::group(['controller' => UserController::class, 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Role
Route::group(['controller' => RoleController::class, 'prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

