<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;
use App\Http\Middleware\LogAcessoMiddleware;
class EstabelecimentoController extends Controller
{

    //adiciona o middleware diretamente na rota sem ter que ser feita passagem pela view
  ////  public function __construct()
   // {
    //   $this->middleware('log.acesso'); 
   // }

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

    public function salvar(Request $request){

        //criação  id recebido seja nulo
        if($request->input('id') == ''){
        $regras = [
            'nome'=> 'required|min:3|max:40',
            'cnpj'=> 'required',
            'endereco'=> 'required',
            'servicos'=> 'required',
            'data_inauguracao'=> 'required',
            'diferencial'=> 'required',
            'proposta_trabalho'=> 'required',
            'publico_alvo'=> 'required'
        ];
        
        $feedback =[
            'required'=> 'O campo :attribute deve ser preenchido',
            'nome.min'=> 'O campo nome presisa ter no minimo 3 caracteres',
            'nome.max'=>'O campo nome deve ter no maximo 40 caracteres',
        ];
        $request->validate($regras,$feedback);
        Estabelecimento:: create($request->all());
        echo 'tika';
        }
        //edição o id recebido não e nulo
        if($request->input('id') != ''){
            //eu pego o id que ja esiste para atualizar
           $estabelecimento = Estabelecimento:: find($request->input('id'));
           //tudo recuperado em cima e atualizado aqui
           $update = $estabelecimento->update($request->all());

           if($update){
               echo 'Update realizado';
           }else{
            echo 'Update não realizado';
           }
        }
        return view('home');
    }

    public function editar($id){

        $estabelecimento = Estabelecimento::find($id);

        //dd($estabelecimento);
       //pego id e todo resto e passo para a view estabelecimento
        return view('estabelecimento',['estabelecimento'=>$estabelecimento]);
    }
    public function excluir($id){

      Estabelecimento:: find($id)->delete();

      return redirect()->route('app.home');

    }
}
