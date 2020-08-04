<?php 
require 'head.php'; 
require 'jumbo.php'; ?>

<div class="container" style="text-align: center; padding:50px;">
    <H2 style="padding-bottom:50px;">Etes-vous sûr de vouloir supprimer votre compte?</H2>
    <a href="delete.php?id=<?=$_GET['id']?>"><button class="btn btn-primary">Oui</button></a>
    <a href="index.php?id=<?=$_GET['id']?>"><button class="btn btn-primary" style="margin-left: 50px;">Non, je préfère retourner à la page d'accueil</button></a>
</div>

<?php
require 'footer.php';
?>