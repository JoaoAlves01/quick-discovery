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

Route::get('/', function () {
    return view('welcome');
});

//Usuario
Route::post('cadastro/usuario', 'UserController@cadastrarUsuario')->name('cadatroUsuario');
Route::get('cadastrar', 'UserController@cadastrarPage')->name('cadastrar');

Route::get('apagar', function(){
    Cookie::queue(Cookie::forget('jwt_token'));
});

//Login
Route::get('login', 'AuthJwtController@loginPage')->name('login');
Route::post('autenticacao', 'AuthJwtController@login')->name('autenticacao');
Route::get('logout', 'AuthJwtController@logout')->name('logout'); 
Route::get('refrest', 'AuthJwtController@refrest')->name('refrest'); 


Route::group(['middleware' => ['auth:api']], function(){

    //corretor
    Route::group(['prefix' => 'corretor'], function(){
        
        Route::get('lista/evento', 'CorretorController@listarEventos')->name('listarEventos');
        Route::get('cotacao', 'CorretorController@realizarCotacaoPage')->name('cotacao');
        //Route::get('cotacao/calculo', 'CorretorController@calculo')->name('calculo');
        Route::post('cotacao/calculo', 'CorretorController@calculo')->name('calculo');
        Route::get('buscar/localidade', 'CorretorController@buscarLocalidade')->name('buscarLocalidade');
        Route::get('filtro/localidade/{idCobertura}', 'CorretorController@filtroLocalidade')->name('filtroLocalidade');
    });

    Route::group(['prefix' => 'cliente'], function(){
        
        Route::get('menu', 'SeguradoController@menuSegurado')->name('menuSegurado');
        Route::get('buscar/segurado/{cpf}', 'SeguradoController@buscarSegurado')->name('buscarSegurado');
        Route::get('apolice', 'SeguradoController@visualizarApolice')->name('clienteApolice');
    });

    Route::get('buscar/cep/{cep}', 'SeguradoController@buscarCep')->name('buscarCep');
    Route::get('buscar/cidade/{idEstado}', 'CorretorController@buscarCidade')->name('buscarCidade');

});

//HasMany - Tem muitos
//belongsToMany - Pertence a muitos