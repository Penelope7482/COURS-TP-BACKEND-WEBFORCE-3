<?php
/**Namespace */
namespace App\Model;
/**
 *Definition of class AnimalZoo: foreign keys on animal and zoo
 */
class AnimalZoo extends AbstractModel
{
    public $id;
    public $animal_id;
    public $zoo_id;

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return integer
     */
    public function getAnimalId(): int
    {
        return $this->animal_id;
    }
    /**
     * @param int
     * @return self
     */
    public function setAnimalId(int $animal_id): self
    {
        $this->animal_id = $animal_id;
        return $this;
    }
    /**
     * @return integer
     */
    public function getZooId(): int
    {
        return $this->zoo_id;
    }
    /**
     * @param int
     * @return self
     */
    public function setZooId(int $zoo_id): self
    {
        $this->zoo_id = $zoo_id;
        return $this;
    }
}
?>