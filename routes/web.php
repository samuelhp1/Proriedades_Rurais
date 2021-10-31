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
Route::get('//{erro?}','LoginController@index')->name('logar');
Route::post('/','LoginController@autenticar')->name('logar');

//Route::get('/cadastro','CadastroController@index')->name('cadastro');
Route::get('/cadastrar','CadastroEstabelecimentoController@index')->name('cadastrar');
//Route:: post('/Cadastro','CadastrarUsuario@cadastrar')->name('cadastrarUsu');

// o log acesso e sempre sexecutado primeiro pois ele estan na camada web sendo assim ele se aplica á todas as rotas
// o autenticação serve somente para a rota dos app para niguem entra neles sem premissão
//o padrão e um metodo passado pelo atenticação implemnetado la dentro
Route::middleware('autenticacao:padrao')-> prefix('/app')-> group(function() {

Route::get('/home','HomeController@index')->name('app.home'); 
 
Route::get('/sair','LoginController@sair') ->name('app.sair');

Route::get('/responsavel','ResponsavelController@create_responsavel');
Route::post('/responsavel','ResponsavelController@store')->name('app.registrar_responsavel');

Route::get('/estabelecimento','EstabelecimentoController@create');
Route::post('/estabelecimento','EstabelecimentoController@salvar')->name('app.registrar_estabelecimento');
Route::get('/editar/{id}','EstabelecimentoController@editar')->name('app.editar_estabelecimento');
Route::get('/excluir/{id}','EstabelecimentoController@excluir')->name('app.excluir_estabelecimento');

Route::get('/pesquisar','PesquisarEstabelecimentoController@index')->name('app.pesquisar_estabelecimento');
Route::post('/pesquisar','PesquisarEstabelecimentoController@post')->name('app.pesquisar_estabelecimento');
//para usar o paginate tenho que criar o get do listar tmb
Route::get('/pesquisar','PesquisarEstabelecimentoController@post')->name('app.pesquisar_estabelecimento');




//Route:: post('/estabelecimento','EstabelecimentoController@salvar')->name('registrar_estabelecimento');
Route::get('/foto','FotoController@fileupload')->name('app.foto_estabelecimento');
Route::post('/foto','FotoController@fileupload')->name('app.foto_estabelecimento');
});



