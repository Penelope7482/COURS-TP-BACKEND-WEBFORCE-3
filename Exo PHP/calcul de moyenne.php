<?php
/**
 * Écrire avec des conditions, un programme prenant un ensemble de trois notes sur 20, par exemple :
 * 
 * $maths = 18;
 * $anglais = 12;
 * $histoire = 9;
 * 
 * 
 * - Si une des note est inférieure à 6, affichez "La note ** est éliminatoire." (** étant la valeur de la note)
 * - Si la moyenne est dans l'intervalle [18:20], affichez "Mention très bien !"
 * - Si la moyenne est dans l'intervalle [15:18[, affichez "Mention bien !" 
 * - Si la moyenne est dans l'intervalle [10:15[, affichez "Mention assez bien !" 
 * - Dans tous les cas, affichez la moyenne.
 */

$maths = 16;
$anglais = 3;
$histoire = 9;

$moyenne =round((($anglais + $maths + $histoire)/3),2);


if ($maths <6) {
    echo 'La note de '. $maths . ' en maths est éliminatoire. ';
}
elseif ($histoire<6){
    echo 'La note de '. $histoire . ' en histoire est éliminatoire. ';
}
elseif ($anglais<6){
    echo 'La note de '. $anglais. ' en anglais est éliminatoire. ';
}
else{
    echo 'Bravo!';
}

if ($moyenne >=18){
    echo 'Votre moyenne est de : '. $moyenne. '. Mention très bien';
}
elseif  ($moyenne >=15 AND $moyenne <18){
    echo 'Votre moyenne est de : '. $moyenne. '. Mention bien!';
}
elseif ($moyenne >=10 AND $moyenne <15){
    echo 'Votre moyenne est de : '. $moyenne. '. Mention assez bien!';
}
else{
  echo 'Votre moyenne est de : '. $moyenne. '. Mais vous êtes éliminé, retournez travailler et tentez de nouveau votre chance!';
}
?>