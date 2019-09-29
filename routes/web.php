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
Route::get('/productos', function () {
    return view('productos');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/productos/{id}', function ($id) {
    return view('productos');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
