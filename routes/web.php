<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'listar']);
Route::get('/fornecedores', [FornecedoresController::class, 'listar']);