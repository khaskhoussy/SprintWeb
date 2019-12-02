<?php

namespace GesteFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GesteDuMois
 *
 * @ORM\Table(name="geste_du_mois")
 * @ORM\Entity
 */
class GesteDuMois
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
     * @ORM\Column(name="nom_geste", type="string", length=255, nullable=false)
     */
    private $nomGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="mois_geste", type="string", length=255, nullable=false)
     */
    private $moisGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_geste", type="string", length=255, nullable=false)
     */
    private $descGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="image_geste", type="string", length=255, nullable=false)
     */
    private $imageGeste;

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
    public function getNomGeste()
    {
        return $this->nomGeste;
    }

    /**
     * @param string $nomGeste
     */
    public function setNomGeste($nomGeste)
    {
        $this->nomGeste = $nomGeste;
    }

    /**
     * @return string
     */
    public function getMoisGeste()
    {
        return $this->moisGeste;
    }

    /**
     * @param string $moisGeste
     */
    public function setMoisGeste($moisGeste)
    {
        $this->moisGeste = $moisGeste;
    }

    /**
     * @return string
     */
    public function getDescGeste()
    {
        return $this->descGeste;
    }

    /**
     * @param string $descGeste
     */
    public function setDescGeste($descGeste)
    {
        $this->descGeste = $descGeste;
    }

    /**
     * @return string
     */
    public function getImageGeste()
    {
        return $this->imageGeste;
    }

    /**
     * @param string $imageGeste
     */
    public function setImageGeste($imageGeste)
    {
        $this->imageGeste = $imageGeste;
    }


}

