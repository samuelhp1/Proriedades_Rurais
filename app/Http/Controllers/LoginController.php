<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
   //public function __construct()
  // {
    //  $this->middleware('log.acesso'); 
  // }

    public function index(Request $request){

      //aqui pego o erro passdo 
      $erro = '';

      if($request->get('erro') == 1 ){
         $erro = 'Usuario e ou senha não existe';
      };
      //aqui mostro o erro
       return view('login',['titulo' => 'Login','erro' => $erro]);
    }

    public function autenticar(Request $request ){

           //regras
        $regras = [
            'usuario' => 'email',
             'senha' => 'required'
        ];

       $mesagens = [
        'usuario.email' => 'o campo do usuario e obrigatorio',
        'senha.required' => 'o campo senha e obrigatorio'
       ]; 
        // se n passar
        $request->validate( $regras,$mesagens);
        
         //print_r( $request->all());
       
       //pego o usuario da view
       $email =  $request->get('usuario');

       $password = $request->get('senha');
       
       $user = new login();
       
       //get retorna a coleção // o first retorna 1 unico objeto
       $usuario = $user->where('login',$email)->where('senha',$password)->get()->first();
       
       if(isset($usuario->login)){
            session_start();
            $_SESSION['nome'] = $usuario->login;

            return redirect()->route('estabelecimento');
            
       }else{
          //redireciona para logim e passa um erro
        return redirect()->route('logar',['erro'=> 1]);
       }
       //echo '<pre>';
       //print_r( $existe);
      // echo '<pre>';
   }
}

