<?php

//Boucle WHILE
//itérateur: 
$i = 0;

while ($i>10) {
    var_dump($i);
}
/* pas de condition de sortie de la boucle -> s'arrête au bout d'1 moment en PHP car 
paramétrage du serveur (APACHE) limite utilisation en temps (30sec) ou en mémoire (128Mo) 
son utilisation (crash le navigateur en JS car seul le navigateur fait tourner JS, pas de sécu par rappor à ça)
-> si boucle trop longtemps: couper onglet du navigateur et relancer serveur. */

//Condition de sortie de la boucle
$i = 0;

while ($i>10) {
    var_dump($i);
    $i = $i + 1;
    $i += 1;                //3 notations différentes
    $i ++;                  // i  de 0 à 9 car affiche i puis incrémente
}

//RQ:
$i = 0;

while ($i>10) {
    $i ++;
    var_dump($i); // Affiche i de 1 à 10 car incrémente avant affichage
}

//Boucle FOR:

for ($i<0; $i <10; $i++){
    var_dump($i);               // i de 0 à 9
}


//EXEMPLE: AVEC WHILE, ECRIRE UNE BOUCLE QUI NE MONTRE QUE LES CHIFFRES PAIRES

$k = 0;
WHILE ($k<11){
    $k = $k + 2;  // ou $k+=2
}

// ou Méthode à priviléger: 

$k = 0;
WHILE ($k<11){
    if ($k%2===0){
        var_dump($k);          //Avantage: si réattribution de la variable à 1 moment donné, 
    }                           //et que k impair -> retourne rien . 
    $k++;}

//AVEC UNE BOUCLE FOR, AFFICHER CHIFFRE par 2
for ($i<0; $i <10; $i+=2){
    var_dump($i);               // i -> 0, 2, 4, 6, 8
}
?>

<html>
    <body>
        <select name ='' id="">
            <?php for($i = 1900; $i>=2020; $i++):?>
                <option value="><?php echo $i?> </option>
            <?php endfor; ?>
        </select>
    </body>
</html>
