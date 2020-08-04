<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3movies;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM movies";
$response = $bdd->query($request);
$movies = $response->fetchAll(PDO::FETCH_ASSOC);

var_dump($movies);


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
      <div class="container mt-3">
          <div class="class row">
              <ul>
                  <?php foreach ($movies as $movie){?>
                         <a href="showmovies.php?id=<?=$movie['id']?>&title=<?=$movie['title']?>&director=<?=$movie['director']?>&category=<?=$movie['category']?>&release_date=<?=$movie['release_date']?>">    <li > Le film numéro <?=$movie['id']?> a pour titre <?=$movie['title']?>, pour réalisateur <?=$movie['director']?> et année de sortie <?=$movie['release_date']?></li>
                         </a>
                  <?php }?>
              </ul>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>