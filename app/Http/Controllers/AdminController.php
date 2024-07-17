<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function administrativo()
    {
        $idFuncionario = session('id');

        // Verificando se há um ID de funcionário na sessão
        if (!$idFuncionario) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        // Buscando o funcionário pelo ID no banco de dados
        $funcionario = Funcionario::find($idFuncionario);

        // Verificando se o funcionário foi encontrado
        if (!$funcionario) {
            // Se o funcionário não for encontrado, redireciona para uma página de erro
            abort(404, 'Funcionário não encontrado');
        }

        // Passando o objeto $funcionario para a view
        return view('dashboard.admin.index', compact('funcionario'));
    }
}