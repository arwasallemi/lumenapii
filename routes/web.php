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

    ////produit
    $router->group(['prefix' => 'produit'], function () use ($router) {
      $router->get('produits',  ['uses' => 'ProduitController@showAll']);
    
      $router->get('produits/{id}', ['uses' => 'ProduitController@showOne']);
    
      $router->post('produits', ['uses' => 'ProduitController@create']);
    
      $router->delete('produits/{id}', ['uses' => 'ProduitController@delete']);
    
      $router->put('produits/{id}', ['uses' => 'ProduitController@update']);
    });

      ////region
      $router->group(['prefix' => 'region'], function () use ($router) {
        $router->get('regions',  ['uses' => 'RegionController@showAll']);
      
        $router->get('regions/{id}', ['uses' => 'RegionController@showOne']);
      
        $router->post('regions', ['uses' => 'RegionController@create']);
      
        $router->delete('regions/{id}', ['uses' => 'RegionController@delete']);
      
        $router->put('regions/{id}', ['uses' => 'RegionController@update']);
      });

           ////ville
           $router->group(['prefix' => 'ville'], function () use ($router) {
            $router->get('villes',  ['uses' => 'VilleController@showAll']);
          
            $router->get('villes/{id}', ['uses' => 'VilleController@showOne']);
          
            $router->post('villes', ['uses' => 'VilleController@create']);
          
            $router->delete('villes/{id}', ['uses' => 'VilleController@delete']);
          
            $router->put('villes/{id}', ['uses' => 'VilleController@update']);
          });