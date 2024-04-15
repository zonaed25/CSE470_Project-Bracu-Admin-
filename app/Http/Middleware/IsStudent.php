<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsStudent
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->role == 0) {
                return $next($request);
            } else {
                return redirect('/admin')->with(['error' => 'Unauthorized Access']);
            }
        } else {
            return redirect('/login')->with(['error' => 'Login required']);
        }
    }
}

