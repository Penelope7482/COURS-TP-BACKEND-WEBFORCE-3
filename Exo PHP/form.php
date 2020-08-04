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
<?php


$result=0; 

if (intval($_POST['temps'])<=0 OR intval($_POST['coins']<=0) OR is_nan(intval($_POST['temps'])) OR is_nan(intval($_POST['coins']))){
    echo "Vous avez mal rempli les champs!";
}
elseif (intval($_POST['temps']) < 120 AND intval($_POST['temps'])>0){
   $result = 200;
       if (intval($_POST['coins'])>20)
       {         
        $_POST['coins']= intval($_POST['coins'])*2;
       }
       elseif (intval($_POST['coins']) > 10 AND intval($_POST['coins']) <=20)
       {
        $_POST['coins'] = intval($_POST['coins'])*1.5;
       }  
       else{
        intval($_POST['coins']);
       }
}
 elseif (intval($_POST['temps'])>= 120 AND intval($_POST['temps']) < 180){
   $result = 100;
   if (intval($_POST['coins'])>20)
   {         
    $_POST['coins'] =intval($_POST['coins'])*2;
   }
   elseif (intval($_POST['coins']) > 10 AND intval($_POST['coins']) <=20)
   {
    $_POST['coins']= intval($_POST['coins'])*1.5;
   }
   else{
      intval($_POST['coins']);
   };
}
else {
   $result = 50;
   if (intval($_POST['coins'])>20)
   {         
    $_POST['coins'] =intval($_POST['coins'])*2;
   }
   elseif (intval($_POST['coins']) > 10 AND intval($_POST['coins']) <=20)
   {
    $_POST['coins']= intval($_POST['coins'])*1.5;
   }
   else{
    intval($_POST['coins']);
   }   
}
$result = $result + intval($_POST['coins']);
?>
<div style="position: absolute; top: 50%;left: 50%;transform:translate(-50%, -50%); ">
    <div class="card" style="font-size:25px; background-color:black; color:aqua; border-radius:50%; text-align:center; justify-content:center; width:400px; height:400px;"> 
        <div>
            <p> Tu as gagné <?php  echo $result?> points! Bravo!' </p>
        </div>
        <div class="boutonRetour"> 
           <a href="exercice2ter.php"> <input type="text" class="btn btn-info" style="background-color:aqua; color:black;" value="Retour au formulaire">
            </a>
        </div>
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