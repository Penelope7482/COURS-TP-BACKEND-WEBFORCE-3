<?php
require 'header.php';
require 'jumbo.php';


$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', 'root', 'root');

$request = "SELECT * FROM immobilier.logement";
$response =$bdd-> prepare($request);
$response ->execute();
$logements = $response->fetchAll(PDO::FETCH_ASSOC);

//var_dump($logement);
?>
<table>

        <tr>Titre</tr>
        <tr>adresse</tr>
        <tr>Ville</tr>
        <tr>Code Postal</tr>
        <tr>Surface</tr>
        <tr>Prix</tr>
        <tr>Type</tr>
        <tr>Description</tr>
        <tr>Photo</tr>

<?php
foreach($logements as $logement){?>
    <tr>
    <td><a href="editLogement.php?id=<?=$logement['id_logement']?>"><?=$logement['titre']?></a></td>
    <td><?=$logement['adresse']?></td>
    <td><?=$logement['ville']?></td>
    <td><?=$logement['cp']?></td>
    <td><?=$logement['surface']?></td>
    <td><?=$logement['prix']?></td>
    <td><?=$logement['type']?></td>
    <td><?=$logement['description']?></td>
    <td><img src="uploads/<?=$logement['photo']?>" alt="<?=$logement['photo']?>" style="border-radius: 20px; width: 70px; height:70px" ></td>
</tr>


<?php }
?>
</table>
<?php require 'footer.php'?>