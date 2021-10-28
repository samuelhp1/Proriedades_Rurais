<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de estabelecimento</title>
    <meta charset="utf-8">
  </head>
  <body>
     <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <form action={{route('cadastro')}} method="post">
                    @csrf
                    <input name="usuarioCad" value="{{old('usuarioCad')}}" type="text" placeholder="Usuário" >
                    {{$errors->has('usuarioCad') ? $errors->first('usuarioCad') : '' }}
                    <input name="senhaCad" value="{{old('senhaCad')}}" type="password" placeholder="Senha" >
                    {{$errors->has('senhaCad') ? $errors->first('senhaCad') : '' }}

                    <button type="submit" >Salvar</button>
                </form>
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
        </div>
  </body>
</html>