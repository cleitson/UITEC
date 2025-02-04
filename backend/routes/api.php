<?php

use App\Http\Controllers\TransacoesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('transacoes', [TransacoesController::class, 'index']);
Route::post('transacoes', [TransacoesController::class, 'create']);
Route::put('transacoes/{id}', [TransacoesController::class, 'update']);
Route::delete('transacoes/{id}', [TransacoesController::class, 'delete']);
