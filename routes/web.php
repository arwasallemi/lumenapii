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

$router->post('/login', 'LoginController@login');
$router->post('/create', 'UsersController@create');
$router->get('/users', ['middleware' => 'auth', 'uses' =>  'UsersController@get_user']);
////client
$router->group(['prefix' => 'client'], function () use ($router) {
    $router->get('client',  ['uses' => 'ClientController@showAllClients']);
  
    $router->get('client/{id}', ['uses' => 'ClientController@showOneClient']);
  
    $router->post('clientcreate', ['uses' => 'ClientController@create']);
  
    $router->delete('client/{id}', ['uses' => 'ClientController@delete']);
  
    $router->put('client/{id}', ['uses' => 'ClientController@update']);
  });

  //user
  $router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('users',  ['uses' => 'UsersController@showAllUsers']);
  
    $router->get('users/{id}', ['uses' => 'UsersController@showOneUser']);
  
    $router->post('userscreate', ['uses' => 'UsersController@create']);
  
    $router->delete('users/{id}', ['uses' => 'UsersController@delete']);
  
    $router->put('users/{id}', ['uses' => 'UsersController@update']);
  });
  ////ressource
  $router->group(['prefix' => 'ressource'], function () use ($router) {
    $router->get('ressources',  ['uses' => 'RessourceController@showAll']);
  
    $router->get('ressources/{id}', ['uses' => 'RessourceController@showOne']);
  
    $router->post('ressources', ['uses' => 'RessourceController@create']);
  
    $router->delete('ressources/{id}', ['uses' => 'RessourceController@delete']);
  
    $router->put('ressources/{id}', ['uses' => 'RessourceController@update']);
  });