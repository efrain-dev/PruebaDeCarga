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
Route::get('/entrada', [\App\Http\Controllers\EntradaController::class,'index'])->name('entrada.index');
Route::get('/entrada/crear', [\App\Http\Controllers\EntradaController::class,'create'])->name('crear');
Route::post('/entrada/guardar', [\App\Http\Controllers\EntradaController::class,'store'])->name('guardar.entrada');
Route::post('/entrada/carga-entrada/{entrada}', [\App\Http\Controllers\EntradaController::class,'guardarCarga'])->name('guardar.carga-entrada');
Route::get('/entrada/ver-cargas/{id}', [\App\Http\Controllers\EntradaController::class,'verCarga'])->name('entrada.ver-carga');
