<?php

//1er exemple

function sayHello(){
    echo "hello world!";
}
sayHello(); 

echo '<hr>';

//2ème ex: obtenir série de 10 nb et chiffre aléatoires

function randomPassword(){
    $chars = [0,1, 2, 3, 'a', 'b', 'c', 'z'];
    $password = '';

    for ($i=0; $i < 10; $i++) { 
        $randomIndex = array_rand($chars);
        $char = $chars[$randomIndex];

        $password= $password.$char;
    
    }
    return $password;   //si on met echo au lieu de return, on sera obligé d'avoir l'affichage à chq x. C pas forcémement ce qu'on veut. 
                        // car notre fcontion peut avoir d'autres utilités. 
}

echo randomPassword();

// on ne pourrait pas faire "echo $password;", car variable déclarée dans le scope de la fc°, donc pas accessible en dehors.

var_dump (str_split(randomPassword(), 3) ); 

echo '<hr>';

// fontion qui prennent des paramètres(=arguments): 

function addition($a, $b){     //2 param: $a, $b
    $calcul = $a + $b; 
    return $calcul;
}
echo addition(42, 64);   // on peut maintenant utiliser la fc° avec n'importe quel param

echo '<hr>';

function moyenne($a, $b){
    $calcul = ($a+$b)/2;
    return $calcul;
}

var_dump( moyenne(4532523, 8585));

echo '<hr>';

//on déclare des variables et on les passe en param à la fonction: ça marche. 

$patates = 12;
$carottes = 6;
var_dump(addition($patates, $carottes));

echo '<hr>';

?>