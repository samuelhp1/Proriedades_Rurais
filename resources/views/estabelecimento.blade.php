<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de estabelecimento</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action = "{{route('registrar_estabelecimento')}}" method = "POST">
     @csrf
    <label for="">Nome</label><br/>
    <input type="text" name = "nome"><br/>
    <label for="">CNPJ</label><br/>
    <input type="text" name = "cnpj"><br/>
    <label for="">Endereco</label><br/>
    <input type="text" name = "endereco"><br/>
    <label for="">Telefone</label><br/>
    <input type="text" name = "telefone"><br/>
    <label for="">Celular</label><br/>
    <input type="text" name = "celular"><br/>
    <label for="">whatsapp</label><br/>
    <input type="text" name = "whatsapp"><br/>
    <label for="">servicos</label><br/>
    <input type="text" name = "servicos"><br/>
    <label for="">data de inauguracao</label><br/>
    <input type="date" name = "data_inauguracao"><br/>
    <label for="">Diferencial</label><br/>
    <input type="text" name = "diferencial"><br/>
    <label for="">Proposta de trabalho</label><br/>
    <input type="text" name = "proposta_trabalho"><br/>
    <label for="">Publico alvo</label><br/>
    <input type="text" name = "publico_alvo"><br/>
    <button>Salvar</button>
    </form>
  </body>
</html>