<?php

/**Namespace */

namespace App\Model;

/**
 *  Definition of class Véhicule : brand, model, color and immatriculation 
 *  */
class Vehicule extends AbstractModel
{
    public $id_vehicule;
    public $marque;
    public $modele;
    public $couleur;
    public $immatriculation;

    /**
     * @return integer
     */
    public function getIdVehicule(): int
    {
        return $this->id_vehicule;
    }
    /**
     * @param int
     * @return self
     */
    public function setIdVehicule(int $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;
        return $this;
    }
    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }
    /**
     * @param string
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }
    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }
    /**
     * @param string
     * @return self
     */
    public function setModele(string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    /**
     * @param string
     * @return self
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    /**
     * @return string
     */
    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }
    /**
     * @param string
     * @return self
     */
    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;
        return $this;
    }


    /**
     * Requête de selection de tous les véhicules en BDD
     *
     * @return object
     */
    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM vehicule";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        return $data;



        // On prépare le tableau qui contiendra nos vehicules en format Object
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

        $vehicule = new Vehicule;
        $vehicule->setIdVehicule($array['id_vehicule']);
        $vehicule->setMarque($array['marque']);
        $vehicule->setModele($array['modele']);
        $vehicule->setCouleur($array['couleur']);
        $vehicule->setImmatriculation($array['immatriculation']);
        //$vehicule->setPhoto($array['photo']);

        return $vehicule;
    }
    /**
     * Requete d'insertion d'un nouveau conducteur en BDD
     *
     * @return object
     */
    public static function  createNewVehicule()
    {
        // $nouveauNomDuFichier= self::saveFile($_FILES['photo']);
        $bdd = self::getPdo();

        $query = "INSERT INTO vehicule (marque, modele, couleur, immatriculation /**photo*/) VALUES (:marque, :modele, :couleur, :immatriculation /**:photo*/)";
        $response = $bdd->prepare($query);
        $response->execute([
            'marque' => $_POST['marque'],
            'modele' => $_POST['modele'],
            'couleur' => $_POST['couleur'],
            'immatriculation' => $_POST['immatriculation'],

            //      'photo'   => $nouveauNomDuFichier
        ]);

        return true;
    }

    /**
     * récupère un vehicule par son id
     * @param integer
     *@return object
     */
    public static function find($id)
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM vehicule WHERE id_vehicule= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        $data = $response->fetch();

        return $data;

        // On prépare le tableau qui contiendra nos vehicules en format Object


        $dataAsObjects[] = self::toObject($data);


        return $dataAsObjects;
    }

    /**
     * Requête d'update du vehicule selon id
     * @param integer
     * @return bool
     */

    public static function update($id)
    {
        //$nouveauNomDuFichier= self::saveFile($_FILES['photo']);
        $bdd = self::getPdo();

        $query = "UPDATE vehicule SET marque= :marque, modele= :modele, couleur= :couleur, immatriculation= :immatriculation /**,photo= :photo*/ WHERE id_vehicule= :id ";

        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
            'marque' => $_POST['marque'],
            'modele' => $_POST['modele'],
            'couleur' => $_POST['couleur'],
            'immatriculation' => $_POST['immatriculation']
            //   'photo'   => $nouveauNomDuFichier
        ]);

        return true;
    }

    /**
     * requête de suppression de la fiche vehicule selon son id
     *@param integer
     *@return bool
     */
    public static function delete($id)
    {
        $bdd = self::getPdo();

        $query = "DELETE FROM vehicule WHERE id_vehicule= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        return true;
    }
}
