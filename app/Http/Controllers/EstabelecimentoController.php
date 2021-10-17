<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class EstabelecimentoController extends Controller
{
    public function create(){
        return view('estabelecimento');
    }

    public function store(Request $request){

        Estabelecimento::create([
            'nome'=> $request->nome,
            'cnpj'=> $request->cnpj,
            'endereco'=> $request->endereco,
            'telefone'=> $request->telefone,
            'celular'=> $request->celular,
            'whatsapp'=> $request->whatsapp,
            'servicos'=> $request->servicos,
            'data_inauguracao'=> $request->data_inauguracao,
            'diferencial'=> $request->diferencial,
            'proposta_trabalho'=> $request->proposta_trabalho,
            'publico_alvo'=> $request->publico_alvo,
        ]);
        return "Estabelecimento cadastrado com sucesso!";
    }
}
