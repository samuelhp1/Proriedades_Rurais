<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {

       session_start();

       if(isset($_SESSION['login']) && $_SESSION['login'] !=''){

           return $next( $request);
       }else{
           return redirect()->route('logar',['erro' => 2]);
       }





        /*
        //vereficar se o usuario possui permissão

        if($metodo_autenticacao == 'padrao'){

            echo 'verificar login e senha no banco';

        } if($metodo_autenticacao == 'ldap'){
 
            echo 'verificar login e senha no AD';
        }
        */
    }
}
