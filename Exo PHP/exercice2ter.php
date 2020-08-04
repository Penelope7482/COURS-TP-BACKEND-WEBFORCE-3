<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background:url('c3b33db0baf4e712c89dd86012f8cf90--water-ripples-phone-backgrounds.jpg');">

<div style="position: absolute; top: 50%;left: 50%;transform:translate(-50%, -50%);">
<div class="form-group" id="formulaire" style="background-color:black; color:aqua; padding:20px; width:500px; height: 500px; border-radius: 50%;display:flex; justify-content:center; align-items:center; text-align:center; "> 
    <form action="form.php"  method="POST" >
    <label for="temps" name="temps">La durée de votre quête (en secondes): </label>
        <input type="text" name="temps" placeholder="Ex: 12" class="form-control" />
    <div class="form-group">
        <br/>
        <label for="coins" name="coinslabel">Nombres de pièces récoltées au cours de votre quête: </label>
    <input type="text" name="coins" placeholder="Ex: 12" class="form-control" />
    </div>
    <input type= "submit" class="btn btn-primary" style="background-color:aqua; color:black;" value="Calculer mes points">
    </form> 
    </div>
</div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>