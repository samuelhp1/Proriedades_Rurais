<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de produtor rural</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action = "{{route('app.registrar_responsavel')}}" method = "POST">
     @csrf
    <label for="">Id</label><br/>
    <input type="number" value="{{old('estabelecimento_id')}}" name = "estabelecimento_id"><br/>
    <label for="">Nome</label><br/>
    <input type="text" value="{{old('nome')}}" name = "nome"><br/>
    <label for="">RG</label><br/>
    <input type="text" value="{{old('rg')}}" name = "rg"><br/>
    <label for="">CPF</label><br/>
    <input type="text" value="{{old('cpf')}}" name = "cpf"><br/>
    <button>Salvar</button>
    </form>
   
   @if($errors->any()) 
      <div style="position:absolute; top:0px; left:0px; width:100%">
      @foreach ($errors->all() as $erro )
          {{$erro}}
          <br>
      @endforeach
   @endif


  </body>
</html>