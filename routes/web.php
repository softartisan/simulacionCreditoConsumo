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

//Rutas credito
Route::get('/creditos/pendientes', 'CreditoController@index')
->name('creditos');

Route::get('/creditos/detalles/{credito}', 'CreditoController@show')->where('user', '[0-9]+')
->name('creditos.details');

Route::get('/aprobar/{credito}', 'CreditoController@aprobar')->where('user', '[0-9]+')
->name('creditos.aprobar');

Route::get('/simular', 'CreditoController@create')
->name('creditos.crear');

Route::post('/simular', 'CreditoController@store')
->name('creditos.guardar');


//Rutas usuario
Route::get('/usuarios', 'UserController@index')
->name('usuarios');

Route::get('/usuarios/{user}', 'UserController@show')->where('user', '[0-9]+')
->name('usuarios.details');


Auth::routes();

