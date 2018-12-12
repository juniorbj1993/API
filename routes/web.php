<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Bem vindo ao Kero Ajuda';
});
Route::group(['prefix' =>'api'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('', ['uses'=>'ApiRestController@allUsers']);
        Route::get('{id}',['uses'=>'ApiRestController@getUsers']);
        Route::post('', ['uses'=>'ApiRestController@saveUsers']);
        Route::put('{id}', ['uses'=>'ApiRestController@updateUsers']);
        Route::delete('{id}',['uses'=>'ApiRestController@deleteUsers'] );
    });
});
