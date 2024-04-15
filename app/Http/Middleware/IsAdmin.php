<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->role == 1) {
                return $next($request);
            } else {
                return redirect('/student')->with(['error' => 'Unauthorized Access']);
            }
        } else {
            return redirect('/login')->with(['error' => 'Login required']);
        }
    }
}

