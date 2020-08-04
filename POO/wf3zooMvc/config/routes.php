<?php

//use App\Controller\ArticlesController;
use Bramus\Router\Router;

$router = new Router;
$router->setNamespace('App\controller');

$router->get('/', 'AppController@index');

$router->get('/zoo', 'zooController@index');
$router->get('/zoo/(\d+)', 'zooController@show');
$router->get('/zoo/create', 'zooController@create');
$router->post('/zoo', 'zooController@new');
$router->get('/zoo/(\d+)/edit', 'zooController@edit');
$router->post('/zoo/(\d+)/edit', 'zooController@update');
$router->get('/zoo/(\d+)/delete', 'zooController@delete');



$router->get('/animal', 'AnimalController@index');
$router->get('/animal/(\d+)', 'AnimalController@show');
$router->get('/animal/create', 'AnimalController@create');
$router->post('/animal', 'AnimalController@new');
$router->get('/animal/(\d+)/edit', 'AnimalController@edit');
$router->post('/animal/(\d+)/edit', 'AnimalController@update');
$router->get('/animal/(\d+)/delete', 'AnimalController@delete');



$router->get('/animalZoo', 'AnimalZooController@index');
$router->get('/animalZoo/(\d+)', 'AnimalZooController@show');
$router->get('/animalZoo/create', 'AnimalZooController@create');
$router->post('/animalZoo', 'AnimalZooController@new');
$router->get('/animalZoo/(\d+)/edit', 'AnimalZooController@edit');
$router->post('/animalZoo/(\d+)/edit', 'AnimalZooController@update');
$router->get('/animalZoo/(\d+)/delete', 'AnimalZooController@delete');

$router->run();

//$router->setNamespace('App\controller');
//$router->get('/articles', 'ArticlesController@index');
//$router->get('/articles/(\d+)', 'ArticlesController@show(int $id)');
//$router->get('/articles/create', 'ArticlesController@create');
//$router->post('/articles', 'ArticlesController@new');
//$router->get('/articles/(\d+)/edit', 'ArticlesController@edit(int $id)');
//$router->post('/articles/(\d+)/edit', 'ArticlesController@update');
//$router->post('/articles/(\d+)/delete', 'ArticlesController@delete(int $id)');
//

//$router->get('/animal', function(){
//    echo "Bienvenue sur la page Animal";
//});
//
//$router->get('/zoo', function(){
//    echo "Bienvenue sur la page zoo";
//});
//
//$router->get('/AnimalZoo', function(){
//    echo "Bienvenue sur la page AnimalZoo";
//});
//
//$router->get('/animaux', function(){
//
//});
//


//$router->get('/accueil', function(){
//    echo "Hello World!";
//});//

//$router->get('/conditions', function(){
//    echo "Voici les conditions d'utilisations!";
//});//

//$router->get('/articles/(\d+)', function($id){
//    echo "Voici l'article numéro ".$id."!";
//});//

//$router->get('/product/([a-z0-9_-]+)', function($id){
//    echo "Voici le produit demandé:".$id."!";
//});//

//$router->get('/truc', function(){
//    header('Location: conditions');
//});

//$router->setNamespace('App\controller');
//$router->get('/articles', 'ArticlesController@index');
//$router->get('/articles/(\d+)', 'ArticlesController@show');

//$router->get('/Animal', function(){
//    echo "voici l'Animal";
//});
//$router->get('/movies/{foo}/photos/{bar}', function($movieId, $photoId) {
//    echo 'Movie #' . $movieId . ', photo #' . $photoId);
//});


?>