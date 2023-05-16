<?php

use App\Models\agendamentos;
use App\Http\Controllers\AgendamentosController;
use Illuminate\Support\Facades\Route;

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


Route::get('/consultar', [AgendamentosController::class, 'consultar']);

Route::get('/editar/{id}', [AgendamentosController::class, 'edit']);

Route::get('/', function () {
    return view('index');
});

Route::post('/client', [AgendamentosController::class, 'store']);

Route::delete('/client/{id}', [AgendamentosController::class, 'destroy']);

Route::put('/atualizar/{id}', [AgendamentoController::class, 'update']);