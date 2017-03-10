<?php

namespace App\Http\Middleware;

use Closure;

class UserAuthenticate
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
        if(\Auth::user()->check())
        {
            //do nothing
        }
        else
        {
            return redirect()->guest(route('userlogin.get'));
        }

        return $next($request);
    }
}
