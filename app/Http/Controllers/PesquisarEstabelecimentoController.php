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
     where('publico_alvo','like','%'.$request->input('publico_alvo').'%')->simplePaginate(1);
     //paginate server para dividir em quantas respostas desejo retornar

        //passo para view estabeleciemnto o array de estabeleciemnto e  o requests para apginação não se perder na pesquisa
     return view('ListarEstabelecimento',['estabelecimento' => $estabelecimento, 'request'=>$request->all()]); 
    }

}
