<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class PesquisarEstabelecimentoController extends Controller
{
    public function index(){
        return view('PesquisarEstabelecimento');
    }

    public function post(Request $request){
        //comparação de campos para retorno pergunta se tem no banco
     $estabelecimento = Estabelecimento::where('nome','like','%'.$request->input('nome').'%')->
     where('endereco','like','%'.$request->input('endereco').'%')->
     where('proposta_trabalho','like','%'.$request->input('proposta_trabalho').'%')->
     where('publico_alvo','like','%'.$request->input('publico_alvo').'%')->get();

     return view('ListarEstabelecimento',['estabelecimento' => $estabelecimento]); 
    }

}
