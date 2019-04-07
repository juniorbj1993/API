<?php


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/politica','SiteController@politica');

// Route::group(['prefix' =>'api'], function () {
//     Route::group(['prefix' => 'users'], function () {
//         Route::get('', ['uses'=>'ApiRestController@allUsers']);
//         Route::get('{id}',['uses'=>'ApiRestController@getUsers']);
//         Route::post('', ['uses'=>'ApiRestController@saveUsers']);
//         Route::put('{id}', ['uses'=>'ApiRestController@updateUsers']);
//         Route::delete('{id}',['uses'=>'ApiRestController@deleteUsers'] );
//     });
// });
