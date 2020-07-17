<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|
*/

$router->get('/personas', 'Config\PersonaController@index');
$router->post('/personas', 'Config\PersonaController@store');
$router->get('/personas/{idPersona}', 'Config\PersonaController@show');
$router->put('/personas/{idPersona}', 'Config\PersonaController@update');
$router->patch('/personas/{idPersona}', 'Config\PersonaController@update');
$router->delete('/personas/{idPersona}', 'Config\PersonaController@destroy');
