<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3movies;charset=utf8;port=3306', 'root', 'root');

$request = "SELECT * FROM movies where id= :id";
$response = $bdd->prepare($request);
$response -> execute(['id'=>$_GET['id']]);
$movie = $response->fetch(PDO::FETCH_OBJ);

var_dump($_GET['id']);

?>
<p> Le film numéro <?=$_GET['id']?> a pour titre "<?=$_GET['title']?>"</p>
<p> Son réalisateur est "<?=$_GET['director']?>". Il appartient à la catégorie "<?=$_GET['category']?>" et il est sortie le <?=$_GET['release_date']?></p>

