<?php
/**Namespace */
namespace App\Model;
/**
 *  Definition of class Zoo : name (of zoo) and city
 */
class Zoo extends AbstractModel
{
    public $id_zoo;
    public $name;
    public $city;
    /**
     * @return integer
     */
    public function getIdZoo(): int
    {
        return $this->id_zoo;
    }
    /**
     * @param int
     * @return self
     */
    public function setIdZoo(int $id_zoo): self
    {
        $this->id_zoo = $id_zoo;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param self
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Requête de SELECT pour récupérer tous les zoo de la table Zoo
     * @return object
     */
    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM Zoo";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        return $data;

          // On prépare le tableau qui contiendra nos zoo en format Object
    $dataAsObjects = [];

    // On fait un foreach de $data (données de la bdd) pour transformer chaque data en un object
    // puis on met l'object dans le tableau $dataAsObjects
    foreach($data as $d) {
        $dataAsObjects[] = self::toObject($d);
    }

    return $dataAsObjects;
}

/**
    * Transforme un array de données de la table Zoo en un objet Zoo
    */
public static function toObject($array) {

    $zoo = new Zoo;
    $zoo->setIdZoo($array['id_zoo']);
    $zoo->setName($array['name']);
    $zoo->setCity($array['city']);

    return $zoo;

    }

/**
 * Requete d'insertion d'un nouveau zoo en BDD
 *
 * @return object
 */
public static function  createNewZoo(){
    $bdd = self::getPdo();

    $query = "INSERT INTO Zoo (name, city) VALUES (:name, :city)";
    $response = $bdd->prepare($query);
    $response->execute([
        'name' => $_POST['name'],
        'city' => $_POST['city']
    ]);

  return true;       
}
/**
 * récupère un zoo par son id
 *
 */
public static function find($id) {
        
    $bdd = self::getPdo();

    $query = "SELECT * FROM Zoo WHERE id_zoo= :id";
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
 * Requête d'update du zoo selon id
 */

public static function update($id){
    $bdd = self::getPdo();

    $query = "UPDATE Zoo SET name= :name, city= :city WHERE id_zoo= :id";
    $response = $bdd->prepare($query);
    $response->execute([
        'id' => $id,
        'name' => $_POST['name'],
        'city' => $_POST['city']
    ]);

   return true;
 }

 /**
  * requête de suppression de la fiche Zoo selon son id
  */
public static function delete ($id){
    $bdd = self::getPdo();

    $query = "DELETE FROM Zoo WHERE id_zoo= :id";
    $response = $bdd->prepare($query);
    $response->execute([
        'id' => $id,
    ]);

   return true;
}
}
