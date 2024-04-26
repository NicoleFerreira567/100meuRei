<?php

use App\Http\Controllers\autopecacontroller;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\entrarcontroller;
use App\Http\Controllers\ferramentascontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\jardinagemcontroller;
use App\Http\Controllers\limpezacontroller;
use App\Http\Controllers\mateinfantiscontroller;
use App\Http\Controllers\moveiscontroller;
use App\Http\Controllers\papelariacontroller;
use App\Http\Controllers\PrecoController;
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
 Route::get('/limpeza', [limpezacontroller::class, 'index'])->name('limpeza');
 Route::get('/papelaria', [papelariacontroller::class,'index'])->name('papelaria');
 Route::get('/moveis', [moveiscontroller::class, 'index'])->name('moveis');
 Route::get('/materiaisinfantis', [mateinfantiscontroller::class, 'index'])->name('materiasinfantis');
 Route::get('/autopecas', [autopecacontroller::class, 'index'])->name('autopeças');
 Route::get('/jardinagem', [jardinagemcontroller::class, 'index'])->name('jardinagem');
 Route::get('/ferramentas', [ferramentascontroller::class, 'index'])->name('ferramentas');

/*Carrinho*/
 Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');

/* CONTROLE DE PREÇO*/
 Route::get('/preco/{tipo}', [PrecoController::class, 'ordenar'])->name('preco.ordenar');
