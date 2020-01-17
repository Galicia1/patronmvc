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


//controlador son una clase que responden a las rutas
//terminal New terminal
//se  pone php artisan
//php artisan make:controller NoticiaController
//app http y ahi estan los controllers

//nombre de la clase y del controller
Route::get('/noticias','NoticiaController@index');


