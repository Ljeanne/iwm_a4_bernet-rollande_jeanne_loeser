<?php

namespace App\Http\Middleware;

use Closure;

class FiltreIpMiddleware
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
         if ($request->getClientIp() != '0.0.0.0')
         {
             return redirect('home');
         }

         return $next($request);
     }
}
