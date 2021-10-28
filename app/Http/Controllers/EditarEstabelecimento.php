<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class EditarEstabelecimento extends Controller
{
    public function editar($id){

        $estabelecimento = Estabelecimento:: find($id);
       
        return view('estabelecimento',['estabelecimento' =>  $estabelecimento ]);
    }
}
