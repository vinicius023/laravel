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
** Funções Basicas
 *
 * get('rota', function() {});
 * post('rota', function() {});
 * delete('rota', function() {});
 * path('rota', function() {});
 * options('rota', function() {});
 * match(['get', 'post'], 'rota', function() {});
 *
*/

Route::get('/', function () {
    return view('welcome');
});

// Route com valor dinamico
//Route::get('hello-world/{name}', 'HelloController@index');

// Route com valor padrao ou opcional
Route::get('hello-world/{name?}', function ($name = "Mundo") {
	return "Olá " . $name;
});