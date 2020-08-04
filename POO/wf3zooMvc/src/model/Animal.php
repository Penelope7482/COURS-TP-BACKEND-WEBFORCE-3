<?php
/**Namespace */
namespace App\Model;
/**
 *  Definition of class Animal : species and country
 */
class Animal extends AbstractModel
{
    public $id_animal;
    public $species;
    public $country;
    public $photo;

    /**
     * @return integer
     */
    public function getIdAnimal(): int
    {
        return $this->id_animal;
    }
    /**
     * @param int
     * @return self
     */
    public function setIdAnimal(int $id_animal): self
    {
        $this->id_animal = $id_animal;
        return $this;
    }
    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }
    /**
     * @param string
     * @return self
     */
    public function setSpecies(string $species): self
    {
        $this->species = $species;
        return $this;
    }
    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * @param string
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

      /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }
    /**
     * @param string
     * @return self
     */
    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }


   public static function saveFile($file) {
        
        $pathinfoData = pathinfo($file["name"]); 
        $fileName = $pathinfoData['filename'];
        $fileExtension = $pathinfoData['extension'];
    
        //Renommage pour éviter les conflits
        $nouveauNomDuFichier = $fileName . '-' . uniqid() . '.' . $fileExtension;
    
        move_uploaded_file($file['tmp_name'],  __DIR__  . '/../../assets/img/' . $nouveauNomDuFichier );
        
        return $nouveauNomDuFichier;
    }

    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM Animal";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        return $data;
    
 

        // On prépare le tableau qui contiendra nos animaux en format Object
        $dataAsObjects = [];

        // On fait un foreach de $data (données de la bdd) pour transformer chaque data en un object
        // puis on met l'object dans le tableau $dataAsObjects
        foreach($data as $d) {
            $dataAsObjects[] = self::toObject($d);
        }
    
        return $dataAsObjects;
    }
    
    /**
        * Transforme un array de données de la table Animal en un objet Animal
        */
    public static function toObject($array) {
    
        $animal = new Animal;
        $animal->setIdAnimal($array['id_animal']);
        $animal->setSpecies($array['species']);
        $animal->setCountry($array['country']);
        $animal->setPhoto($array['photo']);
    
        return $animal;
   
    } 
/**
 * Requete d'insertion d'un nouvel animal en BDD
 *
 * @return object
 */
    public static function  createNewAnimal(){
        $nouveauNomDuFichier= self::saveFile($_FILES['photo']);
        $bdd = self::getPdo();

        $query = "INSERT INTO Animal (species, country, photo) VALUES (:species, :country, :photo)";
        $response = $bdd->prepare($query);
        $response->execute([
            'species' => $_POST['species'],
            'country' => $_POST['country'],
            'photo'   => $nouveauNomDuFichier
        ]);

      return true;       
    }

/**
 * récupère un animal par son id
 *
 */
public static function find($id) {
        
    $bdd = self::getPdo();

    $query = "SELECT * FROM Animal WHERE id_animal= :id";
    $response = $bdd->prepare($query);
    $response->execute([
        'id' => $id,
    ]);

    $data = $response->fetch();

    return $data;

      // On prépare le tableau qui contiendra nos animaux en format Object


    $dataAsObjects[] = self::toObject($data);


return $dataAsObjects;
}

/**
 * Requête d'update de l'animal selon id
 */

 public static function update($id){
    $nouveauNomDuFichier= self::saveFile($_FILES['photo']);
    $bdd = self::getPdo();

    $query = "UPDATE Animal SET species= :species, country= :country, photo= :photo WHERE id_animal= :id";
  
    $response = $bdd->prepare($query);
    $response->execute([
        'id' => $id,
        'species' => $_POST['species'],
        'country' => $_POST['country'],
        'photo'   => $nouveauNomDuFichier
    ]);

   return true;
 }

 /**
  * requête de suppression de la fiche animal selon son id
  */
public static function delete ($id){
    $bdd = self::getPdo();

    $query = "DELETE FROM Animal WHERE id_animal= :id";
    $response = $bdd->prepare($query);
    $response->execute([
        'id' => $id,
    ]);

   return true;
}
}
