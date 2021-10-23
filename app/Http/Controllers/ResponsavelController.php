<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsavel;

class ResponsavelController extends Controller
{
   // public function __construct()
   // {
   //    $this->middleware('log.acesso'); 
   // }

    public function create_responsavel(){
        return view('responsavel');
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
