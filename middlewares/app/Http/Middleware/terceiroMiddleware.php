<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class terceiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $nome, $idade)
    {
        Log::debug("Passou no terceiro Middleware [nome = $nome, $idade]");
        return $next($request);
    }
}
