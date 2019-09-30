<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
                switch(Auth::user()->admin){
                    case 0:
                        return redirect('userh');
                        break;
                    case 1:
                        return redirect('adminh');
                        break;
                    default:
                        return redirect('login');
                        break;
                }
        }

        return $next($request);
    }
}
