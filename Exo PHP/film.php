<?php
include ('variableMovies.php');
var_dump($_GET['id']);
$colonne_id=array_column($movies, 'id');
$key = array_search($_GET['id'],$colonne_id);
$movieTrouve=$movies[$key];

var_dump($movieTrouve);

echo 'Vous avez demandé le film numéro '. $_GET['id']."<br>";
echo $movies[$key]['title']. "<br>";
echo $movies[$key]['director']."<br>";
echo $movies[$key]['category']. "<br><br>";

foreach($movies[$key] as $caract => $value){
    echo $caract . " : ".$value . "<br>";
}
?>

