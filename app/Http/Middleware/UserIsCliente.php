<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsCliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      
        $user = Auth::user();
        if ($user && $user->tipo_usuario_type === 'cliente') {
            return $next($request);
        }

        return response()->json(['message' => 'Acesso negado. Somente clentes podem acessar esta área.'], 403);
    }
}
