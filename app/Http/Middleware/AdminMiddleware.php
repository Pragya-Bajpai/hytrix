<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('login');
        }
       
        return $next($request);
    }
}
