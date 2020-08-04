<?php
if (empty($_POST['email'])):?>
  <p>Vous avez oublié le champs email</p>
<?php endif;?>

<?php if(empty($_POST['password'])):?>
   <p>Vous avez oublié le champs password</p>
<?php endif;?>
 <?php

 include ('array.php');

 var_dump($_POST['rôle']);

$colonne_email= array_column($carte, 'email');
$key = array_search($_POST['email'], $colonne_email);
$cartes=$carte[$key];

var_dump($carte);
var_dump($cartes);

if ($_POST['rôle']==$cartes['rôle'] AND $_POST['email']==$cartes['email'] AND $_POST['password']==$cartes['password']):?>
    <p>Vous êtes connecté! Voici les plans du V2</p>
<?php ; else:?>
    <p>Vous n'avez pas le droit de vous connecter!</p>   
<?php   endif ;?>

