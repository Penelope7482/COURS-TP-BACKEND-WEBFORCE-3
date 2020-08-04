<?php
/*1 :
'title': 'Titre du premier article'
'content': 'Contenu  du  premier article'
2 :
'title': 'Titre du second article'
'content': 'Contenu du second article'
3 :
'title': 'Titre du troisième article'
'content': 'Contenu du troisième article' 
*/


$articles =[
             1 => [
                 'title' => 'Titre du premier article',
                 'content'=> 'Contenu  du  premier article',
             ],
             2 => [
                'title'=> 'Titre du second article',
                'content' => 'Contenu du second article',
             ],
             3 => [
                 'title'=> 'Titre du troisième article',
                 'content'=> 'Contenu du troisième article',
             ]
             ] ;

      
var_dump($_GET);
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
      <a href="article.php?title=Le Seigneur des anneaux&author=Tolkien&scoreManche1=9&scoreManche2=7"> lien vers article </a>;
     
    <br/>
    <?php
    foreach($articles as $id => $caract){?>
        <a href="article.php?id=<?=$id?>"><?=$caract['title'] ?></a><br>
        
     <?php }
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
