<?php include ('array.php')?>
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
        <div class="row">
            <div class="col">
                <h1>Contactez-nous !</h1>
                <form action="connect.php" class="form" method="POST">
                   
                    <div class="form-group">
                        <label for="formEmail">Adresse e-mail</label>
                        <input name="email" id="formEmail" type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input name="password" id="formPassword" type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="rôle">Rôle</label>
                        <select name="rôle" class="form-control">
                            <option name="client" value="client">Client</option>
                            <option name = "vendeur" value="Vendeur">Vendeur</option>
                            <option name ="admin" value="Administrateur">Administrateur</option>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Valider">
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>