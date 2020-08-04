<?php

/**Namespace */

namespace App\Model;

/**
 *  Definition of class AssociationVehiculeConducteur : id_vehicule and id_conducteur
 */
class AssociationVehiculeConducteur extends AbstractModel
{
    public $id_association;
    public $id_vehicule;
    public $id_conducteur;


    /**
     * @return integer
     */
    public function getIdAssociation(): int
    {
        return $this->id_association;
    }
    /**
     * @param int
     * @return self
     */
    public function setIdAssociation(int $id_association): self
    {
        $this->id_association = $id_association;
        return $this;
    }
    /**
     * @return integer
     */
    public function getIdVehicule(): string
    {
        return $this->id_vehicule;
    }
    /**
     * @param integer
     * @return self
     */
    public function setIdVehicule(string $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;
        return $this;
    }
    /**
     * @return string
     */
    public function getIdConducteur(): string
    {
        return $this->id_conducteur;
    }
    /**
     * @param integer
     * @return self
     */
    public function setIdConducteur(string $id_conducteur): self
    {
        $this->id_conducteur = $id_conducteur;
        return $this;
    }


    /**
     * Requête de selection de toutes les association_vehicule_conducteur en BDD
     *
     * @return object
     */
    public static function findAll()
    {

        $bdd = self::getPdo();

        $query = "SELECT * FROM association_vehicule_conducteur 
        left join vehicule on association_vehicule_conducteur.id_vehicule = vehicule.id_vehicule
        left join conducteur on association_vehicule_conducteur.id_conducteur = conducteur.id_conducteur";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        return $data;



        // On prépare le tableau qui contiendra nos associations en format Object
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

        $associationVehiculeConducteur = new AssociationVehiculeConducteur;
        $associationVehiculeConducteur->setIdAssociation($array['id_association']);
        $associationVehiculeConducteur->setIdVehicule($array['id_vehicule']);
        $associationVehiculeConducteur->setIdConducteur($array['id_conducteur']);



        return $associationVehiculeConducteur;
    }
    /**
     * Requete d'insertion d'un nouveau conducteur en BDD
     *
     * @return object
     */
    public static function  createNewAssociationVehiculeConducteur()
    {

        $bdd = self::getPdo();

        $query = "INSERT INTO  association_vehicule_conducteur (id_vehicule, id_conducteur) VALUES (:id_vehicule, :id_conducteur)";
        $response = $bdd->prepare($query);
        $response->execute([
            'id_vehicule' => $_POST['id_vehicule'],
            'id_conducteur' => $_POST['id_conducteur'],
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

        $query = "SELECT * FROM association_vehicule_conducteur WHERE id_association= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        $data = $response->fetch();

        return $data;

        // On prépare le tableau qui contiendra nos association vehicules conducteurs en format Object


        $dataAsObjects[] = self::toObject($data);


        return $dataAsObjects;
    }

    /**
     * Requête d'update de la table association_vehicule_conducteur selon id
     * 
     * @param integer
     * @return bool
     */

    public static function update($id)
    {

        $bdd = self::getPdo();

        $query = "UPDATE association_vehicule_conducteur SET id_vehicule= :id_vehicule, id_conducteur= :id_conducteur WHERE id_association= :id";

        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
            'id_vehicule' => $_POST['id_vehicule'],
            'id_conducteur' => $_POST['id_conducteur'],

        ]);

        return true;
    }

    /**
     * requête de suppression de la fiche association vehicule-conducteur selon son id
     * 
     *@param integer
     *@return bool
     */
    public static function delete($id)
    {
        $bdd = self::getPdo();

        $query = "DELETE FROM association_vehicule_conducteur WHERE id_association= :id";
        $response = $bdd->prepare($query);
        $response->execute([
            'id' => $id,
        ]);

        return true;
    }
}
