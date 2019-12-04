<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuantiteDeco
 *
 * @ORM\Table(name="quantite__deco")
 * @ORM\Entity
 */
class QuantiteDeco
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
     * @var integer
     *
     * @ORM\Column(name="quantite_dec", type="integer", nullable=false)
     */
    private $quantiteDec;

    /**
     * @var string
     *
     * @ORM\Column(name="description_deco", type="string", length=255, nullable=false)
     */
    private $descriptionDeco;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdProduit", referencedColumnName="id")
     * })
     */
    private $idproduit;

    /**
     * @var \PackDecoration
     *
     * @ORM\ManyToOne(targetEntity="PackDecoration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdPack", referencedColumnName="id")
     * })
     */
    private $idpack;

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
     * @return int
     */
    public function getQuantiteDec()
    {
        return $this->quantiteDec;
    }

    /**
     * @param int $quantiteDec
     */
    public function setQuantiteDec($quantiteDec)
    {
        $this->quantiteDec = $quantiteDec;
    }

    /**
     * @return string
     */
    public function getDescriptionDeco()
    {
        return $this->descriptionDeco;
    }

    /**
     * @param string $descriptionDeco
     */
    public function setDescriptionDeco($descriptionDeco)
    {
        $this->descriptionDeco = $descriptionDeco;
    }

    /**
     * @return \Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * @param \Produit $idproduit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }

    /**
     * @return \PackDecoration
     */
    public function getIdpack()
    {
        return $this->idpack;
    }

    /**
     * @param \PackDecoration $idpack
     */
    public function setIdpack($idpack)
    {
        $this->idpack = $idpack;
    }



}

