<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso:: create(['log'=> "ip  $ip requisitou  $rota"]);
        return $next($request);
        
    }
}
