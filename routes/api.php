<?php

Route::group(['middleware' => 'apiKeyAuth'], function () {
    Route::post('/user/create', 'UserController@create');
    Route::post('/user/login', 'UserController@login');
    Route::group(['middleware' => 'userAuth'], function () {
        Route::get('/product/get', 'ProductController@get');
        Route::put('/product/update', 'ProductController@update');
        Route::delete('/product/delete', 'ProductController@delete');
    });
});
