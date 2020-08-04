<?php

/**Namespace */

namespace App\Model;

/**
 *  Definition of class Conducteur : firstname(prenom) and lastname(nom)
 */
class Conducteur extends AbstractModel
{
    public $id_conducteur;
    public $prenom;
    public $nom;


    /**
     * @return integer
     */
    public function getIdConducteur(): int
    {
        return $this->id_conducteur;
    }
    /**
     * @param int
     * @return self
     */
    public function setIdConducteur(int $id_conducteur): self
    {
        $this->id_conducteur = $id_conducteur;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    /**
     * @param string
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }
    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * @param string
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Requête de selection de tous les conducteurs en BDD
     *
     * @return object
     */
    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM conducteur";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        return $data;



        // On prépare le tableau qui contiendra nos conducteurs en format Object
        $dataAsObjects = [];

        // On fait un foreach de $data (données de la bdd) pour transformer chaque data en un object
        // puis on met l'object dans le tableau $dataAsObjects
        foreach ($data as $d) {
            $dataAsObjects[] = self::toObject($d);
        }

        return $dataAsObjects;
    }

    /**
     * Transforme un array de données de la table Vehicule en un objet Vehicule
     */
    public static function toObject($array)
    {

        $conducteur = new Conducteur;
        $conducteur->setIdConducteur($array['id_conducteur']);
        $conducteur->setPrenom($array['prenom']);
        $conducteur->setNom($array['nom']);

        //$vehicule->setPhoto($array['photo']);

        return $conducteur;
    }
    /**
     * Requete d'insertion d'un nouveau conducteur en BDD
     *
     * @return object
     */
    public static function  createNewConducteur()
    {
        // $nouveauNomDuFichier= self::saveFile($_FILES['photo']);
        $bdd = self::getPdo();

        $query = "INSERT INTO conducteur (prenom, nom /**, photo*/) VALUES (:prenom, :nom  /**, :photo*/)";
        $response = $bdd->prepare($query);
        $response->execute([
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],

            //      'photo'   => $nouveauNomDuFichier
        ]);

        return true;
    }

    /**
     * récupère un conducteur par son id
     * @param integer
     *@return object
     */
    public static function find($id)
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM conducteur WHERE id_conducteur= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        $data = $response->fetch();

        return $data;

        // On prépare le tableau qui contiendra nos conducteurs en format Object


        $dataAsObjects[] = self::toObject($data);


        return $dataAsObjects;
    }

    /**
     * Requête d'update du conducteur selon id
     * @param integer
     * @return bool
     */

    public static function update($id)
    {
        //$nouveauNomDuFichier= self::saveFile($_FILES['photo']);
        $bdd = self::getPdo();

        $query = "UPDATE conducteur SET prenom= :prenom, nom= :nom /**, photo= :photo*/ WHERE id_conducteur= :id";

        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],

            //   'photo'   => $nouveauNomDuFichier
        ]);

        return true;
    }

    /**
     * requête de suppression de la fiche conducteur selon son id
     *@param integer
     *@return bool
     */
    public static function delete($id)
    {
        $bdd = self::getPdo();

        $query = "DELETE FROM conducteur WHERE id_conducteur= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        return true;
    }
}
