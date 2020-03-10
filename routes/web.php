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
    return view('index');
});


Route::get('/index',function(){
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/perfil', 'perfilController@index')->name('perfil');

Route::get('/contacto', function(){
    return view('contacto');
});

Route::post('/contacto', "ContactoController@agregarMensaje");


Route::get('/ranking',function()
{
    return view('ranking');
});

Route::get('/faq',function()
{
    return view('faq');
});

############## CRUD Categorias ###################
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::get('/formModificarCategoria/{id_cat}', 'CategoriasController@edit');
Route::post('/modificarCategoria', 'CategoriasController@update');
Route::post('/agregarCategoria', 'CategoriasController@store');
Route::get('/adminCategorias/{id_cat}','CategoriasController@destroy');

############## CRUD Preguntas ###################

Route::get('/crud', 'PreguntasController@index');
Route::get('/formAgregarPregunta', 'PreguntasController@create');
Route::get('/formModificarPregunta/{id_preg}', 'PreguntasController@edit');
Route::post('/modificarPregunta', 'PreguntasController@update');
Route::post('/agregarPregunta', 'PreguntasController@store');
Route::get('/crud/{id_preg}','PreguntasController@destroy');
