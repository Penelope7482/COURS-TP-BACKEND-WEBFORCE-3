<?php   require 'head.php' ;
        require 'jumbo.php' ;

        
$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$request = "SELECT id, email, password FROM user where email= :email AND password= :password";
$response= $bdd->prepare($request);
$response->execute([
    'email'=> $_POST['email'],
    'password' => $_POST['password']]);
//$response->debugDumpParams();
$user = $response->fetchAll((PDO::FETCH_ASSOC));

  foreach ($user as $users){
       $id = $users['id'];
       // var_dump($id);
    }
if (isset($_POST['email']) AND isset($_POST['password']) AND $user == null){?>
    <div style="text-align: center;" >
        <h2 style="text-align: center; color: red; padding : 40px;">Erreur d'identification</h2>
        <a href="login.php" ><button class="btn btn-danger">M'identifier</button></a><a href="index.php" ><button class="btn btn-info" style="margin-left:50px;" >M'inscrire</button></a> 
    </div>
<?php }
else{  
    ?>
     <div style="text-align: center;" >
        <h2 style="text-align: center; color: green; padding : 40px;">Vous êtes connecté</h2>
        <a href="edit.php?id=<?=$id?>" ><button class="btn btn-info" style="margin-bottom :50px" >Voir ma fiche</button></a> 
     </div>
<?php }


require 'footer.php'?>