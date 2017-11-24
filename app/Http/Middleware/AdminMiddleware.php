<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * es un gestor de solicitudes que se ubica entre la petición del usuario y el controlador
     * se asegura de que se cumpla con algo para que la solicitud pueda continuar
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! auth()->check())
          return redirect('login');

        if(auth()->user()->role != 0) //not and admin
          return redirect('clientes');
        //la solicitud se pase a lo que contiene y plt siga su recorrido normal
        return $next($request);
    }
}
