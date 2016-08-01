<?php

Route::resource('articles', 'ArticlesController');

//Route::controller([
//    'auth' => 'Auth\AuthController',
//    '   password' => 'Auth\PasswordController',
//]);

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
