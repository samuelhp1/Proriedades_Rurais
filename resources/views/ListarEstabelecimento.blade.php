<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Listar estabelecimento</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Listar Estabelecimentos</h1>
     <div class="Informacao-pagina">
       <div style="width:90%; margin-left: auto; margin-right: auto;">
       <table border = "1" width = "100%" >
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Proposta de trabalho</th>
                    <th>Publico alvo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estabelecimento as $estabelecimento )
                  <tr>
                    <th>{{$estabelecimento -> nome}}</th>
                    <th>{{$estabelecimento -> endereco}}</th>
                    <th>{{$estabelecimento -> proposta_trabalho}}</th>
                    <th>{{$estabelecimento -> publico_alvo}}</th>
                    <th>Excluir</th>
                    <th><a href="{{route('app.editar_estabelecimento',$estabelecimento->id)}}">Editar</th>
                </tr>      
                @endforeach
             <tbody>
        </table> 
            </div>
       </div>
  </body>
</html>