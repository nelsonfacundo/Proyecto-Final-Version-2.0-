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

Route::get('/ranking',function()
{
    return view('ranking');
});

############## CRUD Categorias ###################
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

############## CRUD Preguntas ###################

Route::get('/crud', 'PreguntasController@index');
Route::get('/formAgregarPregunta', 'PreguntasController@create');
Route::post('/agregarPregunta', 'PreguntasController@store');
