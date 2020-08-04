<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM animal where id =". $_GET['id'];

$response = $bdd->query($request);
$bestiole = $response->fetch(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>WF3 Zoo!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<?php include ('partials/navbar.php') ?>

    <main role="main" >

       <?php include ('partials/jumbotron.php') ?>
        
        <div class="album py-5 bg-light " >
            <div class="container" >

                <div class="row" >
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <?php if ($bestiole['sexe']==0){$bestiole['sexe']= 'Mâle';}else{$bestiole['sexe']='femelle';}?>
                                <?php $date= strtotime($bestiole['date_de_naissance']); $date_naissance=date('d/m/Y', $date);?>
                                <?php $genre=''; if ($bestiole['sexe']=='Mâle'){$genre= 'Il';}else{$genre='Elle';}?>
                                <p class="card-text"><?= $bestiole['nom'] ?> est notre <?= $bestiole['sexe'] ?> <?= $bestiole['espece'] ?>. Sa taille est de <?= $bestiole['taille'] ?> cm et son poids de <?=$bestiole['poids'] ?> grammes. <?=$genre?> est née au <?=$bestiole['pays_origine'] ?> le <?= $date_naissance?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                      
                                </div> 
                                <br>
                                <a href="index.php"><small>< Retourner à la page précédente</small> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

   <?php include ('partials/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>