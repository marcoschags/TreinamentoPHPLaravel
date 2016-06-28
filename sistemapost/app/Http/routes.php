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
Route::get('criar-post', function () {
    return view('post.create-post');
});

Route::post('criar-post', 'PostController@create');

Route::get('/', function () {
    return view('home');
});
