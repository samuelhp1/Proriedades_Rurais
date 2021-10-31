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
                @foreach ($estabelecimento as $estabelecimentos )
                  <tr>
                    <th>{{$estabelecimentos -> nome}}</th>
                    <th>{{$estabelecimentos -> endereco}}</th>
                    <th>{{$estabelecimentos -> proposta_trabalho}}</th>
                    <th>{{$estabelecimentos -> publico_alvo}}</th>
                    <th><a href="{{route('app.excluir_estabelecimento', $estabelecimentos->id)}}">Excluir</a></th>
                    <th><a href="{{route('app.editar_estabelecimento', $estabelecimentos->id)}}">Editar</a></th>
                </tr>      
                @endforeach
             <tbody>
        </table> 
            </div>   
       </div>
       <!-- Para uma paginação o nome das variaveis do foreach tem que ser diferentes -->
       <!-- passo o appends que pega o requests do listar para o resultado da paginação n~~ao se perdeder durante a pesquisa -->
       {{$estabelecimento->appends($request)->links()}}
       
  </body>
</html>