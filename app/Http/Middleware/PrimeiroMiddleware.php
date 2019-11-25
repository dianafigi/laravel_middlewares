<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class PrimeiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::debug('Passou pelo PrimeiroMiddleware');
        return $next($request); //se nao tiver aqui isto, ou seja, se nao estiver a chamar o $next, a cadeia é interrompida e corre apenas o primeiro middleware. Nao passa para o passo seguinte seja ele ir pra outro middleware ou ir para a rota suposta.
    }
}
