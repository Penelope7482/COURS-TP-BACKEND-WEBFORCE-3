<?php
echo '<p>Exercice1</p>';
//Déclarez une variable et lui assigner la valeur "hello world". L'afficher avec echo puis avec var_dump.
$exo1 = 'Hello World';
echo $exo1;
var_dump($exo1);

echo '<hr><p>Exercice2</p>';
//Déclarez une string. L'afficher.

$exo2 = 'ceci est une string';
echo $exo2;

echo '<hr><p>Exercice3</p>';
//Déclarez un integer. L'afficher.

$exo3= 3;
echo $exo3;

echo '<hr><p>Exercice4</p>';
//Déclarez un boolean. L'afficher.

$exo4= true;
echo $exo4;

echo '<hr><p>Exercice5</p>';
//Déclarez un float. L'afficher.

$exo5= 5.34;
echo $exo5;

echo '<hr><p>Exercice6</p>';
//Créez une nouvelle variable en prenant la variable déclarée dans l'exercice 3 et en lui ajoutant 42. Affichez le résultat.

$exo6 = $exo3 + 42;
echo $exo6;

echo '<hr><p>Exercice7</p>';
//Réassignez la variable déclarée en 4 par la valeur null.
$exo4 = null;
echo $exo4;

echo '<hr><p>Exercice8</p>';
//Déclarez une constante nommée EXAMPLE_CONSTANT et assignez lui la valeur test.

const EXAMPLE_CONSTANT = 'test';
var_dump(EXAMPLE_CONSTANT);

echo '<hr><p>Exercice9</p>';
//Déclarez $nombre1 et $nombre2 en leur donnant des integer. Créez une nouvelle variable contenant l'addition des deux.

$nombre1 = 6;
$nombre2 = 9;
echo $addition = $nombre1 + $nombre2;

echo '<hr><p>Exercice10</p>';
//Créez une nouvelle variable contenant la soustraction des deux.

echo $soustraction = abs($nombre1 - $nombre2);

echo '<hr><p>Exercice11</p>';
//Créez une nouvelle variable contenant la division des deux.

echo $division = $nombre1 / $nombre2;

echo '<hr><p>Exercice12</p>';
//Créez une nouvelle variable contenant la multiplication des deux.

echo '<hr><p>Exercice13</p>';
//Créez une nouvelle variable contenant le modulo des deux.

echo $modulo= $nombre1 % $nombre2;

echo '<hr><p>Exercice14</p>';
//Déclarez $float1 et $float2 en leur donnant des nombres à virgules avec un nombre suffisant de 
//décimales après la virgule (par exemple: 42.234483). 
//Créez une nouvelle variable contenant la division des deux.

$float1 =  42.234483;
$float2 = 26.754327452;
echo $divisionExo14 = $float1/$float2;

echo '<hr><p>Exercice15</p>';
//Créez une nouvelle variable contenant l'arrondi mathématique de la division des deux.

echo $arrondi = round($divisionExo14);

echo '<hr><p>Exercice16</p>';
//Créez une nouvelle variable contenant l'arrondi au nombre supérieur de la division des deux.
echo $arrondiSup = ceil($divisionExo14);

echo '<hr><p>Exercice17</p>';
//Créez une nouvelle variable contenant l'arrondi au nombre inférieur de la division des deux.
echo $arrondiInf = floor($divisionExo14);

echo '<hr><p>Exercice18</p>';
//**Reprennez $nombre1 et incrémentez-le de trois manières différentes :

//*en le réassignant à sa valeur + 1
echo $nombre1 = $nombre1 + 1;
echo '<br>';
//en utilisant +=
echo $nombre1 +=1;
echo '<br>';
//*en utilisant ++ **//
echo $nombre1 ++;
echo '<br>';

echo '<hr><p>Exercice19</p>';
//Reprennez $nombre1 et décrémentez-le de trois manières différentes :

//en le réassignant à sa valeur- 1
echo $nombre1 = $nombre1 - 1;
echo '<br>';
//en utilisant -=
echo $nombre1 -=1;
echo '<br>';
//en utilisant --
echo $nombre1 --;
echo '<br>';

