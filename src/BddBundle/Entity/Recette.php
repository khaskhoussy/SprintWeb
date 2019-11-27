<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity
 */
class Recette
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
     * @ORM\Column(name="nom_rec", type="string", length=255, nullable=false)
     */
    private $nomRec;

    /**
     * @var string
     *
     * @ORM\Column(name="rec_description", type="string", length=255, nullable=false)
     */
    private $recDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="type_rec", type="string", length=255, nullable=false)
     */
    private $typeRec;

    /**
     * @var string
     *
     * @ORM\Column(name="imagerecette", type="string", length=255, nullable=false)
     */
    private $imagerecette;

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
    public function getNomRec()
    {
        return $this->nomRec;
    }

    /**
     * @param string $nomRec
     */
    public function setNomRec($nomRec)
    {
        $this->nomRec = $nomRec;
    }

    /**
     * @return string
     */
    public function getRecDescription()
    {
        return $this->recDescription;
    }

    /**
     * @param string $recDescription
     */
    public function setRecDescription($recDescription)
    {
        $this->recDescription = $recDescription;
    }

    /**
     * @return string
     */
    public function getTypeRec()
    {
        return $this->typeRec;
    }

    /**
     * @param string $typeRec
     */
    public function setTypeRec($typeRec)
    {
        $this->typeRec = $typeRec;
    }

    /**
     * @return string
     */
    public function getImagerecette()
    {
        return $this->imagerecette;
    }

    /**
     * @param string $imagerecette
     */
    public function setImagerecette($imagerecette)
    {
        $this->imagerecette = $imagerecette;
    }



}

