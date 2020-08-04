<?php
echo '<p>Exercice 1:</p>';
/* Exercice 1 : Créez une fonction "sayHello" qui affiche "Hello world!"
 */
function sayHello(){
    echo 'Hello World!';
}
var_dump(sayHello());

echo '<hr><p>Exercice 2:</p>';

//*Exercice 2 : Créez une fonction qui prend en paramètres un nom et un prénom, et affichez les dans
 //la phrase "Bonjour John Doe !" */

function helloMachin($nom, $prenom){
    echo 'Bonjour '.$nom." ".$prenom;
} 

var_dump(helloMachin('John', 'Doe'));



echo '<hr><p>Exercice 3:</p>';
//Exo 3
/**
 * Exercice 3 : Créez une fonction qui prend deux nombres en paramètres, et qui retourne 
 * la multiplication des deux
 */

 function multiplication($a, $b){
     $result = $a * $b;
     return $result;
 }
var_dump(multiplication(5, 6));

echo '<hr><p>Exercice 4:</p>';

//Exo 4
/**
 * Exercice 4: 
 * En faites une fonction qui prend 2 paramètres :
 * 1. Une phrase
 * 2. Le mot à chercher dans la phrase
 * 
 * et qui remplace le mot cherché dans la phrase par "Jar Jar Binks"
 * 
 * (Par exemple: 
 * - paramètre 1 : la phrase "lorem ipsum dolor sit amet hello world"
 * - paramètre 2 : "hello"
 * 
 * La phrase retournée sera : "lorem ipsum dolor sit amet Jar Jar Binks world"
 */

function sentence($phrase, $mot){
    str_replace('hello', $mot, $phrase);
    return(str_replace('hello', $mot, $phrase));
}
var_dump(sentence('lorem ipsum dolor sit amet hello world', 'Jar Jar Binks'));


echo '<hr><p>Exercice 5:</p>';

/**
 * Exercice 5:
 * Faire une fonction qui prend un array simple en paramètres (une liste)
 * 
 * Retourner une string qui contient une liste ul/li avec les éléments de la liste.
 */ 

function transformArrayEnString($array){
   echo "<ul>";
    for ($i=0; $i < count($array); $i++ ){ 
            $a= $array[$i];
            echo "<li>". $a."</li>" ;
    }  
    echo "</ul>";
}

$tableau =['carottes', 'choux', 'patates'];
var_dump(transformArrayEnString($tableau));

echo '<hr><p>Exercice 6:</p>';

/**Faire une fonction "drunkenCapitalizer" qui prend une string en paramètres et la retourne
 * avec des lettres minuscules/majuscules aléatoirement. Par exemple :
 * 
 * - paramètre : "hello world"
 * - retourne : "HelLo woRlD"
 * 
 * Étapes de l'algorithme :
 * 1. Trouver comment découper une string lettre par lettre, pour avoir chaque lettre dans un tableau
 * 2. Faire une boucle dans ce tableau de lettres
 * 3. Dans la boucle: trouver comment avoir une valeur aléatoire pour gérer le hasard. En fonction du résultat
 * aléatoire, décider si on met le caractère en majuscule ( strtoupper() ) ou en minuscule ( strtolower() )
 * 
 * Pour gérer le hasard, vous pouvez par exemple générer un nombre aléatoire entre 0 et 10 et dire:
 * - si je tombe sur 0 - 4 : minuscule
 * - si je tombe sur 5 - 9 : majuscule
 * 
 * 4. Dans la  boucle, quand on a changé la lettre, mettre successivement les nouvelles lettres dans un tableau
 * 5. En dehors de la boucle, transformer le tableau en string
 * 6. Retourner la string !*/


function drunkenCapitalizer($string){
   
    //découpe la chaîne de caract et la transforme en tableau
    $splitString = str_split($string); 
    $newTable= [];
    //crée une boucle qui prend chaque lettre du tableau
    foreach ($splitString as $lettre) {   
     //choisi aléatoirement l'itération  
     $a = rand(0, 10); 
     //si l'itération <=4, la lettre corresp à l'itération sera en min                     
            if ($a<=4){                              
                $newTable[]=strtolower($lettre);
            }
           else{
                $newTable[]=strtoupper($lettre);
            }
    //récupère la lettre transformée dans un tableau
}
  return implode($newTable);
} 
$test = 'champion du monde';
var_dump(drunkenCapitalizer($test));

echo '<hr><p>Exercice 7:</p>';

