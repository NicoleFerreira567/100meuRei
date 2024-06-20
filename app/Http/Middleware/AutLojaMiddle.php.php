<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Usuario;
use App\Models\Funcionarios;
use App\Models\Cliente;
use Illuminate\Http\Request;

class AutLojaMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure  $next, $tipoUser)
    {
        $email = session('email');

        if($email) {
            // Verifica se há um email na sessão

            $usuario = Usuario::where('emailUsuario', $email)->first();

            if(!$usuario) {
                return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
            }
            // Obtém o usuário associado ao email da sessão

            $tipoUsuario = $usuario->tipo_usuario;

            if($tipoUsuario) {
                $tipo = null;

                if($tipoUsuario instanceof Cliente) {
                    $tipo = 'cliente';
                } elseif ($tipoUsuario instanceof Funcionarios) {
                    $tipo = $tipoUsuario->tipo_funcionario;
                }
                // Verifica o tipo de usuário (Aluno ou Funcionário)

                if($tipo === $tipoUser) {
                    return $next($request);
                    // Se o tipo de usuário da sessão é igual ao tipo exigido, permite o acesso
                } else {
                    return redirect()->route('login')->withErrors(['Email' => 'Não autenticado']);
                    // Se o tipo de usuário não corresponde ao exigido, redireciona para a página de login com erro
                }
            }
        }

        // Se não houver email na sessão ou ocorrerem outras condições, o acesso é negado
        return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
    }
    }