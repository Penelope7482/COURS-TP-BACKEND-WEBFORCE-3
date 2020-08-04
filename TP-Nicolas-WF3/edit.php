<?php
require 'head.php';
require 'jumbo.php';

//var_dump ($_GET['id']);

//$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
//$request = "SELECT id FROM user where email= :";
//$response = $bdd->prepare($request);
//$response -> execute(['email' => $_GET['email']]);
//$user= $response->fetchAll(PDO::FETCH_ASSOC);


$bdd = new PDO('mysql:host=localhost;dbname=josette_a_velo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM user inner join userplug on userplug.id_user = user.id where id= :id";
$response = $bdd->prepare($request);
$response -> execute(['id' => $_GET['id']]);
$user= $response->fetchAll(PDO::FETCH_ASSOC);

foreach($user as $users){

?>
<section class="resumeForm" style="margin-left:150px; padding-top: 50px;">
    <div class="container">
            <H2>Bonjour <?=$users['firstname']?> <?=$users['lastname']?></H2>
            <div style="text-align: center; padding:30px;">
                 <img src="uploads/<?=$users['uploadFile']?>" alt="<?=$users['uploadFile']?>" style="border-radius: 20px;" >
            </div>
            

           <p> Tu t'es bien inscrit avec le mail : <?=$users['email']?>
            Ton mot de passe: <?=$users['password']?>
            <br/>

            Tu es <?=$users['sexe']?>. Tu es <?=$users['age']?>.
            <br/>
            Voilà un petit récap de ta présentation: <?=$users['presentation']?>.
            <br/>
            Tu parcours en moyenne <?=$users['capacity']?> par sortie.</p>
   </div>
</section>  
<div style="text-align: center; padding : 40px;" >
   <a href="updateIndex.php?id=<?=$users['id']?>"><input type="submit" value="Modifier ma fiche" class="btn btn-primary" >
</a>
    <a href="confirmDelete.php?id=<?=$users['id']?>"><input type="submit" value="Supprimer ma fiche" class="btn btn-primary" style="margin-left: 50px;">
</a>
</div
<?php }
    require 'footer.php';
?>