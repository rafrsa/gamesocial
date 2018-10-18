<?php

Route::get('/', function () {
    return view('login');
});

Route::get('login/auth', 'LoginController@authUser');

//$router->group(['prefix' => 'login'], function () use ($router) {
//    $router->get('auth', 'LoginController@authUser');
//});

$router->group(['prefix' => '/', 'middleware' => ['authNew']], function () use ($router) {
//    $router->group(['prefix' => 'auth'], function () use ($router) {
//        $router->post('/refresh', 'AuthController@refreshToken');
//    });

    $router->group(['prefix' => 'dash'], function () use ($router) {
        $router->get('/', 'AppController@index');
    });
});
