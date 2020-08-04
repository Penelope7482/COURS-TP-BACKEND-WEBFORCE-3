<?php

require 'header.php';
require 'jumbo.php';

//var_dump($_FILES);
//var_dump($_POST);

$photo = $_FILES['photo'];

if ($_POST['prix']<=0 || $_POST['surface']<=0){?>

    <h2> Aucune valeur ne doit être négative. Veuillez vérifier les champs Prix et Surface</h2>
    <a href="index.php"><H3>Retour au Formulaire</H3></a>
<?php }
else{
    if($photo['size']!==0 && !empty($_POST)){ 

  
    $tailleDuFichier = $photo['size'];
    //Récupération du chemin du fichier uploadé: 
    $pathinfoData = pathinfo($photo["name"]);
    $nomDuFichier=$pathinfoData['filename'];
    $extensionDuFichier=$pathinfoData["extension"];
    //Création variables sur les extensions autorisées
    $extensionsAutorisees=['jpg', 'jpeg', 'png'];
    $typesMimeAutorises = ['image/jpg', 'image/jpeg', 'image/png'];
    //si taille est > 2Mo afficher "Le fichier est supérieur à la taille max autorisée de 2Mo"
    if ($tailleDuFichier > 2097152){
        echo 'Le fichier est supérieur à la taille max autorisée de 2Mo';
    }
    elseif (!in_array($extensionDuFichier, $extensionsAutorisees) && !in_array($photo['type'], $typesMimeAutorises)){
      echo 'Le format de fichier n\'est pas pris en charge. Merci d\'envoyer un fichier en jpg, jpeg ou png';
        }

    else{
    $nouveauNomDuFichier = $nomDuFichier. '-' . time() . '.' . $extensionDuFichier;
    move_uploaded_file($photo['tmp_name'], __DIR__ . '/uploads/' . $nouveauNomDuFichier);
    }
    $bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root');

    $request = "INSERT INTO LOGEMENT (titre, adresse, ville, cp, surface, prix, photo, type, description) 
    VALUES (:titre, :adresse,:ville, :cp, :surface,:prix, :photo,:type,:description)";
    $response = $bdd->prepare($request);
    $response->execute([
        'titre'         => $_POST['titre'],
        'adresse'       => $_POST['adresse'],
        'ville'         => $_POST['ville'],
        'cp'            => $_POST['cp'],
        'surface'       => $_POST['surface'],
        'prix'          => $_POST['prix'],
        'photo'         => $nouveauNomDuFichier, 
        'type'          => $_POST['type'], 
        'description'   => $_POST['description'],
    ]);
    }

    else{
        
    $bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root');

 
    $request = "INSERT INTO LOGEMENT (titre, adresse, ville, cp, surface, prix, type, description) 
    VALUES ( :titre, :adresse, :ville, :cp, :surface, :prix, :type, :description)";
    $response = $bdd->prepare($request);
    $response->execute([
        'titre'         => $_POST['titre'],
        'adresse'       => $_POST['adresse'],
        'ville'         => $_POST['ville'],
        'cp'            => $_POST['cp'],
        'surface'       => $_POST['surface'],
        'prix'          => $_POST['prix'],
        'type'          => $_POST['type'], 
        'description'   => $_POST['description'],
    ]);
    }
?>
     <h2>Le Logement a bien été ajouté</h2>

     <a href="edit.php"><input type="text" value="Voir la fiche du logement"></a>
    <br>

<?php  } 

 
    require 'footer.php';
?>