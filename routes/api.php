<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cliente/salvar', [ClienteController::class, 'salvar']);
Route::put('/cliente/editar/{id}', [ClienteController::class, 'editar']);
Route::get('/cliente/listar', [ClienteController::class, 'listar']);
Route::delete('/cliente/excluir/{id}', [ClienteController::class, 'excluir']);
Route::get('/cliente/{id}', [ClienteController::class, 'listarPeloId']);
