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
         ////categorie
         $router->group(['prefix' => 'categorie'], function () use ($router) {
          $router->get('categories',  ['uses' => 'CategorieController@showAll']);
        
          $router->get('categories/{id}', ['uses' => 'CategorieController@showOne']);
        
          $router->post('categories', ['uses' => 'CategorieController@create']);
        
          $router->delete('categories/{id}', ['uses' => 'CategorieController@delete']);
        
          $router->put('categories/{id}', ['uses' => 'CategorieController@update']);
        });
      ////tva
      $router->group(['prefix' => 'tva'], function () use ($router) {
        $router->get('tvas',  ['uses' => 'TvaController@showAll']);
      
        $router->get('tvas/{id}', ['uses' => 'TvaController@showOne']);
      
        $router->post('tvas', ['uses' => 'TvaController@create']);
      
        $router->delete('tvas/{id}', ['uses' => 'TvaController@delete']);
      
        $router->put('tvas/{id}', ['uses' => 'TvaController@update']);
      });
    ////condition
    $router->group(['prefix' => 'condition'], function () use ($router) {
      $router->get('conditions',  ['uses' => 'ConditionController@showAll']);
    
      $router->get('conditions/{id}', ['uses' => 'ConditionController@showOne']);
    
      $router->post('conditions', ['uses' => 'ConditionController@create']);
    
      $router->delete('conditions/{id}', ['uses' => 'ConditionController@delete']);
    
      $router->put('conditions/{id}', ['uses' => 'ConditionController@update']);
    });
    ////delai
    $router->group(['prefix' => 'delai'], function () use ($router) {
      $router->get('delais',  ['uses' => 'DelaiController@showAll']);
    
      $router->get('delais/{id}', ['uses' => 'DelaiController@showOne']);
    
      $router->post('delais', ['uses' => 'DelaiController@create']);
    
      $router->delete('delais/{id}', ['uses' => 'DelaiController@delete']);
    
      $router->put('delais/{id}', ['uses' => 'DelaiController@update']);
    });
    ////tva
    $router->group(['prefix' => 'mode'], function () use ($router) {
      $router->get('modes',  ['uses' => 'ModeController@showAll']);
    
      $router->get('modes/{id}', ['uses' => 'ModeController@showOne']);
    
      $router->post('modes', ['uses' => 'ModeController@create']);
    
      $router->delete('modes/{id}', ['uses' => 'ModeController@delete']);
    
      $router->put('modes/{id}', ['uses' => 'ModeController@update']);
    });
     ////devis
     $router->group(['prefix' => 'devis'], function () use ($router) {
      $router->get('devis',  ['uses' => 'DevisController@showAll']);
    
      $router->get('devis/{id}', ['uses' => 'DevisController@showOne']);
    
      $router->post('devis', ['uses' => 'DevisController@create']);
    
      $router->delete('devis/{id}', ['uses' => 'DevisController@delete']);
    
      $router->put('devis/{id}', ['uses' => 'DevisController@update']);
    });
    //liste devis
    $router->group(['prefix' => 'listedevi'], function () use ($router) {
      $router->get('listedevi',  ['uses' => 'ListeDevisController@showAll']);
    
      $router->get('listedevi/{id}', ['uses' => 'ListeDevisController@showOne']);
    
      $router->post('listedevis', ['uses' => 'ListeDevisController@create']);
    
      $router->delete('listedevi/{id}', ['uses' => 'ListeDevisController@delete']);
    
      $router->put('listedevi/{id}', ['uses' => 'ListeDevisController@update']);
    });

    //liste Bon sortie 
      $router->group(['prefix' => 'listeBonSortie'], function () use ($router) {
        $router->get('listeBonSortie',  ['uses' => 'ListeBonSortieController@showAll']);
      
        $router->get('listeBonSortie/{id}', ['uses' => 'ListeBonSortieController@showOne']);
      
        $router->post('listeBonSorties', ['uses' => 'ListeBonSortieController@create']);
      
        $router->delete('listeBonSortie/{id}', ['uses' => 'ListeBonSortieController@delete']);
      
        $router->put('listeBonSortie/{id}', ['uses' => 'ListeBonSortieController@update']);
      });
        //liste Bon retour
        $router->group(['prefix' => 'listeBonRetour'], function () use ($router) {
          $router->get('listeBonRetour',  ['uses' => 'ListeBonRetourController@showAll']);
        
          $router->get('listeBonRetour/{id}', ['uses' => 'ListeBonRetourController@showOne']);
        
          $router->post('listeBonRetours', ['uses' => 'ListeBonRetourController@create']);
        
          $router->delete('listeBonRetour/{id}', ['uses' => 'ListeBonRetourController@delete']);
        
          $router->put('listeBonRetour/{id}', ['uses' => 'ListeBonRetourController@update']);
        });
        //reservation
        
        $router->group(['prefix' => 'reservation'], function () use ($router) {
          $router->get('reservation',  ['uses' => 'ReservationController@showAll']);
        
          $router->get('reservation/{id}', ['uses' => 'ReservationController@showOne']);
        
          $router->post('reservations', ['uses' => 'ReservationController@create']);
        
          $router->delete('reservation/{id}', ['uses' => 'ReservationController@delete']);
        
          $router->put('reservation/{id}', ['uses' => 'ReservationController@update']);
        });
         //listreservation
        
         $router->group(['prefix' => 'listeReservation'], function () use ($router) {
          $router->get('listeReservation',  ['uses' => 'ListeReservationController@showAll']);
        
          $router->get('listeReservation/{id}', ['uses' => 'ListeReservationController@showOne']);
        
          $router->post('listeReservations', ['uses' => 'ListeReservationController@create']);
        
          $router->delete('listeReservation/{id}', ['uses' => 'ListeReservationController@delete']);
        
          $router->put('listeReservation/{id}', ['uses' => 'ListeReservationController@update']);
        });
     
        //abscence
     
        
          $router->group(['prefix' => 'abscence'], function () use ($router) {
            $router->get('abscence',  ['uses' => 'AbscenceController@showAll']);
          
            $router->get('abscence/{id}', ['uses' => 'AbscenceController@showOne']);
          
            $router->post('abscences', ['uses' => 'AbscenceController@create']);
          
            $router->delete('abscence/{id}', ['uses' => 'AbscenceController@delete']);
          
            $router->put('abscence/{id}', ['uses' => 'AbscenceController@update']);
          });
          //pointage
          
          $router->group(['prefix' => 'pointage'], function () use ($router) {
            $router->get('pointage',  ['uses' => 'PointageController@showAll']);
          
            $router->get('pointage/{id}', ['uses' => 'PointageController@showOne']);
          
            $router->post('pointages', ['uses' => 'PointageController@create']);
          
            $router->delete('pointage/{id}', ['uses' => 'PointageController@delete']);
          
            $router->put('pointage/{id}', ['uses' => 'PointageController@update']);
          });
          //demande congé
          
          $router->group(['prefix' => 'demandeConge'], function () use ($router) {
            $router->get('demandeConge',  ['uses' => 'DemandeCongeController@showAll']);
          
            $router->get('demandeConge/{id}', ['uses' => 'DemandeCongeController@showOne']);
          
            $router->post('demandeConges', ['uses' => 'DemandeCongeController@create']);
          
            $router->delete('demandeConge/{id}', ['uses' => 'DemandeCongeController@delete']);
          
            $router->put('demandeConge/{id}', ['uses' => 'DemandeCongeController@update']);
          });
          //solde Congé
          
          $router->group(['prefix' => 'soldeConge'], function () use ($router) {
            $router->get('soldeConge',  ['uses' => 'SoldeCongeController@showAll']);
          
            $router->get('soldeConge/{id}', ['uses' => 'SoldeCongeController@showOne']);
          
            $router->post('soldeConges', ['uses' => 'SoldeCongeController@create']);
          
            $router->delete('soldeConge/{id}', ['uses' => 'SoldeCongeController@delete']);
          
            $router->put('soldeConge/{id}', ['uses' => 'SoldeCongeController@update']);
          });
          //salaire
          
          $router->group(['prefix' => 'salaire'], function () use ($router) {
            $router->get('salaire',  ['uses' => 'SalaireController@showAll']);
          
            $router->get('salaire/{id}', ['uses' => 'SalaireController@showOne']);
          
            $router->post('salaires', ['uses' => 'SalaireController@create']);
          
            $router->delete('salaire/{id}', ['uses' => 'SalaireController@delete']);
          
            $router->put('salaire/{id}', ['uses' => 'SalaireController@update']);
          });
          //prime
          
          $router->group(['prefix' => 'prime'], function () use ($router) {
            $router->get('prime',  ['uses' => 'PrimeController@showAll']);
          
            $router->get('prime/{id}', ['uses' => 'PrimeController@showOne']);
          
            $router->post('primes', ['uses' => 'PrimeController@create']);
          
            $router->delete('prime/{id}', ['uses' => 'PrimeController@delete']);
          
            $router->put('prime/{id}', ['uses' => 'PrimeController@update']);
          });
       