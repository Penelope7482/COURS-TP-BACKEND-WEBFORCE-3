

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
      <ul class="nav nav-tabs">
          <li class="nav-item">
              <a href="#" class="nav-link active">Active</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Action</a>
              </div>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Another link</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link disabled">Disabled</a>
          </li>
      </ul>

<form method="get" action="traitement.php">
    <div class="form-group" style='margin:50px'>
      
        <label for="prénom">Votre prénom: </label>
             <input style='width:300px' type="text" class="form-control" name="prénom" id="" aria-describedby="helpId" placeholder="Ex: Cunégonde">
       
         <label for="nom">Votre nom: </label>
             <input style='width:300px'  type="text" class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="Ex: Dupond-et-t">
      
        <label for="email">Veuillez entrer votre courriel</label>
             <input style='width:300px'  type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Ex: bouriquet@trucmail.fr">
      
        <label for="MotDePasse">Entrez un mot de passe</label>
             <input style='width:300px'  type="text" class="form-control" name="MotDePasse" id="" aria-describedby="helpId" placeholder="Ex: çcdj4ckàZn ">
    </div>
      <button class="btn btn-primary" style = 'margin-left:150px'>Valider</button>
    
</form> 
       


<footer>Ceci est le footer</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>