<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente as ModelsCliente;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function index(){
        $idCliente = session('id');
        $cliente = ModelsCliente::find($idCliente);

        if (!$cliente){
            abort(404, 'Cliente não encontrado');
        }

        //return view('dashboard.alunos.index', compact('aluno'));
    }
}