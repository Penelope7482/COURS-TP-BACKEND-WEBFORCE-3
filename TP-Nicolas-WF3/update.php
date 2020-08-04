<?php 
require 'head.php';
require 'jumbo.php';

//var_dump($_POST['id']);
// Récupération dans la bdd de la fiche du client à updater
//$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
//$request = "SELECT * FROM user where id = :id";
//$response = $bdd->prepare($request);
//$response-> execute(['id' => $_POST['id']]);
//$user= $response->fetchAll(PDO::FETCH_ASSOC);
//var_dump($user);

//var_dump($_FILES);



//recherche dans la base de données la fiche de l'id à updater + les fiches qui ont même password et même mail
$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT id, email, password FROM user where id= :id OR  email= :email OR password= :password";
$response = $bdd->prepare($request);
$response-> execute([
    'id'    => $_POST['id'],   
    'email' => $_POST['email'],
    'password' => $_POST['password']]);
$allUser= $response->fetchAll(PDO::FETCH_ASSOC);
//echo 'vardump $allUser:' ;
//var_dump($allUser);

foreach($allUser as $allUsers){
//    echo 'vardump $allUsers:' ;
//    var_dump($allUsers);
//    echo "vardump _POST['password']:" ;
//    var_dump($_POST['password']);
//    echo 'vardump $allUsers ID:' ;
//    var_dump($allUsers['id']);
//    echo "vardump value['email']" ;
//    var_dump($allUsers['email']);
//Si sur une fiche le mail et le mot de passe et l'id de update st présent -> maj
 //   if($_POST['id']==$allUsers['id'] AND $_POST['email']==$allUsers['email'] AND $_POST['password']==$allUsers['password']){
//        echo 'MAJ 1';
//    }
// si sur une fiche même mail et même password mais id différent -> erreur
    if($_POST['id']!==$allUsers['id'] AND $_POST['email']==$allUsers['email'] AND $_POST['password']==$allUsers['password']){ ?>
       
       <div style="text-align: center; padding : 40px;">
            <h2 style="text-align: center; color: red; padding : 40px; ">Veuillez choisir un autre mot de passe et un autre email</h2>
            <a href="updateIndex.php?id=<?=$_POST['id']?>" ><button class="btn btn-danger" >Retour au formulaire de mise à jour</button></a>
        </div>
    
    <?php }

//Si sur une fiche même mail mais id différent -> mess erreur
    elseif($_POST['id']!==$allUsers['id'] AND $_POST['email']==$allUsers['email']){ ?>
        <div style="text-align: center; padding : 40px;">
            <h2 style="text-align: center; color: red; padding : 40px;">Cet email existe déjà, veuillez en choisir un autre</h2>
            <a href="updateIndex.php?id=<?=$_POST['id']?>" ><button class="btn btn-danger">Retour au formulaire de mise à jour</button></a> 
        </div>
     <?php 
    }
// si sur une fiche même password mais id différent -> mess erreur
    elseif($allUsers['id']!==$_POST['id'] AND $_POST['password']==$allUsers['password']){
        ?>
        <div style="text-align: center; padding : 40px;">
            <h2 style="text-align: center; color: red; padding : 40px;">Ce mot de passe est déjà utilisé. Veuillez en choisir un autre! </h2>
            <a href="updateIndex.php?id=<?=$id?>" ><button class="btn btn-danger">Retour au formulaire de mise à jour</button></a>
    </div>
    <?php 
    }
//si (même id , pass et mail) -> maj
    elseif(($_POST['id']==$allUsers['id'] AND $_POST['email']==$allUsers['email'] AND $_POST['password']==$allUsers['password'])){
        
                //récupération des données du fichier uploadé
                $photoUser = $_FILES['uploadFile'];
                var_dump($_FILES);
                $tailleDuFichier = $photoUser['size'];
                //Récupération du chemin du fichier uploadé: 
               
                //renommer le fichier avec un id unique et le déplacer de son emplacement temporaire

        
        
        if (isset($photoUser) && $photoUser!==0){
            $bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
            $request ="UPDATE user inner join userplug on user.id = userplug.id_user
            SET id=  :id, lastname = :lastname, firstname = :firstname, age = :age, sexe = :sexe, email= :email, password= :password,
            capacity= :capacity, presentation = :presentation
            where id= :id";
            $response = $bdd->prepare($request);
            $response ->execute([
                    'id' => $_POST['id'],
                    'lastname' => $_POST['lastname'],
                    'firstname' => $_POST['firstname'],
                    'age' => $_POST['age'],
                    'sexe' => $_POST['sexe'],
                    'email'=> $_POST['email'], 
                    'password'=> $_POST['password'],
                    'capacity'=>  $_POST['capacity'], 
                    'presentation' => $_POST['presentation'], 
                    
            ]);}
        else{

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
            move_uploaded_file($photoUser['tmp_name'], __DIR__ . '/uploads/' . $nouveauNomDuFichier);
            }

            $bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
            $request ="UPDATE user inner join userplug on user.id = userplug.id_user
            SET id=  :id, lastname = :lastname, firstname = :firstname, age = :age, sexe = :sexe, email= :email, password= :password,
            capacity= :capacity, presentation = :presentation, uploadFile = :uploadFile
            where id= :id";
            $response = $bdd->prepare($request);
            $response ->execute([
                    'id' => $_POST['id'],
                    'lastname' => $_POST['lastname'],
                    'firstname' => $_POST['firstname'],
                    'age' => $_POST['age'],
                    'sexe' => $_POST['sexe'],
                    'email'=> $_POST['email'], 
                    'password'=> $_POST['password'],
                    'capacity'=>  $_POST['capacity'], 
                    'presentation' => $_POST['presentation'], 
                    'uploadFile' => $nouveauNomDuFichier,
            ]);}
   // $response->debugDumpParams();
    ?>
<div style="text-align: center; padding : 40px;">
    <h2 style="text-align: center; color: blue; padding : 40px;">Votre compte a été mis à jour</h2>
    <a href="edit.php?id=<?=$_POST['id']?>"><button class="btn btn-info">Voir mon compte</button></a> 
</div>
<?php }
    else{
        echo '';
    }
}

require 'footer.php';
?>