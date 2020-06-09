<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [
    'as'=>'index',
    'uses'=>'OriginController@index'
]);

Route::get('/show/{name}', [
    'as'=>'show',
    'uses'=>'OriginController@show'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
