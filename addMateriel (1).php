<?php

require 'config/db.php';

function checkFile($file) {
    //Récupération des méta-données sur le fichier
    $pathinfoData = pathinfo($file["name"]);
    $fileExtension = $pathinfoData['extension'];

    $extensionsAutorisees = ["jpg", "png"];
    $typesMimesAutorises = ["image/jpg", "image/png"];

    if (!in_array($fileExtension, $extensionsAutorisees) && !in_array($file["type"], $typesMimesAutorises)) {
      return "Le format de fichier n'est pas pris en charge. Merci d'envoyer un fichier JPEG ou PNG.";
    } else if ($file["size"] > 3145728) {
      return "Le fichier est trop volumineux. Taille maximale autorisée : 3Mb.";
    }

    return null;
}

function saveFile($file) {
    $pathinfoData = pathinfo($file["name"]); 
    $fileName = $pathinfoData['filename'];
    $fileExtension = $pathinfoData['extension'];

    //Renommage pour éviter les conflits
    $nouveauNomDuFichier = $fileName . '-' . uniqid() . '.' . $fileExtension;

    move_uploaded_file($file['tmp_name'],  __DIR__  . '/uploads/' . $nouveauNomDuFichier );
    
    return $nouveauNomDuFichier;
}

function insertMateriel($values, $fileName, $bdd) {
    $sqlRequest = "INSERT INTO sport_a_la_maison.materiel(nom, typeMat, prixAchat, sport, usageCompetition, details, nomFichier)
    VALUES (:nom,:typeMat,:prixAchat,:sport,:usageCompetition,:details, :nomFichier)";

    $pdoRequest = $bdd->prepare($sqlRequest);

    $pdoRequest->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $pdoRequest->bindParam(':typeMat', $_POST['type'], PDO::PARAM_STR);
    $pdoRequest->bindParam(':prixAchat', $_POST['prix'], PDO::PARAM_INT);
    $pdoRequest->bindParam(':sport', $_POST['sport'], PDO::PARAM_STR);
    $pdoRequest->bindParam(':usageCompetition', $_POST['materielCompetition'], PDO::PARAM_BOOL);
    $pdoRequest->bindParam(':details', $_POST['description'], PDO::PARAM_STR);
    $pdoRequest->bindParam(':nomFichier', $fileName, PDO::PARAM_STR);

    $pdoRequest->execute();
}


if (!empty($_POST) && !empty($_FILES)) {
    //Test du fichier envoyé
    $fileSent = $_FILES['photoMateriel'];

    $formErrorMessage = checkFile($fileSent);

    if (is_null($formErrorMessage)) {
        $fileName = saveFile($fileSent);
        insertMateriel($_POST, $fileName, $bdd);
        $infoMessage = "Le matériel a bien été ajouté";
    }
}
?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Ajouter un matériel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <?php if(isset($formErrorMessage) && !is_null($formErrorMessage)) { ?>
            <div class="alert alert-danger mt-2" role="alert">
                <?php echo $formErrorMessage ?>
            </div>            
        <?php } else if(isset($infoMessage))  { ?>
            <div class="alert alert-success mt-2" role="alert">
                <?php echo $infoMessage ?>
            </div>
        <?php } ?>

        <form method="POST" action="addMateriel.php"  enctype="multipart/form-data">
            
            <label for="nom">Nom</label><br/>
            <input type="text" id="nom" name="nom" required><br/>

            <label for="type">Type : </label><br/>
            <input type="text" id="type" name="type" required><br/>

            <label for="prix">Prix d'achat : </label><br/>
            <input type="number" id="prix" name="prix" required><br/>
            
            <label for="sport">Sport : </label><br/>
            <input type="text" id="sport" name="sport" required><br/>
            
            <input type="checkbox" id="materielCompetition" name="materielCompetition">
            <label for="materielCompetition">Matériel de compétition</label><br/>

            <label for="description">Description : </label><br/>
            <textarea id="description" name="description" required></textarea><br/>

            <input type="file" name="photoMateriel" required><br/><br/>
            
            <button type="submit">Ajouter le matériel</button>
        </form>
    </div>
</body>

</html>
