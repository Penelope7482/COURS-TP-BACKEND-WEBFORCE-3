<?php   
 $name = 'Pénélope';
 echo $name;
?>
<hr>
<?php
 $lastName = "Potter";
 $firstName  = "Harry";
 $age = 15;

 var_dump ( $lastName. " ".$firstName. " ".$age);
 ?>
<hr>
<?php
$km = 1;
var_dump($km);
$km = 3;
var_dump($km);
$km=125;
var_dump($km);
?>
<hr>
<?php
$animal = 'vache';
$numero = 145;
$division = 2.45;
$vraiFaux = true;

var_dump($animal); 
var_dump($numero);
var_dump($division);
var_dump($vraiFaux);
?>
<hr>
<?php
$metreNeige=NULL;
var_dump($metreNeige);
$metreNeige = 5;
var_dump($metreNeige);
?>
<hr>
<?php
$nameExo6='Thomas';
var_dump("Bonjour " . $nameExo6 .", comment vas tu?");
?>
<hr>
<?php
$lastName = 'Granger';
$firstName = 'Hermione';
$age = 16;
var_dump("Bonjour " . $firstName . ' '.$lastName . ', tu as '.$age.' ans')
?>
<hr>

<?php
echo 'exercice 1';

$age = 37;
if ($age>=18){
    var_dump('vous êtes majeur');
}
else{
    var_dump('Vous êtes mineur');
}

echo 'exercice 2';

$isEasy = true;
if(true){
    var_dump('C\'est facile');
} else{
    var_dump('C\'est difficile');
}

$isEasy = true;
if(1){
    var_dump('C\'est facile');
} else {
    var_dump('C\'est difficile');
}

echo 'exercice 3';
$age = 36; 
$gender = 'Femme';

if ($age >= 18 && $gender === 'Homme') {
    echo 'Vous êtes un homme et vous êtes majeur';
}

elseif($age < 18 && $gender === 'Homme') {
    echo 'Vous êtes un homme et vous êtes mineur';
}

elseif ($age >= 18 && $gender === 'Femme') {
    echo 'Vous êtes une femme et vous êtes majeure';
}
else { 
    echo 'Vous êtes une femme et vous êtes mineure';
}

echo 'exercice 4';

$magnitude = 5;
switch ($magnitude){
    case 1:
        var_dump ('Magnitude de 1: Micro-séisme impossible à ressentir.' );
    break;
    case 2:
        var_dump ('Magnitude de 2 : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.' );
    break;
    case 3:
        var_dump ('Magnitude de 3: Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.' );
    break;
    case 4:
        var_dump ('Magnitude de 4 : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.' );
    break;
    case 5:
        var_dump ('Magnitude de 5: Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.' );
    break;
    case 6:
        var_dump ('Magnitude de 6 :Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.' );
    break;
    case 7:
        var_dump ('Magnitude de 7: Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.' );
    break;
    case 8:
        var_dump ('Magnitude de 8 : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.' );
    break;
    case 9:
        var_dump ('Magnitude de 9: Séisme capable de tout détruire sur une très vaste zone.');
    break;
    
   default:
        var_dump ('Vous tremblez: Coronavirus?');

}

echo 'exercice 5';

$type = 'fire';
if ($type == 'fire'){
    var_dump('Vous avec choisi Salamèche.');
} else {
    var_dump('vous n\'avez pas ce Pokemon');
}

echo 'Exercice 6';

$age = 18;
if ($age >= 18){
    var_dump('Tu es majeur');
}else{
    var_dump('Tu n\'es pas majeur');
}


echo 'Exercice 7';
$isOK = true;
if (false){
    var_dump('c\'est pas bon!!!');
}else{
    var_dump('C\'est ok!!');
}

echo 'Exercice 8';

$isOK = true;
if (true){
    var_dump('c\'est ok!!');
}else{
    var_dump('C\'est pas bon!!!');
}

?>