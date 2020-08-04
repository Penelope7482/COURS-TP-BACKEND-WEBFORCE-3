<?php /**
 * Créer deux variables : 
 * $time   // Temps en secondes pour finir la partie
 * $coins  // Pièces acquises pendant la partie
 * 
 * 
 * Le joueur marque des points en cumulant les 3 éléments suivants :
 * 
 * temps < 120s : 50 points
 * temps >= 120s et < 180s : 100 points
 * temps >= 180s : 200 points
 * 
 * coins <= 10 : un point par coin acquise
 * coins > 10 et <= 20 : 1,5 point par coin acquise
 * coins > 20 : 2 points par coin acquise
 */


 $time = 70;
 $coins = 73;
 $result;

 if ($time < 120){
    $result = 50;
    if ($coins <= 10){         
        echo ('Tu as gagné ' . ($result + $coins) . ' pieces! Bravo!');
    }
    elseif ($coins > 10 AND $coins <=20){
        echo ('Tu as gagné ' . ($result + $coins*1.5) . ' pieces! Bravo!');
    }
    else {
        echo ('Tu as gagné ' . ($result + $coins*2) . ' pieces! Bravo!');
    }
} 
elseif ($time >= 120 AND $time < 180){
    $result = 100;
    if ($coins <= 10){         
        echo ('Tu as gagné ' . ($result + $coins) . ' pieces! Bravo!');
    }
    elseif ($coins > 10 AND $coins <=20){
        echo ('Tu as gagné ' . ($result + $coins*1.5) . ' pieces! Bravo!');
    }
    else {
        echo ('Tu as gagné ' . ($result + $coins*2) . ' pieces! Bravo!');
    }
}
else {
    $result = 200;
    if ($coins <= 10){         
        echo ('Tu as gagné ' . ($result + $coins) . ' pieces! Bravo!');
    }
    elseif ($coins > 10 AND $coins <=20){
        echo ('Tu as gagné ' . ($result + $coins*1.5) . ' pieces! Bravo!');
    }
    else {
        echo ('Tu as gagné ' . ($result + $coins*2) . ' pieces! Bravo!');
    }
}
?>