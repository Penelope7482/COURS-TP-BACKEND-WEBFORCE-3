<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controller');

$router->get('/', 'AppController@index');

/**
 * Insérez vos routes ici
 * 
*/

$router->get('/vehicule', 'VehiculeController@index');
$router->get('/vehicule/(\d+)', 'VehiculeController@show');
$router->get('/vehicule/create', 'VehiculeController@create');
$router->post('/vehicule', 'VehiculeController@new');
$router->get('/vehicule/(\d+)/edit', 'VehiculeController@edit');
$router->post('/vehicule/(\d+)/edit', 'VehiculeController@update');
$router->get('/vehicule/(\d+)/delete', 'VehiculeController@delete');

$router->get('/conducteur', 'ConducteurController@index');
$router->get('/conducteur/(\d+)', 'ConducteurController@show');
$router->get('/conducteur/create', 'ConducteurController@create');
$router->post('/conducteur', 'ConducteurController@new');
$router->get('/conducteur/(\d+)/edit', 'ConducteurController@edit');
$router->post('/conducteur/(\d+)/edit', 'ConducteurController@update');
$router->get('/conducteur/(\d+)/delete', 'ConducteurController@delete');



$router->get('/associationVehiculeConducteur', 'AssociationVehiculeConducteurController@index');
$router->get('/associationVehiculeConducteur/(\d+)', 'AssociationVehiculeConducteurController@show');
$router->get('/associationVehiculeConducteur/create', 'AssociationVehiculeConducteurController@create');
$router->post('/associationVehiculeConducteur', 'AssociationVehiculeConducteurController@new');
$router->get('/associationVehiculeConducteur/(\d+)/edit', 'AssociationVehiculeConducteurController@edit');
$router->post('/associationVehiculeConducteur/(\d+)/edit', 'AssociationVehiculeConducteurController@update');
$router->get('/associationVehiculeConducteur/(\d+)/delete', 'AssociationVehiculeConducteurController@delete');


$router->run();
