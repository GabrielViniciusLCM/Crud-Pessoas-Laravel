<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;
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


Route::get('/inicio', [PessoasController::class, 'inicio'])->name('pessoas.inicio');
Route::get('/pessoas', [PessoasController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/criar', [PessoasController::class, 'criar'])->name('pessoas.criar');
Route::post('/pessoas', [PessoasController::class, 'criarpost'])->name('pessoas.criarpost');
Route::get('/pessoas/{pessoas}/editar', [PessoasController::class, 'editar'])->name('pessoas.editar');
Route::put('/pessoas/{pessoas}/atualizar', [PessoasController::class, 'atualizar'])->name('pessoas.atualizar');
Route::delete('/pessoas/{pessoas}/excluir', [PessoasController::class, 'excluir'])->name('pessoas.excluir');

