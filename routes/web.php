<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PengajuanController;

use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/form', [EventController::class, 'create']);
Route::post('/event/store', [EventController::class, 'store']);
Route::get('/event/edit/{id}', [EventController::class, 'edit']);
Route::put('/event/{id}', [EventController::class, 'update']);
Route::delete('/event/{id}', [EventController::class, 'destroy']);

Route::get('/pengajuan', [PengajuanController::class, 'index']);
Route::get('/pengajuan/form', [PengajuanController::class, 'create']);
Route::post('/pengajuan/store', [PengajuanController::class, 'store']);
Route::get('/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
Route::put('/pengajuan/{id}', [PengajuanController::class, 'update']);
Route::delete('/pengajuan/{id}', [PengajuanController::class, 'destroy']);
