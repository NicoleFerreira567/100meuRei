<?php

use App\Http\Controllers\AdminController;
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
use Spatie\FlareClient\Http\Client;

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
 Route::get('/produtos', [ProdutoController::class, 'index']);
 Route::get('/produtos/moveis', [ProdutoController::class, 'moveis']);
 Route::get('/produtos/limpeza', [ProdutoController::class, 'limpeza']);
 Route::get('/produtos/autopecas', [ProdutoController::class, 'autopecas']);
 Route::get('/produtos/ferramentas', [ProdutoController::class, 'ferramentas']);
 Route::get('/produtos/jardinagem', [ProdutoController::class, 'jardinagem']);
 Route::get('/produtos/papelaria', [ProdutoController::class, 'papelaria']);
 Route::get('/produtos/materiaisinfantis', [ProdutoController::class, 'materiaisinfantis']);
 

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'autenticar'])->name('login');
//Esta rota é responsável pela autenticação.



Route::middleware(['autenticacao:admin'])->group(function (){
    Route::get('/dashboard/admin', [AdminController::class, 'administrativo'])->name('dashboard.admin.index');
    Route::get('/dashboard/admin/funcionario', [AdminController::class, 'indexFunc'])->name('admin.func.index');
    Route::get('/dashboard/administrativo/funcionario/create', [AdminController::class, 'createfuncionario'])->name('admin.func.create');
    Route::post('/dashboard/administrativo/funcionario', [AdminController::class, 'cadfuncionario'])->name('admin.func.cad');
    Route::get('/dashboard/administrativo/funcionario/{id}/edit', [AdminController::class, 'editfuncionario'])->name('dashboard.admin.func.edit');
    Route::put('/dashboard/administrativo/funcionario/{id}', [AdminController::class, 'updatefuncionario'])->name('dashboard.admin.func.update');
    Route::put('/dashboard/administrativo/funcionario/{id}/desativar', [AdminController::class, 'desativarfuncinario'])->name('dashboard.admin.func.desativar');
});


//SAIR
Route::get('/sair', function(){
    session()->flush();
    return redirect('/');

})->name('sair');


//cadastro
Route::get('/cadastro',[cadastroController::class, 'index'])->name('cadastro');

/* CONTROLE DE PREÇO*/
 Route::get('/preco/{tipo}', [PrecoController::class, 'ordenar'])->name('preco.ordenar');


