<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificamos si existe el token en la URL
        $token = $request->query('token');

        if ($token !== '12345') {
            // Si no coincide, bloqueamos el acceso
            return response('Acceso denegado: token inválido', 403);
        }

        // Si todo está bien, dejamos pasar
        return $next($request);
    }
}
