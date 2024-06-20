<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\PrecoController;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\AutLojaMiddle;
use App\Models\Cliente as ModelsCliente;
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
 Route::get('/moveis', [ProdutoController::class, 'moveis'])->name('moveis');
 Route::get('/limpeza', [ProdutoController::class, 'limpeza'])->name('limpeza');
Route::get('/papelaria', [ProdutoController::class, 'papelaria'])->name('papelaria');
Route::get('/materiaisinfantis', [ProdutoController::class, 'materiaisinfantis'])->name('materiaisinfantis');
Route::get('/jardinagem', [ProdutoController::class, 'jardinagem'])->name('jardinagem');
Route::get('/ferramentas', [ProdutoController::class, 'ferramentas'])->name('ferramentas');
Route::get('/autopecas', [ProdutoController::class, 'autopecas'])->name('autopecas');
 

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'autenticar'])->name('login');
//Esta rota é responsável pela autenticação.

Route::middleware(['autenticacao:clientes'])->group(function (){
    Route::get('/dashboard/alunos',[Cliente::class, 'index'])->name('dashboard.alunos');
});

Route::middleware(['autenticacao:admin'])->group(function (){
    Route::get('/dashboard/administrativo',[ AdministrativoController::class, 'index'])->name('dashboard.administrativo');
});

//cadastro
Route::get('/cadastro',[cadastroController::class, 'index'])->name('cadastro');

/* CONTROLE DE PREÇO*/
 Route::get('/preco/{tipo}', [PrecoController::class, 'ordenar'])->name('preco.ordenar');
