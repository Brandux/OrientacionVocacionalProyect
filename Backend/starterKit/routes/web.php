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
// api de ejemplo de persona

$router->get('/personas', 'PersonaController@index');
$router->post('/personas', 'PersonaController@store');
$router->get('/personas/{idPersona}', 'PersonaController@show');
$router->put('/personas/{idPersona}', 'PersonaController@update');
$router->patch('/personas/{idPersona}', 'PersonaController@update');
$router->delete('/personas/{idPersona}', 'PersonaController@destroy');
