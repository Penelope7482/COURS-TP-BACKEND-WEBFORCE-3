faites une requête SELECT qui ira chercher un utilisateur avec la clause WHERE, 
en cherchant à la fois 
dans le champ email et à la fois dans le champ password.
<?php 

var_dump($_POST);
    $bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');

    $request = "SELECT * FROM user
    WHERE email= :email IN password= :password";
    $response = $bdd->prepare($request);
    $response ->execute([
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ]);
    $user = $response->fetch(PDO::FETCH_OBJ);
    
    $response->debugDumpParams();
var_dump($user);
    //rechercher dans le tableau toutes les lignes qui contiennent l'email entré et
    // le mot de passe entré
    // si le tableau retourné ne contient qu'une seule ligne, alors le user est connecté
  
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

    <main role="main">

   


    </main>

<?php include ('partials/footer.php') ?>


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>