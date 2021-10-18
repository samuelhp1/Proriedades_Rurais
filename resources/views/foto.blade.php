<h1>Emvie imagens da prorpiedade</h1>

<form action ="{{route('foto_estabelecimento')}}"  method="post" enctype="multipart/form-data">
   @csrf
  <div>
    <label for="profile_pic">Escolha o arquivo para envio</label>
    <input type="file" name="ficheiro"
          accept=".jpg, .jpeg, .png">
  </div>

  <div>
    <button>Submit</button>
  </div>
   
   {{-- erros de  upload da imagem--}}
   <div>
    @if($erro->any()){
       <ul>
        @foreach ( $erro->any() as $erro)
            <li>{{$erro}}</li>
        @endforeach
       </ul>
    }
    @endif
  </div>


</form>