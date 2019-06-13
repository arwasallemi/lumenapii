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

    ////ajoutstock
    $router->group(['prefix' => 'ajoutstock'], function () use ($router) {
      $router->get('ajoutstocks',  ['uses' => 'AjoutstockController@showAll']);
    
      $router->get('ajoutstocks/{id}', ['uses' => 'AjoutstockController@showOne']);
    
      $router->post('ajoutstocks', ['uses' => 'AjoutstockController@create']);
    
      $router->delete('ajoutstocks/{id}', ['uses' => 'AjoutstockController@delete']);
    
      $router->put('ajoutstocks/{id}', ['uses' => 'AjoutstockController@update']);
    });
      ////bonretour
      $router->group(['prefix' => 'bonretour'], function () use ($router) {
        $router->get('bonretours',  ['uses' => 'BonretourController@showAll']);
      
        $router->get('bonretours/{id}', ['uses' => 'BonretourController@showOne']);
      
        $router->post('bonretours', ['uses' => 'BonretourController@create']);
      
        $router->delete('bonretours/{id}', ['uses' => 'BonretourController@delete']);
      
        $router->put('bonretours/{id}', ['uses' => 'BonretourController@update']);
      });
        ////bonsortie
        $router->group(['prefix' => 'bonsortie'], function () use ($router) {
          $router->get('bonsorties',  ['uses' => 'BonsortieController@showAll']);
        
          $router->get('bonsorties/{id}', ['uses' => 'BonsortieController@showOne']);
        
          $router->post('bonsorties', ['uses' => 'BonsortieController@create']);
        
          $router->delete('bonsorties/{id}', ['uses' => 'BonsortieController@delete']);
        
          $router->put('bonsorties/{id}', ['uses' => 'BonsortieController@update']);
        });
           ////employeur
           $router->group(['prefix' => 'employeur'], function () use ($router) {
            $router->get('employeurs',  ['uses' => 'EmployeurController@showAll']);
          
            $router->get('employeurs/{id}', ['uses' => 'EmployeurController@showOne']);
          
            $router->post('employeurs', ['uses' => 'EmployeurController@create']);
          
            $router->delete('employeurs/{id}', ['uses' => 'EmployeurController@delete']);
          
            $router->put('employeurs/{id}', ['uses' => 'EmployeurController@update']);
          });
           ////entrepot
                  $router->group(['prefix' => 'entrepot'], function () use ($router) {
                    $router->get('entrepots',  ['uses' => 'EntrepotController@showAll']);
                  
                    $router->get('entrepots/{id}', ['uses' => 'EntrepotController@showOne']);
                  
                    $router->post('entrepots', ['uses' => 'EntrepotController@create']);
                  
                    $router->delete('entrepots/{id}', ['uses' => 'EntrepotController@delete']);
                  
                    $router->put('entrepots/{id}', ['uses' => 'EntrepotController@update']);
                  });
   ////image
   $router->group(['prefix' => 'image'], function () use ($router) {
    $router->get('images',  ['uses' => 'ImageController@showAll']);
  
    $router->get('images/{id}', ['uses' => 'ImageController@showOne']);
  
    $router->post('images', ['uses' => 'ImageController@create']);
  
    $router->delete('images/{id}', ['uses' => 'ImageController@delete']);
  
    $router->put('images/{id}', ['uses' => 'ImageController@update']);
  });
     ////operaion
     $router->group(['prefix' => 'operation'], function () use ($router) {
      $router->get('operations',  ['uses' => 'OperationController@showAll']);
    
      $router->get('operations/{id}', ['uses' => 'OperationController@showOne']);
    
      $router->post('operations', ['uses' => 'OperationController@create']);
    
      $router->delete('operations/{id}', ['uses' => 'OperationController@delete']);
    
      $router->put('operations/{id}', ['uses' => 'OperationController@update']);
    });

     ////perte
     $router->group(['prefix' => 'perte'], function () use ($router) {
      $router->get('pertes',  ['uses' => 'PerteController@showAll']);
    
      $router->get('pertes/{id}', ['uses' => 'PerteController@showOne']);
    
      $router->post('pertes', ['uses' => 'PerteController@create']);
    
      $router->delete('pertes/{id}', ['uses' => 'PerteController@delete']);
    
      $router->put('pertes/{id}', ['uses' => 'PerteController@update']);
    });
         ////regularisation
         $router->group(['prefix' => 'regularisation'], function () use ($router) {
          $router->get('regularisations',  ['uses' => 'RegularisationController@showAll']);
        
          $router->get('regularisations/{id}', ['uses' => 'RegularisationController@showOne']);
        
          $router->post('regularisations', ['uses' => 'RegularisationController@create']);
        
          $router->delete('regularisations/{id}', ['uses' => 'RegularisationController@delete']);
        
          $router->put('regularisations/{id}', ['uses' => 'RegularisationController@update']);
        });

        ////societe
        $router->group(['prefix' => 'societe'], function () use ($router) {
          $router->get('societes',  ['uses' => 'SocieteController@showAll']);
        
          $router->get('societes/{id}', ['uses' => 'SocieteController@showOne']);
        
          $router->post('societes', ['uses' => 'SocieteController@create']);
        
          $router->delete('societes/{id}', ['uses' => 'SocieteController@delete']);
        
          $router->put('societes/{id}', ['uses' => 'SocieteController@update']);
        });
          ////stock
          $router->group(['prefix' => 'stock'], function () use ($router) {
            $router->get('stocks',  ['uses' => 'StockController@showAll']);
          
            $router->get('stocks/{id}', ['uses' => 'StockController@showOne']);
          
            $router->post('stocks', ['uses' => 'StockController@create']);
          
            $router->delete('stocks/{id}', ['uses' => 'StockController@delete']);
          
            $router->put('stocks/{id}', ['uses' => 'StockController@update']);
          });