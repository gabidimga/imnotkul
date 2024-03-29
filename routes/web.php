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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos', 'ProductosController@listado')->name('productos');
Route::get('/detalle', 'ProductosController@detalle')->name('detalle');
Route::get('/comprar', 'ProductosController@comprar')->name('comprar');


Route::get('/contacto', 'ContactoController@contacto')->name('contacto');
Route::get('/gracias', 'ContactoController@mensaje')->name('gracias');

Route::get('/faqs', 'FaqsController@faqs')->name('faqs');
Route::get('/prueba', 'ProductosController@prueba')->name('prueba');

Route::get('/admin', 'adminController@admin')->name('admin')->middleware("prueba");
