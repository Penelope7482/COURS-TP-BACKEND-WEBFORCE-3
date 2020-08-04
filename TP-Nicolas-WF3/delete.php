<?php 
require 'head.php'; 
require 'jumbo.php';

var_dump($_GET['id']);

$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
$request = "DELETE FROM userplug where id_user= :id";
$response = $bdd->prepare($request);
$response->execute([
    'id' => $_GET['id'],
]);

$response -> debugDumpParams();

$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
$request = "DELETE FROM user WHERE id= :id";
$response = $bdd->prepare($request);
$response->execute([
    'id' => $_GET['id'],
]);
$response -> debugDumpParams();
?>

<div class="container">
    <h2>Votre compte a été supprimé avec succès</h2>
    <a href="index.php">Retour à la page d'accueil</a>
</div>


<?php
require 'footer.php';
?>