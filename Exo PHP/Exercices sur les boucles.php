<?php
/**
  * Le tableau précédent représente la liste des puissances des chevaux d'une course hippique.
  * L'organisateur souhaite trouver les deux chevaux dont la puissance est la plus proche pour faire une course équilibréee.
  * Faites une boucle et utilisez des variables pour trouver l'intervalle le plus petit possible !
  * 
  * (Ex: dans le tableau de l'exercice précédent, les chevaux les plus proches sont 8 et 9, 13 et 14. 
  * L'intervalle le plus petit est de "1", Il faut afficher "1".)
  */


$horses = [2, 5, 8, 9, 13, 14, 18];

$ecartMinimum = 999999;

for ($i=0; $i < count($horses)-1; $i++) { 
    $ecartAvecLeSuivant= abs($horses[$i++] - $horses[$i]);
    $ecart[]=$ecartAvecLeSuivant;
}
echo min($ecart);





echo "<hr>";

//afficher i de 5 à 15

for ($i = 5; $i<=15; $i++){
    var_dump ($i);
}

echo "<hr>";


/*essayer d'afficher 
*
**
***
****
***** */



for ($i = 1; $i<=5; $i++){

 echo str_repeat('*', $i). "<br/>";
}

echo "<hr>";
/**
 * Afficher chaque données du tableau suivant avec une boucle For
 */
$array = [2, 5, 8, 9, 13, 14, 18];

for ($i=0; $i < count($array); $i++){
echo $array[$i]. " ";
}

echo "<hr>";

/**
 * Additionner les nombres de 1 à 50 (1+2+3+4...+49+50)
 */
$somme =0 ;
for ($i = 1; $i<51; $i++){
   $somme = $somme + $i;
}
echo $somme;


echo "<hr>";

/**
 *
 * Afficher le schéma suivant (étoiles de 1 à 5 puis de 5 à 1)
 * 
 * * 
 * * * 
 * * * * 
 * * * * * 
 * * * * * 
 * * * * 
 * * * 
 * * 
 * 
 */ 


 for ($i=0; $i<5; $i++){
     echo str_repeat('*', $i). "<br>";
 }
 for ($i=0; $i<5; $i++){
    echo str_repeat('*', 5-$i). "<br>";
}

echo "<hr>";

$string=""; 
for ($i=5; $i>0; $i--){
    $stars= str_repeat('*', $i). "<br>";
    $sautDeLigne = ($i===5)?"":"<br>";
    //Ajout à la fin:
    $string= $string. $sautDeLigne.$stars; 
    //Ajout de $stars au début: 
    $string = $stars. "<br>". $string; 
   
}

echo "<hr>";
/**
 * Boucle dans une boucle:
 * 
 * Afficher grâce à deux boucles imbriquées la liste des tables de multiplication :
 * 
 * 1*1
 * 1*2
 * 1*3
 * ...
 * 1*9
 * 2*1
 * 2*2
 * ...
 * 2*9
 * ...
 * 9*1
 * 9*2
 * ...
 * 9*9
 */

 for ($i=1; $i <=9 ; $i++) { 
        for ($j=1; $j <10 ; $j++) { 
        echo  $i." x ".$j. ' = ' .$i*$j."<hr>";
    }
 }


 echo "<hr>";

 echo '<table border="1">';
 for ($i=1; $i <=9 ; $i++) { 
     echo "<tr>";
     echo "<td height=30px width=30px>". $i . "</td>";
    for ($j=1; $j <10 ; $j++) { 

   echo "<td height=30px width=30px>".$i*$j."</td>";
}
}
echo "</tr>";
echo "</table>";

 echo "<hr>";

 
/**
 * À partir du code suivant, créer un échiquier (un tableau qui alterne des cases noire/blanches sur les lignes et les colonnes)
 */

echo "<table border='1'>";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
            if (($j%2==0 AND $i%2==0) OR  ($i%2 !==0 AND $j%2 !==0)){
                echo "<td height=30px width=30px style='background-color: white;'></td>";
            }   
             else{
                echo "<td height=30px width=30px style='background-color: black;'></td>";
            }
        }
        echo "</tr>";
    }
echo "</table>";

echo "<hr>";
/**
 * Écrire une boucle qui affiche des nombres de 1 à 100.
 * - Si un nombre est divisible par 3, afficher "Fizz" à la place
 * - Si un nombre est divisible par 5, afficher "Buzz" à la place
 * - Si un nombre est divisible par 3 et par 5, afficher "FizzBuzz" à la place
 */
$fizz = "Fizz";
$buzz = "Buzz";
$fizzBuzz="FizzBuzz";

 for ($i=1; $i<101; $i++){
     
     if ($i%5===0 AND $i%3===0){
         echo str_replace($i, $fizzBuzz."<br>", $i);
     }
     elseif($i%5===0){
         echo str_replace($i, $buzz."<br>", $i);;
     }
     elseif( $i%3===0){
         echo str_replace($i, $fizz."<br>", $i);;
     }
     else {
         echo $i."<br>";
    }
   }

?>
