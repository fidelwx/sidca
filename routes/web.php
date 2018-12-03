<?php

Route::get('/', function () {
    return redirect(route('login'));
});

// Aceder y salir - rutas
Auth::routes();
Route::get('acceder', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('acceder', 'Auth\LoginController@login');
Route::post('salir', 'Auth\LoginController@logout')->name('logout');
// Aceder y salir - rutas

Route::get('/sidca', 'HomeController@index')->name('home');
Route::resource('profesores','teachers');
Route::resource('usuarios','users');

// meiyer
Route::get('/profesores/edit/{teacher}', 'teachers@edit');