echo '<hr><p>Exercice20</p>';
//Créez deux variables $string1 et $string2 contenant deux strings. Concaténez-les dans une nouvelle variable.
$string1 = 'Bonjour ';
$string2= 'Mme Machin!';
echo $sentence = $string1.$string2;

echo '<hr><p>Exercice21</p>';
//Créez deux variables $nom et $prenom en string, et $codeAgent en integer. 
//Créez une nouvelle variable contenant Bonjour agent [CodeAgent], 
//ou devrais-je dire agent [Nom], [Prénom] [Nom] ! (remplacez les [var] par la variable 
//correspondante grâce à la concaténation)
$nom = "Bond";
$prenom = "James";
$codeAgent = 7;

echo $sentence2 = "Bonjour agent 00". $codeAgent . ", ou devrais-je dire agent ".$nom. ", ".$prenom. " " . $nom. "!";

echo '<hr><p>Exercice22</p>';
//En utilisant la fonction str_replace(), prenez la variable créée à l'exercice 21 et remplacez le mot 
//agent par étudiant.

echo $sentence3 = str_replace('agent', 'etudiant', $sentence2);

echo '<hr><p>Exercice23</p>';
//En utilisant la fonction strlen(), trouvez la longueur de la variable créée à l'exercice 21.

echo $sentenceLength = strlen($sentence2);

echo '<hr><p>Exercice24</p>';
//En utilisant la fonction substr(), récupérez les 4 premiers caractères de la variable créée à l'exercice 21.

echo $exo24= substr($sentence2, 0, 4);

echo '<hr><p>Exercice25</p>';
//En utilisant la fonction substr(), récupérez les caractères 4 à 7 de la variable créée à l'exercice 21.

echo $exo25= substr($sentence2, 4, 4);

echo '<hr><p>Exercice26</p>';
//Trouvez une fonction pour afficher la variable créée à l'exercice 21 tout en majuscules.

echo $exo26 = strtoupper($sentence2);

echo '<hr><p>Exercice27</p>';
//Trouvez une fonction pour afficher la variable créée à l'exercice 21 tout en minuscules.

echo $exo27 = strtolower($sentence2);



//Conditions
echo '<hr><p>CONDITIONS</p>';
echo '<hr><p>Exercice1</p>';
//Créez une variable "heure" avec l'heure de votre choix en integer (exemple: "14"). 
//Créez une condition qui teste : si l'heure est supérieure à 7, affichez "bonne journée !"

$heure = 14;
if($heure>7){
    echo 'Bonne journée';
}

echo '<hr><p>Exercice2</p>';
//Ajoutez à la condition : si l'heure est inférieure à 20, affichez toujours "bonne journée !", sinon affichez "bonne soirée !"
$heure = 14;
if($heure>7 AND $heure <20){
    echo 'Bonne journée';
}
else{
    echo 'Bonne soirée';
}

echo '<hr><p>Exercice3</p>';
//Utilisez la fonction date('H') pour avoir l'heure actuelle. Utilisez plutôt cette fonction dans votre 
//variable déclarée à l'exercice 1.

echo $heure = date('H'). "<br>";
$heure = 14;
if($heure>7 AND $heure <20){
    echo 'Bonne journée';
}
else{
    echo 'Bonne soirée';
}

