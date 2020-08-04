<?php


$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "INSERT INTO animal (espece, nom, taille, poids, pays_origine, sexe, date_de_naissance) VALUES (:espece, :nom,  :taille, :poids, :pays_origine, :sexe, :date_de_naissance)" ;
var_dump($request);

$nouvelAnimal=$bdd->prepare($request);
$nouvelAnimal->execute([    
        'espece' => $_POST['espece'],
        'nom' => $_POST['nom'],
        'taille'=> $_POST['taille'],  
        'poids' => $_POST['poids'], 
        'pays_origine' => $_POST['pays_origine'],
        'sexe' => $_POST['sexe'],
        'date_de_naissance' => $_POST['date_de_naissance'],
]);


header('Location: index.php');

?>