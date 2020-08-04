<?php 
    require 'head.php';
     require 'jumbo.php';

var_dump($_FILES);
$photoUser = $_FILES['uploadFile'];


$tailleDuFichier = $photoUser['size'];
$pathinfoData = pathinfo($photoUser["name"]);
$nomDuFichier=$pathinfoData['filename'];
$extensionDuFichier=$pathinfoData['extension'];
$nouveauNomDuFichier = $nomDuFichier. '-' . uniqid() . '.' . $extensionDuFichier;
move_uploaded_file($photoUser['tmp_name'], __DIR__ . '/uploads/' . $nouveauNomDuFichier);
?>