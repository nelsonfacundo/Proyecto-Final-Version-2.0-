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



//------PERFIL USUARIO-----------////
Route::get('/perfil', 'perfilController@index')->name('perfil');

Auth::routes();

//------------PERFILL ADMIN------------//
Route::get('/home', 'HomeController@index')->name('home','Admin');



############## CRUD Categorias ###################
Route::get('/adminCategorias', 'CategoriasController@index')->middleware('Admin');
Route::get('/formAgregarCategoria', 'CategoriasController@create')->middleware('Admin');
Route::get('/formModificarCategoria/{id_cat}', 'CategoriasController@edit')->middleware('Admin');
Route::post('/modificarCategoria', 'CategoriasController@update')->middleware('Admin');
Route::post('/agregarCategoria', 'CategoriasController@store')->middleware('Admin');
Route::get('/adminCategorias/{id_cat}','CategoriasController@destroy')->middleware('Admin');

############## CRUD Preguntas ###################

Route::get('/crud', 'PreguntasController@index')->middleware('Admin');
Route::get('/formAgregarPregunta', 'PreguntasController@create')->middleware('Admin');
Route::get('/formModificarPregunta/{id_preg}', 'PreguntasController@edit')->middleware('Admin');
Route::post('/modificarPregunta', 'PreguntasController@update')->middleware('Admin');
Route::post('/agregarPregunta', 'PreguntasController@store')->middleware('Admin');
Route::get('/crud/{id_preg}','PreguntasController@destroy')->middleware('Admin');
