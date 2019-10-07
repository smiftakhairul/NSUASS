<?php

namespace App\Http\Middleware;

use Closure;

class VisitorMiddleware
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
        if($request->user()->role!='visitor')
            return redirect()->back();

        return $next($request);
    }
}
