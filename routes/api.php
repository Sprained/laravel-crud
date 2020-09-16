<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', 'App\Http\Controllers\UserController@store');

Route::post('login', 'App\Http\Controllers\Auth\AuthController@login');

Route::group(['middleware' => ['authJwt']], function(){
    Route::post('logout', 'App\Http\Controllers\Auth\AuthController@logout');

    Route::get('articles', 'App\Http\Controllers\ArticleController@index');
    Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');
    Route::post('articles', 'App\Http\Controllers\ArticleController@store');
    Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update');
    Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete');
});