//Tableaux
echo '<hr><p>TABLEAUX</p>';
echo '<hr><p>Exercice1</p>';
//Créer un tableau simple contenant la liste des mois de l'année, en minuscules.
$mois = ['janvier', 'fevrier','mars', 'avril ', 'mai','juin','juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
var_dump($mois);

echo '<hr><p>Exercice2</p>';
//Affichez le mois de mars.
echo $mois[2];

echo '<hr><p>Exercice3</p>';
//Modifiez le mois d'août pour lui assigner la valeur AOÛT.
echo $mois[7] = 'AOÛT';
var_dump($mois);

echo '<hr><p>Exercice4</p>';
//Modifiez le mois de septembre pour le mettre en majuscules grâce à une fonction PHP.
echo $mois[8] = strtoupper($mois[8]);
var_dump($mois);

echo '<hr><p>Exercice5</p>';
//Créez un tableau associatif contenant Allemagne, Espagne, Italie, France, Portugal et leur capitales, sous la forme suivante : "France" => "Paris".
$paysCapitale = [
                    'Allemagne' =>  'Berlin',
                    'Espagne'   =>  'Madrid',
                    'Italie'    =>  'Rome',
                    'France'    =>  'Paris',
                    'Portugal'  =>  'Lisbonne'];
var_dump($paysCapitale);

echo '<hr><p>Exercice6</p>';
//Affichez la capitale de l'Italie.

echo $paysCapitale['Italie'];

echo '<hr><p>Exercice7</p>';
//Créez un tableau associatif contenant les pays de l'exercice 5, en ajoutant un sous-tableau contenant 
//la capitale et la population de chaque pays. Exemple :

//"france" => [
//  "capitale" => "Paris",
//    "population" => "70000000"
//]

$paysCapitalePopulation = [
    'Allemagne' =>   [
                            "capitale" => "Berlin",
                            "population" => "85000000" ],
    'Espagne'   =>   [
                        "capitale" => "Madrid",
                        "population" => "55000000"],
    'Italie'    =>   [
                        "capitale" => "Paris",
                        "population" => "60000000"],
    'France'    =>   [
                        "capitale" => "Paris",
                        "population" => "70000000" ],
    'Portugal'  =>   [
                        "capitale" => "Lisbonne",
                       "population" => "45000000"]];

       var_dump($paysCapitalePopulation);

echo '<hr><p>Exercice8</p>';
//Affichez la population de la France.

echo $paysCapitalePopulation['France']['population'];

echo '<hr><p>Exercice9</p>';
//Affichez la phrase suivante : "La France a pour capitale Paris et possède une population de 70000000 habitants."
echo $exo9Tableau = "La France a pour capitale ". $paysCapitalePopulation['France']['capitale']. " et possède une population de ". $paysCapitalePopulation['France']['population'].".";

//Boucles foreach
echo '<hr><p>BOUCLES FOREACH</p>';
echo '<hr><p>Exercice1</p>';
//En utilisant le tableau de l'exercice Tableaux:1, faites une boucle foreach pour afficher tous les mois 
//dans un var_dump.

foreach($mois as $element){
    var_dump ($element);
}

echo '<hr><p>Exercice2</p>';
//En utilisant le tableau de l'exercice Tableaux:5, faites une boucle foreach pour afficher la phrase 
//Le pays PAYS a pour capitale CAPITALE.

foreach($paysCapitale as $pays => $capitale){
    echo "Le ". $pays . " a pour capitale " . $capitale. ". <br>";
}

echo '<hr><p>Exercice3</p>';
//En utilisant le tableau de l'exercice Tableaux:7, faites une boucle foreach pour afficher la phrase 
//Le pays [PAYS] a pour capitale [CAPITALE] et pour population [POPULATION] habitants.
foreach ($paysCapitalePopulation as $pays => $capitale){
    $string3 = "Le pays ".$pays." a pour capitale" . array_keys([$capitale][0] )." et pour population ". $capitale['population']. " habitants. <br>";     
    echo $string3. '<br>';
}

//BOUCLES FOR / WHILE
echo '<hr><p>BOUCLES FOR WHILE</p>';
echo '<hr><p>Exercice1</p>';
//Faites une boucle for qui affiche des nombres de 0 à 10.
for ($i=0; $i <11 ; $i++) { 
    echo $i. " ";
}

echo '<hr><p>Exercice2</p>';
//Faites une boucle for qui affiche uniquement des nombres pairs, de 0 à 10, grâce à un if au sein de la boucle
for ($i=0; $i <11 ; $i++) { 
    if ($i%2==0){
        echo $i . " ";
    };
}

echo '<hr><p>Exercice3</p>';
//Faites une boucle for qui affiche des nombres la série suivante: 100, 50, 25, 12.5, 6.25, 3.125, 1.5625 (c'est à dire une boucle commençant à 100 et tant que $i > 1, divisez $i par deux)

for ($i=200; $i >2; $i+0) { 
    $i = $i/2;
    echo $i . "   ";
}

echo '<hr><p>Exercice4</p>';
//Faites une boucle dans une boucle qui crééra le tableau HTML suivant :
//1	 2	3	4	5	6	7	8	9	10
//2	 4	6	8	10	12	14	16	18	20
//3	 6	9	12	15	18	21	24	27	30
//4	 8	12	16	20	24	28	32	36	40
//5	 10	15	20	25	30	35	40	45	50
//6	 12	18	24	30	36	42	48	54	60
//7	 14	21	28	35	42	49	56	63	70
//8	 16	24	32	40	48	56	64	72	80
//9	 18	27	36	45	54	63	72	81	90
//10 20	30	40	50	60	70	80	90	100
echo "<table> <tr>";
for ($i=1; $i <11 ; $i++) 
{ for ($j=1; $j <11; $j++) { 
          echo "<td>". $j*$i . "</td>"; 
    }
   echo "</tr>";   
}
echo "<table>";

//FONCTIONS
echo '<hr><p>FONCTIONS</p>';
echo '<hr><p>Exercice1</p>';
//Créez une fonction qui retourne "Hello world!"
function sayHello(){
    return 'Hello World';
}

echo sayHello();

echo '<hr><p>Exercice2</p>';
//Créez une fonction qui prend deux paramètres: $prenom et $nom et qui les retourne dans la phrase 
//"Bonjour $prenom $nom, vous avez créé une fonction."

function bonjour($nom, $prenom){
    return "Bonjour ". $prenom . " " .$nom. ", vous avez créé une fonction.";
}
$prenom = 'Tom';
$nom = 'Sawyer';
echo bonjour($nom, $prenom);

echo '<hr><p>Exercice3</p>';
//Créez une fonction qui prend trois paramètres : $longeur, $largeur, $hauteur, et qui calcule le volume d'un cube (longueurlargeurhauteur).
function volumeCube($longeur, $largeur, $hauteur){
    return $longeur*$largeur*$hauteur;
}
$longeur = 5; 
$largeur = 7;
$hauteur = 12;
echo volumeCube($longeur, $largeur, $hauteur);

//ALGORITHME
echo '<hr><p>FONCTIONS</p>';
echo '<hr><p>Exercice1</p>';
/*Distance de Hamming
Calculez la distance de Hamming entre deux brins d'ADN.
La distance de Hamming est le nombre de différences entre deux brins d'ADN homologues issus de 
génomes différents avec un ancètre commun. On mesure le nombre minimum de points de mutation qui pourrraient 
être apparus dans le chemin de l'évolution entre ces deux brins d'ADN. On peut trouver ce nombre en comparant 
deux brins d'ADN et en comptant le nombre de nucléotides différents. Par exemple :

GAGCCTACTAACGGGAT
CATCGTAATGACGGCCT
^ ^ ^  ^ ^    ^^
La distance de Hamming entre ces deux brins d'ADN est de 7 (car en comptant les différences caractère par 
caractère, on en trouve 7).*/

/*Créez une fonction qui prend deux strings en paramètres contenant des brins d'ADN 
(donc composées des caractères A, C, G, T) et trouvez leur distance de Hamming.
Assurez-vous que les deux brins aient la même longueur ! Sinon, retournez une erreur grâce à :
throw new Exception("Message d'erreur"); */

$firstString = 'GAGCCTACTAACGGGAT';
$secondString = 'CATCGTAATGACGGCCT';

function distanceHamming($firstString, $secondString){
    $a= strlen($firstString);
    $b= strlen($secondString); 
    $counter = 0;
    if ($a = $b){
       $firstTab = str_split($firstString);
       $secondTab= str_split($secondString);
       for ($i=0; $i <count($firstTab) ; $i++) { 
           if ($firstTab[$i]!= $secondTab[$i]){
               $counter +=1;
           }
       }return $counter; 
    }
    else{
         throw new Exception("Message d'erreur");
    }
} 

echo (distanceHamming($firstString, $secondString)); 

echo '<hr><p>Exercice2</p>';
/*Créez une autre fonction qui prend deux paramètres :
une longueur
un nombre de paires 
Cette fonction va créer un nombre de paires de brins d'ADN (dont le contenu est aléatoire), 
de taille longueur, et afficher leur distance Hamming paire par paire en appelant la fonction précédente. 
Le résultat devrait être affichés sous la forme suivante :

En paramètres :
- longueur en paires de base = 7
- paires de brins = 4

Les paires AAAAAAA et CCCCCCC ont une distance de Hamming de 7.
Les paires ACGTGCA et GTCGAGC ont une distance de Hamming de 7.
Les paires ATGCTCG et CGTCGTA ont une distance de Hamming de 3.
Les paires ATGCGTA et TAGCTAG ont une distance de Hamming de 4.. */

function generate_adn($longueurDesBrins, $nombreDePaireDeBrins){
for ($j=0; $j <$nombreDePaireDeBrins ; $j++) { 
  
    $firstString = '';
    $secondString='';
  
    for ($i=0; $i <$longueurDesBrins; $i++) { 
        $BaseAleatoire = str_shuffle('ATCG');
         $firstString= $firstString .substr($BaseAleatoire,1,1);
    } 
       
  
    for ($i=0; $i <$longueurDesBrins; $i++) { 
        $BaseAleatoire = str_shuffle('ATCG');
        $secondString= $secondString .substr($BaseAleatoire,1,1);
    } 
       echo $resultat = 'Les brins '. $firstString. ' et '.$secondString.' ont une distance de Hamming de '.distanceHamming($firstString, $secondString). '. <br>';
        
}  
}
$longueurDesBrins = 7;
$nombreDePaireDeBrins = 4;
echo generate_adn($longueurDesBrins, $nombreDePaireDeBrins);



echo '<hr><p>SUPERGLOBALES</p>';

//Superglobales, et données de page en page
//Superglobales
echo '<hr><p>Exercice1</p>';
//*Récupérez la liste des superglobales de PHP.

echo '$GLOBALS <br>
$_SERVER <br>
$_REQUEST <br>
$_GET <br>
$_POST <br>
$_FILES  <br>
$_ENV <br>
$_COOKIE <br>
$_SESSION.';

echo '<hr><p>Exercice2</p>';
/*Retrouvez dans une des superglobales les données suivantes :
IP du visiteur
User-Agent du visiteur (c'est en fait sa configuration OS/Navigateur)
L'adresse du serveur web
Le "timestamp" de quand a été éxécutée la requête vers le fichier PHP*/

var_dump($_SERVER['REMOTE_ADDR']);
var_dump($_SERVER['HTTP_USER_AGENT']);
var_dump($_SERVER['SERVER_ADDR' ]);
var_dump($_SERVER['REQUEST_TIME']);


echo '<hr><p>Exercice3</p>';
/*Transmettre des données (1)
Créez les deux fichiers suivants :

accueil.php
article.php
Dans accueil.php, faites un lien vers article.php de la façon suivante : <a href="article.php?id=34">"
Pour tester votre code, ouvrez accueil.php et cliquez sur le lien.
Dans le fichier article.php, trouvez la superglobale dans laquelle vous trouverez la clé id avec la valeur 34.*/

echo '<hr><p>Exercice3</p>';
/*Transmettre des données (2)
Pour cet exercice, vous allez soigner le HTML de sorte à travailler le fait d'avoir du code HTML et 
du code PHP en même temps. Vous allez créer un formulaire de contact qui redirige vers une page qui affiche 
le récapitulatif du formulaire au client.

Vous aurez au minimum une barre de navigation et une balise footer.

Créez les deux fichiers suivants :

contact.php
traitement.php
Dans contact.php, créez un fichier HTML avec un formulaire de contact. Le formulaire aura en balise ouvrante
 le modèle suivant : <form method="get" action="traitement.php">. De plus, vos inputs auront un nouvel 
 attribut name représentant quelle donnée il y aura dedans, par exemple : <input type="text" name="user_email">
N'oubliez pas le bouton avec input type="button" dans le formulaire !
Validez le formulaire en cliquant sur le bouton.
Vous arrivez sur traitement.php ! Récupérez les données du formulaire grâce à une des superglobales dédiées et 
affichez-les.
*/

echo '<hr><p>Exercice4</p>';
/*Transmettre des données (3)
En reprennant le code de l'exercice précédent, changez la méthode method du formulaire, actuellement GET, en POST.
Dans la page traitement.php, trouvez comment récupérer les données de nouveau.*/



?>