/**
 * Exercice 7 :
 * Comme pour l'exercice 5 qui s'appliquait à une liste, faites une fonction qui prend un tableau à deux dimensions et en fait une liste ul/li :
 * 
 * Exemple  :
 * 
 * $array = [
 *     'ete'     => [ 'aubergines', 'pêches'],
 *     'automne' => [ 'aubergines', 'pêches'],
 *     'hiver'   => [ 'aubergines', 'pêches'],
 *     'printemps' => [ 'aubergines', 'pêches'],
 * ];
 */

 $array = [
            'ete'     => [ 'aubergines', 'pêches'],
            'automne' => [ 'aubergines', 'pêches'],
            'hiver'   => [ 'aubergines', 'pêches'],
            'printemps' => [ 'aubergines', 'pêches'],
         ];

function exercice7($array)
{
   echo "<ul>";
    foreach ($array as $saison=>$legume) 
    { 
            
             echo "<li>". $saison."</li>" ;
                
                echo "<ul>";
                    foreach ($legume as $legumes =>$value2){ 
                       
                        echo "<li>". $value2. "</li>" ;
                  
                    }
                echo '</ul>';
    }echo '</ul>';
}
 

var_dump(exercice7($array));

echo '<hr><p>Exercice 8:</p>';

 /**
 * Exercice 8 : Triangle de Pascal
 * Faites une fonction qui prend en paramètres un nombre "n".
 * La fonction retournera les n premières lignes du triangle de Pascal. C'est un "triangle"
 * de nombres dont les nombres inférieurs sont la somme des deux nombres du dessus :
 * 
 * https://www.w3resource.com/w3r_images/pascal-traingle.png 
 * 
 * Exemple :
 * 
 * Paramètres : n = 6
 * Résultat :
 * 
 * 1
 * 1 1
 * 1 2 1
 * 1 3 3 1
 * 1 4 6 4 1
 * 1 5 10 10 5 1
 * 
 * Les résultats seront présentés sous la forme d'un tableau de tableaux : chaque ligne 
 * serait un sous-tableau du tableau principal */

 function pascal($n){
     $ligne = [];
     $lignes = [0];
      for ($i=0; $i < $n; $i++) {

            $ligne= [$lignes, $ligne+$lignes,1];
            echo $ligne."<br>";
            }
        }

 var_dump(pascal(6));

echo "<hr><p>Exercice 9</p>";

 /**
 * Exercice 9 : Fonctions récursives
 * Faites une fonction "récursive" qui va créer un ul/li pour tout tableau passé en paramètres quelle que 
 * soit sa profondeur.
 * Une fonction récursive, c'est une fonction qui va s'appeler elle-même.
 */
/**
 * Cette fonction prend un nombre $nombre et aditionne tous les nombres
 * un par un jusqu'à ce nombre. Par exemple :
 * 
 * $nombre = 5
 * Résultat = 1 + 2 + 3 + 4 + 5
 *  
 * La fonction va calculer la somme de $nombre avec son nombre précédent :
 * 5 + (nombre précédent : 4) = 9
 * Ensuite, on continue avec le nombre encore précédent :
 * 9 + (nombre précédent : 3) = 12
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 2) = 14
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 1) = 15
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 0) = 15 => fin du script (on arrête quand $nombre = 0)
 * 
 * La fonction fait  le job suivant : "somme de nombre + nombre précédent". C'est en effet ce qu'on veut
 * faire à chaque étape ! Et qui fait ce job ? La fonction, justement !
 * 
 * On appelle donc la fonction dans elle-même afin de continuer le calcul "récursivement"
 * jusqu'à ce que $nombre soit égal à zéro.
 */
function exercice9($b)
{   echo "<ul>";
        foreach ($b as $key=>$value)
        {   
            if (is_array($value)){
              
                echo "<li>". $key. "</li>";
                
                exercice9($value);
            }
            else {
                echo "<li>". $value. "</li>";
            }
        }
    echo"</ul>";
    return $b;
} 

$b = [
    'ete'     => [ 'poireaux',
                    'aubergines' => [ 5, 
                                      'graines'=>[ 'prix',
                                                 'quantité']], 
                    'pêches'],
    'automne' => [  'tomate'=> ['rouge',
                                'graine'], 
                    'vanille'=> ['marron',
                                'orchidée'],
                            ],
    'hiver'   => [  'patate', 
                    'fraise'],
    'printemps' => ['poivron', 
                    'abricot'],
 ];

var_dump(exercice9($b));



function somme($nombre) {
    // Si mon nombre est différent de zéro, je fais mon calcul :
    if ($nombre != 0) {
        // La somme est :
        // le nombre actuel +
        // la foncion somme() sur le nombre précédent
            // Qui elle même prend le nombre précédent...
            // Et lui ajoute la fonction somme sur le nombre encore précédent...
                // et ainsi de suite !
        $somme = $nombre + somme($nombre - 1);
        return $somme;
    }
    else {
        return $nombre;
    }
}

var_dump(somme(7));
?>