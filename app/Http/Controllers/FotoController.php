<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
   // public function __construct()
  //  {
  //     $this->middleware('log.acesso'); 
   // }
    public function fileupload(Request $request){
        $validate = $request->validate(
            [
                'ficheiro' => 'required|image|mines:jpeg'
            ],

            [
                'ficheiro.required' => 'A imagem e obrigatoria',
                'ficheiro.image' => 'Deve se carregar uma imagem',
                'ficheiro.mines' => 'A imagem deve estar no formato jpeg'
            ]

        );
   }    
}
