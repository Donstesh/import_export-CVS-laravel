<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', 'UserController@index');

Route::get('items', 'ItemController@index');
Route::post('items/import', 'ItemController@import');