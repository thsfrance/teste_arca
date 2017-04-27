<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'empresa','middleware' => 'auth'],function(){
    Route::get('cadastro','EmpresaController@cadastro');
    Route::post('salvar','EmpresaController@salvar');
});

Route::get('empresa/detalhes/{codigo}','EmpresaController@detalhes');
