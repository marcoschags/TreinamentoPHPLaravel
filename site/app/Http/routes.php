<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/home', 'HomeController@index');
//Mostrar lista de usuários
Route::get('/show user', 'HomeController@show');

Route::get('/', function () {
    return view('welcome');
});
