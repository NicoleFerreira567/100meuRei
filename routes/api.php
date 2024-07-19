<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [Cliente::class,'login']);


Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/moveis', [ProdutoController::class, 'moveis']);
Route::get('/produtos/limpeza', [ProdutoController::class, 'limpeza']);
Route::get('/produtos/autopecas', [ProdutoController::class, 'autopecas']);
Route::get('/produtos/ferramentas', [ProdutoController::class, 'ferramentas']);
Route::get('/produtos/jardinagem', [ProdutoController::class, 'jardinagem']);
Route::get('/produtos/papelaria', [ProdutoController::class, 'papelaria']);
Route::get('/produtos/materiaisinfantis', [ProdutoController::class, 'materiaisinfantis']);
