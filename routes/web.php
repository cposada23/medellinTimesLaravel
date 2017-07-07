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

Route::get('/', 'PagesController@home');
Route::get('/eventos', 'PagesController@eventos');
Route::get('/publicidad', 'PagesController@publicidad');
Route::get('/noticias', 'PagesController@home');
Route::get('/api/csrf', function() {
  $respuesta = [
    'token' => Session::token()
  ];
  return $respuesta;
});


Route::post('/noticia/create', 'NoticiasController@create2');
Route::get('noticia/{noticia}', 'NoticiasController@detalle');

//

// Route::get('/api/noticias', 'NoticiasController@fidnAll');

// Route::get('/api/noticia/{noticia}', 'NoticiasController@findById');

// Route::delete('/api/noticia/{noticia}', 'NoticiasController@destroy');
Route::resource('/api/eventos', 'EventosController');


Route::resource('/api/noticias', 'NoticiasController');

Route::resource('/api/publicidades', 'PublicidadesController');