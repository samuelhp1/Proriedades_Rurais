<?php

use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
   // return view('welcome');
  
//});

Route:: get('/pessoa','PessoaController@create_pessoa');
Route:: post('/pessoa','PessoaController@store')->name('registrar_pessoa');
Route:: get('/estabelecimento','EstabelecimentoController@create');
Route:: post('/estabelecimento','EstabelecimentoController@create')->name('registrar_estabelecimento');
Route:: get('/foto','FotoController@create');