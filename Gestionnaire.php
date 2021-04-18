<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Gestionnaire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->name == "gestionnaire" || auth()->user()->name == "admin") {
            return $next($request);
        }

        abort(403, 'Accès refusé');
    }
}
