<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Login;

class CadastrarUsuario extends Controller
{
    public function index(){
        return view('CadastrarUsuario');
    }

    public function cadastrar(Request $request){

        if($request->input('_token') != ''){
        //regras
        $regras = [
            'usuariocad' => 'email',
             'senhacad' => 'required'
        ];

       $mesagens = [
        'usuariocad.email' => 'o campo do usuario e obrigatorio',
        'senhacad.required' => 'o campo senha e obrigatorio'
       ]; 

        // se n passar
        $request->validate( $regras,$mesagens);
        }

       $cadastrar = new Login();
       $cadastrar->create($request->all());
    }
}
