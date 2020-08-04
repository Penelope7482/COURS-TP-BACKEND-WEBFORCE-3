<?php


$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "UPDATE animal 
SET espece = :espece, nom = :nom, taille = :taille, poids= :poids, pays_origine = :pays_origine, sexe = :sexe, date_de_naissance = :date_de_naissance
WHERE id = :id" ;
var_dump($request);


$response=$bdd->prepare($request);

$response->execute([    
         'id' => $_POST['id'],
        'espece' => $_POST['espece'],
        'nom' => $_POST['nom'],
        'taille'=> $_POST['taille'],  
        'poids' => $_POST['poids'], 
        'pays_origine' => $_POST['pays_origine'],
        'sexe' => $_POST['sexe'],
        'date_de_naissance' => $_POST['date_de_naissance'],
]);

$response->debugDumpParams();

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM animal";
$response = $bdd->query($request);
$animals = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($animals);



header('Location: index.php');

?>