<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente as ModelsCliente;
use App\Models\Usuario;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function index(){

        $idCliente = session('id');

        $cliente = ModelsCliente::find($idCliente);

        if (!$cliente){
            abort(404, 'Cliente não encontrado');
        }
        dd($cliente);
        
        //return view('dashboard.alunos.index', compact('aluno'));
    }

    public function login(Request $request){
        $credentials = $request->validade([
         'email' => 'required|email',
         'senha' => 'required',
        ]);

        $usuario = Usuario::where('email', $credentials['email'])->where('senha', $credentials['senha'])->first();

        if ($usuario && $usuario->tipo_usuario_type === 'cliente') {
            $cliente = $usuario->tipo_usuario()->first();

            if ($cliente) {
                return response() ->json([
                    'message' => 'Login bem sucedido!',
                    'usuario' => [
                          'id' => $usuario->idUsuario,
                          'nome' => $usuario->nomeUsuario,
                          'email' => $usuario->emailUsuario,
                          'tipo_usuario' => $usuario->tipo_usuario_type,
                          'dados_cliente' => [
                            'idCliente' => $usuario->idCliente,
                            'nome' => $usuario->nomeCliente,
                          ],
                        
                    ],
                ]);
            }
        }
        return response()->json( ['message' => 'Credenciais inválidas ou usuario não é aluno'], 401);
    }
}