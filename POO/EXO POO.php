<?php
echo 'exercice 1 <br>';
//Exercice 1 : créer une classe
//Créez une classe Personnage avec pour attributs name, strength (valeur par défaut: 0), power 
//(valeur par défaut: 0).
//Créez un objet de la classe Personnage, puis donnez-lui un nom, une force (power) 
//et une résistance (strength).

class Personnage
{
    public $name;
    public $strength = 0;
    public $power = 0;
}

$perso1 = new Personnage;
$perso1->name = 'Merlin';
$perso1->strength = 25;
$perso1->power = 12;


var_dump($perso1);

echo '<hr> exercice 2 <br>';
//Exercice 2 : ajouter un constructeur
//Modifiez la classe Personnage de sorte à devoir obligatoirement donner un name au personnage lorsqu'on l'instancie.
//
//Faites en sorte que le nom soit bien donné à l'objet : vérifiez grâce à un var_dump que le nom est pris en compte.
//
//Ajoutez également strength et power dans le constructeur, de sorte à pouvoir les renseigner directement à la création d'un objet.
//
class Personnage1
{
    public $name;
    public $strength = 0;
    public $power = 0;

    public function __construct($newName, $newStrength, $newPower)
    {
        $this->name = $newName;
        $this->strength = $newStrength;
        $this->power = $newPower;
        var_dump('Le constructeur est appelé');
    }
}

$perso1 = new Personnage1('Merlin', 25, 12);

var_dump($perso1);


echo '<hr> exercice 3 <br>';
//Exercice 3 : paramètres non obligatoires
//Faites en sorte que strength et power, bien que dans le constructeur, ne soient pas obligatoires. 
//(indice: "fonctions valeur par défaut")

class Personnage2
{
    public $name;
    public $strength = 0;
    public $power = 0;

    public function __construct($newName, $newStrength = NULL, $newPower = NULL)
    {
        $this->name = $newName;
        if ($newStrength) {
            $this->strength =  $newStrength;
        }
        if ($newPower) {
            $this->power =  $newPower;
        }
        var_dump('Le constructeur est appelé');
    }
}

$perso1 = new Personnage2('Merlin');

var_dump($perso1);


echo '<hr> exercice 4 <br>';
//Exercice 4 : méthodes - afficher le nom
//Créez une méthode getName() qui retourne le nom du Personnage. On devrait pouvoir l'utiliser de la façon suivante:
//echo "Le nom du personnage est " . $personnage->getName();

class Personnage4
{
    public $name;
    public $strength = 0;
    public $power = 0;

    public function __construct($newName, $newStrength = NULL, $newPower = NULL)
    {
        $this->name = $newName;
        if ($newStrength) {
            $this->strength =  $newStrength;
        }

        if ($newPower) {
            $this->power =  $newPower;
        }

        var_dump('Le constructeur est appelé');
    }
    function getName()
    {
        return $this->name;
    }
}

$perso1 = new Personnage4('Merlin');
var_dump($perso1);
echo "Le nom du personnage est " . $perso1->getName();


echo '<hr> exercice 5 <br>';
//Exercice 5 - méthodes - afficher les données
//Créez une méthode getNameAndSpecs() qui retourne la phrase suivante :
//Le nom du personnage est XXX (il possède une force de YYY et une résistance de ZZZ).

class Personnage5
{
    public $name;
    public $strength = 0;
    public $power = 0;

    public function __construct($newName, $newStrength = NULL, $newPower = NULL)
    {
        $this->name = $newName;
        if ($newStrength) {
            $this->strength =  $newStrength;
        }

        if ($newPower) {
            $this->power =  $newPower;
        }

        var_dump('Le constructeur est appelé');
    }
    function getName()
    {
        return $this->name;
    }
    function getNameAndSpecs()
    {
        return 'Le nom du personnage est ' . $this->name . '. Il possède une force de ' .  $this->power . ' et une résistance de ' .  $this->strength . '.';
    }
}

$perso1 = new Personnage5('Merlin');
var_dump($perso1);
echo "Le nom du personnage est " . $perso1->getName() . '<br>';
echo $perso1->getNameAndSpecs();




echo '<hr> exercice 6 <br>';
//Exercice 6 - méthodes et arguments
//Améliorez getNameAndSpecs() de sorte à lui donner un paramètre (booléen) nommé $longString, de sorte à ce que :
//
//si $longString = true, alors affichez la phrase de l'exercice 5
//si $longString = false, alors affichez : (Personnage XXX (F: YYY, R: ZZZ))
//Mettez une valeur par défaut égale à false sur cette méthode.

/**
 * Représente un Personnage ayant un nom (obligatoire), une force et une résistance.
 */
class Personnage6
{
    public $name;
    public $strength = 0;
    public $power = 0;
/**
 * @param string $name Nom du personnage;
 * @param int $strength Résistance du personnage;
 * @param int $power Force du personnage; 
 * 
 * @return VOID;
 */

    public function __construct(string $newName, int $newStrength = NULL, int $newPower = NULL)
    {
        $this->name = $newName;
        if ($newStrength) {
            $this->strength =  $newStrength;
        }
        //possibilité en ternaire: $this->power =($newPower)? $newPower : this->power
        // ou autre possibilté en ternaire quand pas de condition "sinon": $this->power =($newPower)?? $this->power;
        if ($newPower) {
            $this->power =  $newPower;
        }

        var_dump('Le constructeur est appelé');
    }
    /**
     * retourne le nom du personnage
     *
     * @return string;
     */
    public function getName() : string //pr typer la valeur de retour
    {
        return $this->name;
    }
    public function getNameAndSpecs($longString = false)
    {

        if ($longString == true) {
            return 'Le nom du personnage est ' . $this->name . '. Il possède une force de ' .  $this->power . ' et une résistance de ' .  $this->strength . '.';
        }
        if ($longString == false) {

            return 'Personnage ' . $this->name . '. (F: ' .  $this->power . ', R: ' . $this->strength . ').';

            // ou return sprintf("Personnage: %s. (F: %s, R:%s)",
            // $this->name,
            // $this->power,
            // $this->strength,
            // ) ;
        }
    }
}

$perso1 = new Personnage6('Merlin');
var_dump($perso1);
echo "Le nom du personnage est " . $perso1->getName() . '<br>';
echo $perso1->getNameAndSpecs();

