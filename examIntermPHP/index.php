<?php
require 'header.php';
require 'jumbo.php';
?>

<div class="form-group" style="padding:50px;">
<form action="indexTraitement.php" method="post" enctype="multipart/form-data">

    <label for="titre">Titre du logement</label>
    <input type="text" class="form-control" name="titre" id="titre" rows="3" required>

    <label for="adresse">Adresse du Logement</label>
    <input type="text" class="form-control" name="adresse" id="adresse" rows="3" required>

    <label for="ville">Ville</label>
    <input type="text" class="form-control" name="ville" id="ville" rows="3" required>

    <label for="adresse">Code Postal</label>
    <input type="number" class="form-control" name="cp" id="cp" rows="3" pattern="(/^[0-9]{5}$/)" required>

    <label for="surface">Surface en m²</label>
    <input type="number" class="form-control" name="surface" id="surface" rows="3" required>

    <label for="prix">Prix en €</label>
    <input type="number" class="form-control" name="prix" id="prix" rows="3" required>
    
    <div class="form-group">
        <label for="photo">Télécharger une photo </label>
        <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1">
    </div>
    <br>

    <label for="type">Type</label>
           <select class="form-control" name ="type" id="type" style="height:60px" required>
              <option>Location</option>
              <option>Vente</option>
          </select>

    <label for="description">Description du logement</label>
    <textarea type="text" class="form-control" name="description" id="description" rows="6" ></textarea>

    <div style = "text-align: center; padding:50px">
        <input type="submit" value="Valider" class="btn btn-info">
    </div>
</div>
</form>

<?php require 'footer.php'?>
      
 