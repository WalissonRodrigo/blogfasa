<?php

namespace blog\Http\Middleware;
use Auth;
use Closure;

class CheckRoles
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->hasRole($role)) {
            return $next($request);
        }
        else
        {
            return abort(401);
        }

        //return $next($request);
    }
}
