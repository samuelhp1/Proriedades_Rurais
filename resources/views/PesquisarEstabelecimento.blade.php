<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pesquisar estabelecimento</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Pesquisar Estabelecimento</h1>
    <form action = "{{route('app.pesquisar_estabelecimento')}}" method = "POST">
     @csrf
    <label for="">Nome</label><br/>
    <input type="text" name = "nome"><br/>
    <label for="">Endereco</label><br/>
    <input type="text" name = "endereco"><br/>
    <label for="">Proposta de trabalho</label><br/>
    <input type="text" name = "proposta_trabalho"><br/>
    <label for="">Publico alvo</label><br/>
    <input type="text" name = "publico_alvo"><br/>
    <button>Pesquisar</button>
    </form>
  </body>
</html>