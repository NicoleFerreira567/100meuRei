<?php

use App\Http\Controllers\PrecoController;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\entrarcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
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


 Route::get('/', [homeController::class, 'index'])->name('home');
 Route::get('/entrar',[entrarcontroller::class,'index'])->name('entrar');
 Route::get('/cadastro',[cadastroController::class, 'index'])->name('cadastro');
 Route::get('/moveis', [ProdutoController::class, 'moveis'])->name('moveis');
 Route::get('/limpeza', [ProdutoController::class, 'limpeza'])->name('limpeza');
Route::get('/papelaria', [ProdutoController::class, 'papelaria'])->name('papelaria');
Route::get('/materiaisinfantis', [ProdutoController::class, 'materiaisinfantis'])->name('materiaisinfantis');
Route::get('/jardinagem', [ProdutoController::class, 'jardinagem'])->name('jardinagem');
Route::get('/ferramentas', [ProdutoController::class, 'ferramentas'])->name('ferramentas');
Route::get('/autopecas', [ProdutoController::class, 'autopecas'])->name('autopecas');

/*Carrinho*/
 Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');

/* CONTROLE DE PREÇO*/
 Route::get('/preco/{tipo}', [PrecoController::class, 'ordenar'])->name('preco.ordenar');
