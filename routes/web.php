<?php

//Route::resource('/', 'AppController');

$router->group(['prefix' => '/', 'middleware' => ['authNew']], function () use ($router) {
//    $router->group(['prefix' => 'auth'], function () use ($router) {
//        $router->post('/refresh', 'AuthController@refreshToken');
//    });

    $router->group(['prefix' => 'dash'], function () use ($router) {
        $router->get('/', 'AppController@index');
    });
});

Route::get('/', function () {
    return view('login');
});
