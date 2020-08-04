<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM animal where id =". $_GET['id'];

$response = $bdd->query($request);
$bestiole = $response->fetch(PDO::FETCH_ASSOC);

var_dump($bestiole);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


<form action="update.php" method="post" style="margin:50px">
        <div class="form-group">
          <label for="Espèce">Indiquez l'espèce</label>
          <input type="text" name="espece" id="" class="form-control" placeholder="ex: lion" aria-describedby="helpId" value="<?=$bestiole['espece']?>">
       </div>
        <div class="form-group">
          <label for="nom">Indiquez le nom de l'animal</label>
          <input type="text" name="nom" id="" class="form-control" placeholder="ex: pépète" aria-describedby="helpId" value="<?=$bestiole['nom']?>">
         </div>
        <div class="form-group">
          <label for="taille">Indiquez sa taille en cm</label>
          <input type="text" name="taille" id="" class="form-control" placeholder="Ex: 240" aria-describedby="helpId" value="<?=$bestiole['taille']?>">
          
        </div>
        <div class="form-group">
          <label for="poids">Indiquez son poids en grammes</label>
          <input type="text" name="poids" id="" class="form-control" placeholder="Ex: 5000" aria-describedby="helpId" value="<?=$bestiole['poids']?>">

        </div>
        <div class="form-group">
          <label for="pays_origine">Indiquez son pays d'origine</label>
          <input type="text" name="pays_origine" id="" class="form-control" placeholder="ex: France" aria-describedby="helpId" value="<?=$bestiole['pays_origine']?>">
        </div>
        <div>
            <ul style="list-style-type:none">
                <li>


                   <input type="radio" name="sexe" id="radioSexeMâle" value="0" <?=($bestiole['sexe'] ==0)? 'checked': '';?>> 
                   <label for="radioSexeMâle" > Mâle </label>
                </li>
                <li>
                    <input type="radio" name="sexe" id="radioSexeFemelle" value="1"<?=($bestiole['sexe'] ==1)? 'checked': '';?> >  
                    <label for="radioSexeFemelle"> Femelle </label> 
                </li>
                <li>
                    <input type="radio" name="sexe" id="radioSexeIndet" value="2" <?=($bestiole['sexe'] ==2)? 'checked': '';?> >
                    <label for="radioSexeIndet"> Indéterminé </label>
                </li>
            </ul>
        </div>
        <br/>
                 <input type="datetime-local" name="date_de_naissance" value="<?php $date=strtotime($bestiole['date_de_naissance']); echo date('Y-m-d', $date)?>T<?php echo date('H:i', $date)?>">
                <input type="hidden" name="id" value="<?=$bestiole['id']?>">
        <br/>
        <br/>
      <input class="btn btn-primary" type="submit" value="Modifier la fiche de <?=$bestiole['nom']?>">

      </form>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>