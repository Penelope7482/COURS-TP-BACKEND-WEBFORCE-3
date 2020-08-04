POO – Thomas Sipanya

Objets définit par classe.
Classe : représentation d'un élément en BDD qui contient caractéristiques (attributs) et des fonctions (méthodes).
Cette classe sert de modèle de construction. 
On peut en faire des copies : les instances de la classe.
$this : fait référence à l'objet lui-même

<?php

	class Table {

//Attributs (variables de classe)
		public $nom ;
		public $plateau = 'plastique';  //peut être réassigné plus tard.
        public $pieds ='plastique';     //peut être réassigner plus tard.
    
//Méthodes magiques
//Constructeur: permet de donner des paramètres au moment où on crée l'instance
        public function __construct($newName) {
            $this->nom =$newName;
            var_dump('LE constructeur est appelé');
        }

//Méthodes (fonctions de classes)
		public function fold(){
            echo "La table". $this->nom." est pliée.<br>";
        		}
	}
	
	$tableKlak = new Table('Klak');
	
//	$tableKlak->nom= "klak";  devient inutile car dans le __construct et attribué à la création de l'instance
	$tableKlak→plateau = "marbre";    //plateau est un attribut, pas une variable. 
	$tableKlak→pieds = "acier";
	$tableKlak->fold();

//RQ :
//$tablePluk = new Table ;
//$elementDeTable = «pieds» ;    
//$tablePluk->$elementDeTable ;		équivalent à   $tablePluk->pieds ;
////rarement utilisé.


//Echo " la table " . $tableKlak->nom. "a des pieds en " . " $tableKlak->pieds. »et un plateau en « . $tableKlak->pieds ;


$tablePluk = new Table("pluk");
	
//$tablePluk->nom= "Pluk";
$tablePluk→plateau = "plastique";   
$tablePluk→pieds = "pierre";
$tablePluk->fold();

$tableFoo = new Table('Foo');
	
//$tableFoo->nom= "Foo";
//par défaut, la table Foo a un plateau et des pieds en plastique 