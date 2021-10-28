<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastrar');
    }
}
