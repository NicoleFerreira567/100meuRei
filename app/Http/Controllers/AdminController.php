<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function administrativo()
    {
        $idFuncionario = session('id');

        if (!$idFuncionario) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        $funcionario = Funcionario::find($idFuncionario);

        if (!$funcionario) {
            abort(404, 'Funcionário não encontrado');
        }

        return view('dashboard.admin.index', compact('funcionario'));
    }

    public function indexFunc()
    {
        $idFuncionario = session('id');
        $funcionario = Funcionario::find($idFuncionario);
        $listaFunc = Funcionario::all();

        return view('dashboard.admin.funcionario.index', compact('funcionario', 'listaFunc'));
    }

    public function createFunc(Request $request)
    {
        $idFuncionario = session('id');
        $funcionario = Funcionario::find($idFuncionario);

        if (!$funcionario) {
            abort(404, 'Funcionário não encontrado');
        }
        
        return view('dashboard.admin.funcionario.create', compact('funcionario'));
    }

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
        ]);

        $funcionario = new Funcionario();
        $funcionario->fill($request->all());
        $funcionario->save();

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário cadastrado com sucesso');
    }

    public function editFunc($id)
    {    
        $funcionario = Funcionario::find($id);
        $funcionario = Funcionario::findOrFail($id);
        return view('dashboard.admin.funcionario.edit', compact('funcionario'));
    }

    public function updateFunc(Request $request, $id)
    {
        $request->validate([
            'nomeFuncionario' => 'required|string|max:100',
            'emailFuncionario' => 'required|string|max:100|email',
            'cargoFuncionario' => 'required|string|max:50',
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->fill($request->all());
        $funcionario->save();

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário atualizado com sucesso.');
    }

    public function desativarFunc($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->statusFuncionario = 'inativo';
        $funcionario->save();

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário desativado com sucesso.');
    }
}