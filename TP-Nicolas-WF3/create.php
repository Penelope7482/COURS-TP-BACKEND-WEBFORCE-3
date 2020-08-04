<?php 
    require 'head.php';
     require 'jumbo.php';

//var_dump($_FILES);
//récupération des données du fichier uploadé
$photoUser = $_FILES['uploadFile'];

$tailleDuFichier = $photoUser['size'];
//Récupération du chemin du fichier uploadé: 
$pathinfoData = pathinfo($photoUser["name"]);
$nomDuFichier=$pathinfoData['filename'];
$extensionDuFichier=$pathinfoData['extension'];
//Création variables sur les extensions autorisées
$extensionsAutorisees=['jpg', 'jpeg', 'png'];
$typesMimeAutorises = ['image/jpg', 'image/jpeg', 'image/png'];
//si taille est > 2Mb afficher "Le fichier est supérieur à la taille max autorisée de 2Mo"
if ($tailleDuFichier > 2097152){
    return 'Le fichier est supérieur à la taille max autorisée de 2Mo';
}
elseif (!in_array($extensionDuFichier, $extensionsAutorisees) && !in_array($photoUser['type'], $typesMimeAutorises)){
    return 'Le format de fichier n\'est pas pris en charge. Merci d\'envoyer un fichier en jpg, jpeg ou png';
}
else{
    $nouveauNomDuFichier = $nomDuFichier. '-' . uniqid() . '.' . $extensionDuFichier;
move_uploaded_file($photoUser['tmp_name'], __DIR__ . '/uploads/' . $nouveauNomDuFichier);;
}
//renommer le fichier avec un id unique et le déplacer de son emplacement temporaire


//var_dump($nouveauNomDuFichier);

//var_dump($_POST);
//appel dans la table user avec email et password de la nouvelle fiche
$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT email, password FROM user where email= :email OR password= :password";
$response= $bdd->prepare($request);
$response->execute([
    'email'=> $_POST['email'],
    'password' => $_POST['password']]);
//$response->debugDumpParams();
$user = $response->fetchAll((PDO::FETCH_ASSOC));

//si le tableau retourné est vide: création de la fiche
if (isset($_POST['email']) AND isset($_POST['password']) AND $user == null){ 
    $bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
    $request = "INSERT INTO user (lastname, firstname, age, sexe, email, password) 
    VALUES (:lastname, :firstname, :age, :sexe, :email, :password)";
    $response = $bdd ->prepare($request);
    $response -> execute([    
        'lastname' => $_POST['lastname'],
        'firstname'=> $_POST['firstname'], 
        'age'=> $_POST['age'], 
        'sexe'=> $_POST['sexe'], 
        'email'=> $_POST['email'], 
        'password'=> $_POST['password']
    ]);

    //var_dump($response);
    $userId = $bdd->lastInsertId();

    //$response->debugDumpParams();
    
    // $bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
    // $request= "SELECT MAX(ID) AS max_Id FROM user";
    // $response = $bdd->query($request);
    // $id = $response->fetch(PDO::FETCH_ASSOC);   
     //var_dump($userId);
    
    $bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
    $request = "INSERT INTO userPlug (id_user, capacity, presentation, uploadFile) 
    VALUES (:id_user, :capacity, :presentation, :uploadFile)";
    $response = $bdd ->prepare($request);
    $response -> execute([    
        'id_user'=> $userId, 
        'capacity'=> $_POST['capacity'], 
        'presentation'=> $_POST['presentation'], 
        'uploadFile'=> $nouveauNomDuFichier,
    ]);
//var_dump($userId);

    ?>
    <div style="text-align: center; padding : 40px;" >
        <h2 >Félicitations pour votre inscription</h2>
        <a href="edit.php?id=<?=$userId?>" ><button class="btn btn-danger">Voir ma fiche</button></a> 
    </div>


<?php }

//sinon, 
// dans le tableau retourné, si mail correspond à 1 mail, afficher message d'erreur
else {
    foreach($user as $users){
        if ($_POST['email'] == $users['email']){
            ?>
            <div style="text-align: center; color: red; padding : 40px;">
                <h2 style="text-align: center; color: red; padding : 40px;" >Cet email existe déjà, veuillez en choisir un autre</h2>
                <a href="index.php" ><button class="btn btn-danger"  >Retour au formulaire</button></a> 
            </div>
         <?php 
        }
//sinon si password corresp à 1 password, afficher message d'erreur.
        elseif($_POST['password'] == $users['password']){?>
            <div style="text-align: center; padding : 40px;" >
                <h2 style="text-align: center; color: red; padding : 40px; ">Ce mot de passe est déjà utilisé. Veuillez en choisir un autre! </h2>
                <a href="index.php" ><button class="btn btn-info" >Retour au formulaire</button></a>
            <div>
        <?php 
        }
        else{
            return '';
        }
    }
};




require 'footer.php';
?>