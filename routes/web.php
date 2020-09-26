<?php

use Illuminate\Support\Facades\Route;

//Route
//Controller
//View


Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/1', 'ArticleController@show');
