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

Route::get('noticia/{noticia}', 'NoticiasController@show');

Route::post('/noticia/create', 'NoticiasController@create');

Route::get('/api/noticias', 'NoticiasController@fidnAll');

Route::get('/api/noticia/{noticia}', 'NoticiasController@findById');

Route::delete('/api/noticia/{noticia}', 'NoticiasController@destroy');