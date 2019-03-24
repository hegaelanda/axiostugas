<?php

/*
|--------------------------------------------------------------------------
| Application Routes (Hega)
|--------------------------------------------------------------------------
| Hega Ganteng
| Here is where you can register all of the routes for an application.	|
| It is a breeze. Simply tell Lumen the URIs it should respond to 		| Hega Ganteng
| and give it the Closure to call when that URI is requested.			|
| Author Hega Cendikia Elanda
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/siswa','SiswaController@create');
$router->get('/siswa','SiswaController@read');
$router->post('/siswa/{id}','SiswaController@update');
$router->delete('/siswa/{id}','SiswaController@delete');
$router->get('siswa/{id}','SiswaController@detail');

$router->post('/kelas','KelasController@create');
$router->get('/kelas','KelasController@read');
$router->post('/kelas/{id}','KelasController@update');
$router->delete('/kelas/{id}','KelasController@delete');