<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cat", type="string", length=255, nullable=false)
     */
    private $nomCat;

    /**
     * @var string
     *
     * @ORM\Column(name="description_cat", type="string", length=255, nullable=false)
     */
    private $descriptionCat;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomCat()
    {
        return $this->nomCat;
    }

    /**
     * @param string $nomCat
     */
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;
    }

    /**
     * @return string
     */
    public function getDescriptionCat()
    {
        return $this->descriptionCat;
    }

    /**
     * @param string $descriptionCat
     */
    public function setDescriptionCat($descriptionCat)
    {
        $this->descriptionCat = $descriptionCat;
    }




}

