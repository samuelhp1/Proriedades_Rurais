<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsavel;

class PessoaController extends Controller
{
    public function create_pessoa(){
        return view('pessoa');
    }

    public function store(Request $request){

        Responsavel::create([
            'estabelecimento_id'=> $request->estabelecimento_id,
             'nome'=> $request->nome,
             'rg'=> $request->rg,
             'cpf'=> $request->cpf,

        ]);
        return "Pessoa cadastrada com sucesso!";
    }
}
