<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
