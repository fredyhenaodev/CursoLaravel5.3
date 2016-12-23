<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');
Route::resource('genero', 'GeneroController');
Route::get('generos', 'GeneroController@listing');

//https://github.com/RpL02/CursoLaravel5.1/tree/Vistas

Auth::routes();

Route::get('/home', 'HomeController@index');
