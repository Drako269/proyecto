<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuario', 'App\Http\Controllers\UsuarioController@index')->name('usuario');

Route::get('login', 'App\Http\Controllers\LoginController@index')->name('login');

Route::get('info', 'App\Http\Controllers\InfoController@index')->name('info');

Route::get('encuesta', 'App\Http\Controllers\EncuestaController@index')->name('encuesta');