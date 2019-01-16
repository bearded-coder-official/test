<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api', function () use ($router) {
    return response()->json(['ack' => time()]);
});

$router->get('/posts', function () use ($router) {
    return response()->json(['1' => 'test']);
});
