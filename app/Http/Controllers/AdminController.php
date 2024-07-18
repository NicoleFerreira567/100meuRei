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


    

    // MOSTRAR OS FUNCIONARIOS ATIVOS
    public function indexFunc()
    {
        $idFuncionario = session('id');

        $funcionario = Funcionario::find($idFuncionario);

        $listaFunc = Funcionario::all();

        //dd($funcionario);

        return view('dashboard.admin.funcionario.index', compact('funcionario', 'listaFunc'));
    }


    // CRIAR FUNCIONARIO NOVO
    public function createFunc(Request $request)
    {
        $idFuncionario = session('id');

        $funcionario = Funcionario::find($idFuncionario);

        if (!$funcionario) {
            abort(404, 'Funcionario nao encontrado');
        }
        return view('dashboard.admin.funcionario.create', compact('funcionario'));

    }

    // CADASTRAR FUNCIONARIO NOVO
    public function cadFunc(Request $request)
    {


        $request->validate([
            'nomeFuncionario' => 'required|string|max:100',
            'emailFuncionario' => 'required|string|max:100',
            'dataNascFuncionario' => 'required|date',
            'telefoneFuncionario' => 'required|string|max:20',
            'enderecoFuncionario' => 'required|string|max:100',
            'cidadeFuncionario' => 'required|string|max:100',
            'estadoFuncionario' => 'required|string|max:100',
            'cepFuncionario' => 'required|string|max:10',
            'dataContratoFuncionario' => 'required|date',
            'cargoFuncionario' => 'required|string|max:50',
            'salarioFuncionario' => 'required|string|max:100',
            'tipoFuncionario' => 'required|string|max:100',
            'statusFuncionario' => 'required|string|max:20',
            'criadoEm' => 'required|date',
            'atualizadoEm' => 'required|date',
        ]);

        $funcionario = new Funcionario();

        $funcionario->nomeFuncionario = $request->input('nomeFuncionario');
        $funcionario->emailFuncionario = $request->input('emailFuncionario');
        $funcionario->dataNascFuncionario = $request->input('dataNascFuncionario');
        $funcionario->telefoneFuncionario = $request->input('telefoneFuncionario');
        $funcionario->enderecoFuncionario = $request->input('enderecoFuncionario');
        $funcionario->cidadeFuncionario = $request->input('cidadeFuncionario');
        $funcionario->estadoFuncionario = $request->input('estadoFuncionario');
        $funcionario->cepFuncionario = $request->input('cepFuncionario');
        $funcionario->dataContratoFuncionario = $request->input('dataContratoFuncionario');
        $funcionario->cargoFuncionario = $request->input('cargoFuncionario');
        $funcionario->salarioFuncionario = $request->input('salarioFuncionario');
        $funcionario->tipoFuncionario = $request->input('tipoFuncionario');
        $funcionario->statusFuncionario = $request->input('statusFuncionario');
        $funcionario->criadoEm = $request->input('criadoEm');
        $funcionario->atualizadoEm = $request->input('atualizadoEm');

        $funcionario->save();

        return redirect()->route('dashboard.admin.funcionarios.index')->with('sucess', 'Aluno cadrastado com sucesso');
    }


    // EDITAR/ATUALIZAR FUNCIONARIO
    public function editFunc($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('dashboard.admin.funcionario.edit', compact('funcionario'));
    }

    public function updateFunc(Request $request, $id)
    {
        $request->validate([
            'nomeFuncionario' => 'required',
            'emailFuncionario' => 'required|email',
            'cargoFuncionario' => 'required',
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->nomeFuncionario = $request->input('nomeFuncionario');
        $funcionario->emailFuncionario = $request->input('emailFuncionario');
        $funcionario->cargoFuncionario = $request->input('cargoFuncionario');
        $funcionario->save();

        return redirect()->route('dashboard.admin.funcionarios.index')->with('success', 'Funcionário atualizado com sucesso.');
    }


    // DESATIVAR FUNCIONARIO
    public function desativarFunc($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->statusFuncionario = 'inativo'; // Define o status como 'inativo' para desativar o funcionário
        $funcionario->save();

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário desativado com sucesso.');
    }
}