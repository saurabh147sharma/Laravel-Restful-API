<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'apiKeyAuth'], function () {
    Route::post('/user/create', 'UserController@create');
    Route::post('/user/login', 'UserController@login');
    Route::group(['middleware' => 'userAuth'], function () {
        Route::get('/product/get', 'ProductController@get');
        Route::put('/product/update', 'ProductController@update');
        Route::delete('/product/delete', 'ProductController@delete');
    });
});
