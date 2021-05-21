<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', 'BackendController@index');
$router->post('/api/states', 'BackendController@getStates');
$router->post('/api/states/{id}/districts', 'BackendController@getDistrictByState');
$router->post('/api/sessions/pin', 'BackendController@getSessionsByPin');
$router->post('/api/sessions/district', 'BackendController@getSessionsByDistrict');
