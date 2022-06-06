<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\AppController@index');

Route::get('/items', 'App\Http\Controllers\ItemController@index');

Route::get('/items/manage', 'App\Http\Controllers\ItemController@showAllItem');

Route::get('/items/create', 'App\Http\Controllers\ItemController@create');

Route::post('/create', 'App\Http\Controllers\ItemController@store');
