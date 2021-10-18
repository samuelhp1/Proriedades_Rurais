<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de produtor rural</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action = "{{route('registrar_responsavel')}}" method = "POST">
     @csrf
    <label for="">Id</label><br/>
    <input type="number" name = "estabelecimento_id"><br/>
    <label for="">Nome</label><br/>
    <input type="text" name = "nome"><br/>
    <label for="">RG</label><br/>
    <input type="text" name = "rg"><br/>
    <label for="">CPF</label><br/>
    <input type="text" name = "cpf"><br/>
    <button>Salvar</button>
    </form>
  </body>
</html>