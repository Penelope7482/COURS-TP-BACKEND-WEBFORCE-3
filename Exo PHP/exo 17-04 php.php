<?php

$panier=57;
if ($panier > 0) {
    if ($panier > 100) {
        echo "vous avez une commande qui dépasse 100 eur, vous avez une promo";
    }
    else {
        echo "vous avez une commande en cours";
    }
}
else {
    echo "votre panier est vide";
}
?>
<hr>
<?php

echo($panier>0)? 'vous avez une commande '. (($panier< 100)? "en cours": "Vous avez une commande qui dépasse 100 eur, vous avez une promo") : 
"votre panier est vide";

?>