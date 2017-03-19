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

	Route::resource('usuario', 'UsuarioController');

	Route::get('/', 'UsuarioController@index');
	Route::get('/create', 'UsuarioController@create');
	Route::post('/enviar', 'UsuarioController@store');
	Route::post('/logar', 'UsuarioController@logger');
	Route::post('/delete', 'UsuarioController@destroy');
   	Route::post('/update', 'UsuarioController@update');
   	Route::get('/list', 'UsuarioController@show');
   	Route::get('/logout', 'UsuarioController@logout');






