<?php require 'head.php' ?>
<?php require 'jumbo.php' ?>


<h2 class="text-center">Identifiez-vous:</h2>

<form action="connect.php" method="post" style ="margin-left :150px; margin-right :150px; margin-top:50px; margin-bottom:50px" >

    
    <div class="form-group">
        <label for="email">Votre Email:</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="josetteBiclou@cycles.fr" required>
    </div>
  
    <div class="form-group">
        <label for="password">Votre Mot de passe</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="lapetitereine" required>
    </div>
    
    <div style="text-align: center; padding: 50px;" >
        <input type="submit" value="M'identifier" class="btn btn-info">
    </div>
</form>

<?php require 'footer.php'?>