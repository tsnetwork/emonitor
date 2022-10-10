<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EMonitor\AegeaController;
use App\Http\Controllers\EMonitor\OcorrenceController;

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
    return view('Emonitor.index');
});

Route::get('/aegea', [AegeaController::class, 'index']);
Route::get('/ocorrences',[OcorrenceController::class,'index']);
Route::get('/ocorrences/{id}',[OcorrenceController::class,'credor'])->name('ocorrences.credor');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');