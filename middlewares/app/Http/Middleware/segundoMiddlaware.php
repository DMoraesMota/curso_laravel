<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class segundoMiddlaware
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
        Log::debug('Passou pelo SEGUNDO Middlware');
        return $next($request);
    }
}
