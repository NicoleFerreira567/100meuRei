<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Funcionario;
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
            'email'    => 'required|email',
            'password' => 'required'
        ];

        $msg = [
            'email.required'    => 'O campo de e-mail é obrigatório.',
            'email.email'       => 'O e-mail informado é inválido.',
            'password.required' => 'A senha é obrigatória.'
        ];

        $request->validate($regras, $msg);

        $email = $request->get('email');
        $senha = $request->get('password');

        $usuario = Usuario::where('emailUsuario', $email)->first();

        if (!$usuario) {
            return back()->withErrors(['email' => 'O email informado não está cadastrado']);
        }
        if ($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }


        
        //dd($usuario);

        $tipoUsuario = $usuario->tipo_usuario;
           
           //dd($tipoUsuario);

        session([
            'email' => $usuario->emailUsuario,
        ]);
        
        if ($tipoUsuario instanceof Cliente) {
            session([
                'id'           => $tipoUsuario->idCliente,
                'nome'         => $tipoUsuario->nomeCliente,
                'email'        => $usuario->emailUsuario,
                'tipo_usuario' => 'cliente',
            ]);
            return redirect()->route('pagina.cliente');
        
        } elseif ($tipoUsuario instanceof Funcionario) {
            session([
                'id'              => $tipoUsuario->idFuncionario,
                'nome'            => $tipoUsuario->nomeFuncionario,
                'tipoFuncionario' => $tipoUsuario->tipo_funcionario,
            ]);
        
            if ($tipoUsuario->tipo_funcionario == 'admin') {
                return redirect()->route('dashboard.admin.index');
            }
        }
        
        // Se nenhum tipo de usuário válido for encontrado, redirecionar para a página de login com erro
        return redirect()->route('login')->withErrors(['email' => 'Usuário não autenticado']);

}
}