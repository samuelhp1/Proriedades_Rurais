<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de estabelecimento</title>
    <meta charset="utf-8">
  </head>
  <body>
   {{$msg ?? ''}}
    <form action = "{{route('app.registrar_estabelecimento')}}" method = "POST">
    <!–- aqui pego o id do estabelecimento para que possa ser passado para o id do create, caso não exista e passado nullo-–>
    <input type="hiden" name="id" value="{{$fornecedor->id ?? ''}}">
     @csrf
    <label for="">Nome</label><br/>
    <!–- aqui pego o estabelecimento vindo do editar e passo o campo de retorno-–>
    <input type="text" value="{{$estabelecimento->nome ?? old('nome')}}" name = "nome"><br/>
    <label for="">CNPJ</label><br/>
    <input type="text" value="{{$estabelecimento->cnpj ?? old('cnpj')}}" name = "cnpj"><br/>
    <label for="">Endereco</label><br/>
    <input type="text" value="{{$estabelecimento->endereco ?? old('endereco')}}" name = "endereco"><br/>
    <label for="">Telefone</label><br/>
    <input type="text" value="{{$estabelecimento->telefone ?? old('telefone')}}" name = "telefone"><br/>
    <label for="">Celular</label><br/>
    <input type="text" value="{{$estabelecimento->celular ?? old('celular')}}" name = "celular"><br/>
    <label for="">whatsapp</label><br/>
    <input type="text" value="{{$estabelecimento->whatsapp ?? old('whatsapp')}}" name = "whatsapp"><br/>
    <label for="">servicos</label><br/>
    <input type="text" value="{{$estabelecimento->servicos ?? old('servicos')}}" name = "servicos"><br/>
    <label for="">data de inauguracao</label><br/>
    <input type="date" value="{{$estabelecimento->data_inauguracao ?? old('data_inauguracao')}}" name = "data_inauguracao"><br/>
    <label for="">Diferencial</label><br/>
    <input type="text" value="{{$estabelecimento->diferencial ?? old('diferencial')}}" name = "diferencial"><br/>
    <label for="">Proposta de trabalho</label><br/>
    <input type="text" value="{{$estabelecimento->proposta_trabalho ?? old('proposta_trabalho')}}" name = "proposta_trabalho"><br/>
    <label for="">Publico alvo</label><br/>
    <input type="text" value="{{$estabelecimento->publico_alvo ?? old('publico_alvo')}}" name = "publico_alvo"><br/>
    <button>Salvar</button>
    </form>
  </body>
</html>