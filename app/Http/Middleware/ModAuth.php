<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModAuth
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
        if(Auth::check()){
            if(Auth::user()->role == 'admin' || Auth::user()->role == 'mod'){
                return $next($request);
            }else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/');
        }
    }
}
