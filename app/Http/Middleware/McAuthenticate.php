<?php

namespace App\Http\Middleware;

use Closure;

class McAuthenticate
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
        if(\Auth::mc()->check())
        {
            //do nothing
        }
        else
        {
            return redirect()->guest(route('mclogin.get'));
        }

        return $next($request);
        
    }
}
