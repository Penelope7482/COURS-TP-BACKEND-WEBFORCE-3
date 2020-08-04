<?php

//var_dump($_GET);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request ="DELETE FROM animal where id=:id";
//var_dump($request);
$response=$bdd->prepare($request);
$response -> execute([
              'id' => $_GET['id']
              ]);


///echo 'La fiche a été supprimée avec succès!'
header('Location: index.php');
?>

