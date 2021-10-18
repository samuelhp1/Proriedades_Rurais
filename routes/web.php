<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   // return view('welcome');
  
});



Route:: get('/responsavel','ResponsavelController@create_responsavel');
Route:: post('/responsavel','ResponsavelController@store')->name('registrar_responsavel');
Route:: get('/estabelecimento','EstabelecimentoController@create');
Route:: post('/estabelecimento','EstabelecimentoController@store')->name('registrar_estabelecimento');
Route:: get('/foto','FotoController@fileupload');
Route:: post('/foto','FotoController@fileupload')->name('foto_estabelecimento');