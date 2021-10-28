
        <div class="informacao-pagina">
            <ul>
                <li><a href="{{route('cadastrar')}}" >Cadastrar Usuario final</a></li>
            </ul>
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <form action={{route('logar')}} method="post">
                    @csrf
                    <input name="usuario" value="{{old('usuario')}}" type="text" placeholder="Usuário" >
                    {{$errors->has('usuario') ? $errors->first('usuario') : '' }}
                    <input name="senha" value="{{old('senha')}}" type="password" placeholder="Senha" >
                    {{$errors->has('senha') ? $errors->first('senha') : '' }}

                    <button type="submit" >Acessar</button>
                </form>
                /*se estiver definida e diferente de vazio sai o erro se n sai vazio*/
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
        </div>
