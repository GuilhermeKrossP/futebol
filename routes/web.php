<?php

use App\Http\Controllers\FutebolController;
use App\Http\Controllers\TreinadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//RESPONSÁVEL SOMENTE PELAS URL - PARA REALIZAR A TROCA DE PAGINA NO SERVIDOR

Route::get('/', [FutebolController::class, 'index']);
Route::get('times/create', [FutebolController::class, 'create']);
Route::post('times', [FutebolController::class, 'store']);
Route::get('times/{id}/edit', [FutebolController::class, 'edit']);
Route::put('times/{id}', [FutebolController::class, 'update']);
Route::delete('times/{id}', [FutebolController::class, 'destroy']);

Route::get('treinador', [TreinadorController::class, 'index']);
Route::get('treinador/create', [TreinadorController::class, 'create']);
Route::post('treinador', [TreinadorController::class, 'store']);
Route::get('treinador/{id}/edit', [TreinadorController::class, 'edit']);
Route::put('treinador/{id}', [TreinadorController::class, 'update']);
Route::delete('treinador/{id}', [TreinadorController::class, 'destroy']);