<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    
    public function handle(Request $request, Closure $next, $metodo_autenticacao)
    {
        //vereficar se o usuario possui permissão
        if($metodo_autenticacao == 'padrao'){

            echo 'verificar login e senha no banco';

        } if($metodo_autenticacao == 'ldap'){
 
            echo 'verificar login e senha no AD';
        }
        
    }
}
