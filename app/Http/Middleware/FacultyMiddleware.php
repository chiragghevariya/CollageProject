<?php

namespace App\Http\Middleware;

use Closure;

class FacultyMiddleware
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
        if(Auth::user()->role == 2)
            return $next($request);

        else

            return redirect()->back();
    }
}
