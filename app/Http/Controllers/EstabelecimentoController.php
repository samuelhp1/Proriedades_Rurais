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
        /* 
        $estabelecimento = new Estabelecimento();
        $estabelecimento->nome = $request->nome;
        $estabelecimento->cnpj = $request->cnpj;
        $estabelecimento->endereco = $request->endereco;
        $estabelecimento->telefone = $request->telefone;
        $estabelecimento->celular = $request->celular;
        $estabelecimento->whatsapp = $request->whatsapp;
        $estabelecimento->servicos = $request->servicos;
        $estabelecimento->data_inauguracao = $request->data_inauguracao;
        $estabelecimento->diferencial = $request->diferencial;
        $estabelecimento->proposta_trabalho = $request->proposta_trabalho;
        $estabelecimento->publico_alvo = $request->publico_alvo;
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        $estabelecimento->save();

        */
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
