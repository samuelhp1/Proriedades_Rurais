<?php

use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Middleware\LogMiddleware;
use App\Http\Middleware\Autenticacao;
use Illuminate\Support\Facades\Route;




//Route::get('/', function () {
   // return view('welcome');
  
//});



//Route:: get('/login','LoginController@index')->name('logar');
//recebo um parametroe trono opcional com o ?
Route:: get('/login/{erro?}','LoginController@index')->name('logar');
Route:: post('/login','LoginController@autenticar')->name('logar');

// o log acesso e sempre sexecutado primeiro pois ele estan na camada web sendo assim ele se aplica á todas as rotas
// o autenticação serve somente para a rota dos app para niguem entra neles sem premissão
//o padrão e um metodo passado pelo atenticação implemnetado la dentro
Route::  middleware('autenticacao:padrao')-> prefix('/app')-> group(function() {

Route::get('/responsavel','ResponsavelController@create_responsavel');
Route:: post('/responsavel','ResponsavelController@store')
->name('app.registrar_responsavel');

Route:: get('/estabelecimento','EstabelecimentoController@create');
Route:: post('/estabelecimento','EstabelecimentoController@store')->name('app.registrar_estabelecimento');

//Route:: post('/estabelecimento','EstabelecimentoController@salvar')->name('registrar_estabelecimento');
Route:: get('/foto','FotoController@fileupload');
Route:: post('/foto','FotoController@fileupload')->name('app.foto_estabelecimento');
});

