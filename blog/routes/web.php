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

Route::get('user/{name?}', function ($name = null) {
    return 'Bienvenido user: ' . $name;
});

Route::get('producto/{id}', 'ProductoController@show');

Route::get('/', function () {
    return view('users', ['name' => 'jose gregorio']); // se le pasa el nombre del archivo de nuestra vista
});
