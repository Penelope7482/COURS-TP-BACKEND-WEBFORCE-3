<?php   

var_dump($_GET);
var_dump($_POST);


if (isset ($_POST['fullName']) AND $_POST['fullName']==''){
    echo 'Le champ Nom est manquant';
}elseif (isset ($_POST['email'])AND $_POST['email']==''){
    echo 'Le champ email est manquant';
}elseif(isset ($_POST['message'])AND $_POST['message']==''){
    echo 'Le champ message est manquant';
}else{
echo "<ul> <li><strong> Expéditeur: </strong>". $_POST['fullName'] . "</li>
<li><strong>  Adresse e-mail: </strong>". $_POST['email'] . "</li></ul> <br><strong> Message: </strong> " . $_POST['message'];
}

?>




