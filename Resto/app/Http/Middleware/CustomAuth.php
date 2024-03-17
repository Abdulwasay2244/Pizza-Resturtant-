<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuth
{
    public function handle(Request $request, Closure $next)
    {   
        if (Auth::check() && ($request->is('login') || $request->is('register'))) { 
            return redirect('/');
        }
    
        return $next($request);
    }
    
}
