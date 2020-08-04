<?php   require 'head.php';
        require 'jumbo.php' ?>


<h2 class="text-center">Entrez dans le peloton:</h2>

<form action="create.php" method="post" enctype="multipart/form-data" style ="margin-left :150px; margin-right :150px; margin-top:50px; margin-bottom:50px" >
    <div class="form-group">
        <label for="exampleFormControlInput1">Votre Prénom</label>
        <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Josette" required>
    </div>
    <div class="form-group">
        <label for="nom">Votre Nom</label>
        <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Biclou" required>
    </div>
    
    <div class="form-group">
        <label for="email">Votre Email:</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="josetteBiclou@cycles.fr" required>
    </div>
  
    <div class="form-group">
        <label for="password">Votre Mot de passe</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="lapetitereine" required minlength="8" maxlength="70"  pattern="(^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$)" >
        <small>Votre mot de passe doit contenir au moins 8 caractères, dont au moins 1 chiffre, 1 minuscule, 1 majuscule, 1 caractère spécial</small>
    </div>

    <div class="form-group">
        <label for="age">Votre tranche d'âge:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="age" required>
            <option>un minot</option>
            <option>jeune et fou</option>
            <option>dans la force de l'âge</option>
            <option>plein de sagesse</option>
        </select>
    </div>
  
    <div class="form-group">
       <label for="sexe">Je suis:</label>
         <select class="form-control" name ="sexe" id="exampleFormControlSelect2" style="height:60px">
            <option >une femme</option>
             <option >un homme</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Présentez-vous au reste du groupe en quelques mots</label>
        <textarea class="form-control" name="presentation" id="exampleFormControlTextarea1" rows="3"></textarea>
        <small>Max 255 caractères... on veut pas un roman non plus!</small>
    </div>
    
    <p>Combien de kilomètres j'aime parcourir par sortie?</p>
    
    <div class="container">
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="capacity" id="capacity1" value="Moins de 50 km " checked>
            <label class="form-check-label" for="Moins_de_50_km"> moins de 50 km </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="capacity" id="capacity2" value="Entre 50 et 100 km">
            <label class="form-check-label" for="Entre_50_et_100_km"> 50 à 100 km </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="capacity" id="capacity3" value="100 à 150km" >
            <label class="form-check-label" for="100_à_150km">100 à 150km </label>
        </div>
 
        <div class="form-check">
            <input class="form-check-input" type="radio" name="capacity" id="capacity4" value="150km et plus" >
            <label class="form-check-label" for="150km_et_plus"> 150km et plus </label>
        </div>
    </div>

    <br>

    <div class="form-group">
        <label for="uploadFile">Télécharger une photo de vous</label>
        <input type="file" class="form-control-file" name="uploadFile" id="exampleFormControlFile1">
    </div>
    
    <div style = "text-align: center; padding:50px">
        <input type="submit" value="Valider mon inscription" class="btn btn-info">
    </div>
</form>


<?php require 'footer.php'?>