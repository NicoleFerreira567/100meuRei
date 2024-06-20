<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use App\Models\Usuario;
use App\Models\Cliente;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }
     public function autenticar(Request $request) {


        $regras = [
           'email'         => 'required|email',
            'password'      => 'required'
        ];

       $msg = [
          'email.required'    => 'O campo de e-mail é obrigatório.',
           'email.email'       => 'O e-mail informado é inválido.',
           'password.required' => 'A senha é obrigatória.'
        ];

        $request->validate($regras, $msg);

        print_r($request->all());

        $email = $request->get('email');
        $senha = $request->get('password');

     
       
        $usuario = Usuario::where('emailUsuario', $email)->first();

        if (!$usuario) {
        return back()->withErrors(['email' => 'O email informado não está cadastrado']);
    }
     if ($usuario->senhaUsuario != $senha) {
         return back()->withErrors(['password' => 'Senha incorreta.']);
     }

     $tipoUsuario = $usuario->tipo_usuario;

     // Verifica se o tipo de usuário é uma instância de Cliente
     if ($tipoUsuario instanceof Cliente) {
         session([
             'id'           => $tipoUsuario->idCliente,
             'nome'         => $tipoUsuario->nomeCliente,
             'email'        => $usuario->emailUsuario, // Corrigido para usar o email do usuario
             'tipo_usuario' => 'Cliente',
         ]);

     } elseif ($tipoUsuario instanceof Funcionarios) {
       
        if ($tipoUsuario->tipo_funcionario == 'admin'){

            session([
                'id'                => $tipoUsuario->idFuncionario,
                'nome'              => $tipoUsuario->nomeFuncionario,
                'tipoFuncionario'   => $tipoUsuario->tipo_Funcionario,
            ]);

            return redirect()->route('dashboard.administrativo');
        }

     }

     return back()->withErrors(['email' => 'Erro desconhecido de autenticação']); // retorna a página de origem com uma mensagem de erro
   
 }

}
