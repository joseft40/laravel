<?php
//Generar controlador
//php artisan make:controller SalesController
//Las migraciones son como el control de versión para tu base de datos, permiten que tu equipo modifique y comparta fácilmente el esquema de base de datos de la aplicación.
//php artisan make:migration create_users_table
//Revertir migraciones
//php artisan migrate:rollback
//El comando migrate:reset revertirá todas las migraciones de tu aplicación:
//php artisan migrate:reset
//Error laravel https://laravel-news.com/laravel-5-4-key-too-long-error
//El comando migrate:fresh eliminará todas las tablas de la base de datos y después ejecutará el comando migrate
//Los modelos permiten que consultes los datos en tus tablas, así como también insertar nuevos registros dentro de la tabla.
//php artisan make:model Flight
//generar una migración de base de datos cuando generes el modelo
//php artisan make:model Flight -m

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

Route::get('/', 'SalesController@index');

Route::get('user/{id?}', 'SalesController@showClient')->where('id', '[0-9]+');
// En este ejemplo que se agrega se indica en el condicional que solo se permiten numeros.
//el ? me permite trabajar con argument null

Route::get('producto/{id}', 'ProductoController@show');

Route::view('example1', 'example1', ['numero' => 1200]);
Route::view('nosotros', 'nosotros');

Route::get('clients/lists', 'ClientsController@index');

Route::post('/', 'ClientsController@create')->name('clients.create');

Route::get('client/{id}', 'ClientsController@view')->name('clients.view');
Route::get('client/{id}/edit', 'ClientsController@edit')->name('clients.edit');

/*
Route::get('/', function () {
    return view('users', ['name' => 'jose gregorio']); // se le pasa el nombre del archivo de nuestra vista
});
*/
