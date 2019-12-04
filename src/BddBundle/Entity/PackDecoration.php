<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackDecoration
 *
 * @ORM\Table(name="pack_decoration")
 * @ORM\Entity(repositoryClass="BddBundle\Repository\PackDecorationRepository")
 */
class PackDecoration
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
     * @ORM\Column(name="nom_pack", type="string", length=255, nullable=false)
     */
    private $nomPack;

    /**
     * @var string
     *
     * @ORM\Column(name="typeP", type="string", length=255, nullable=false)
     */
    private $typep;

    /**
     * @var string
     *
     * @ORM\Column(name="description_pack", type="string", length=255, nullable=false)
     */
    private $descriptionPack;

    /**
     * @var float
     *
     * @ORM\Column(name="prixP", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixp;

    /**
     * @var string
     *
     * @ORM\Column(name="image_pack", type="string", length=255, nullable=false)
     */
    private $imagePack;

    /**
     * @ORM\OneToMany(targetEntity="LignePack", mappedBy="idpack")
     */
    private $lignePacks;

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
    public function getNomPack()
    {
        return $this->nomPack;
    }

    /**
     * @param string $nomPack
     */
    public function setNomPack($nomPack)
    {
        $this->nomPack = $nomPack;
    }

    /**
     * @return string
     */
    public function getTypep()
    {
        return $this->typep;
    }

    /**
     * @param string $typep
     */
    public function setTypep($typep)
    {
        $this->typep = $typep;
    }

    /**
     * @return string
     */
    public function getDescriptionPack()
    {
        return $this->descriptionPack;
    }

    /**
     * @param string $descriptionPack
     */
    public function setDescriptionPack($descriptionPack)
    {
        $this->descriptionPack = $descriptionPack;
    }

    /**
     * @return float
     */
    public function getPrixp()
    {
        return $this->prixp;
    }

    /**
     * @param float $prixp
     */
    public function setPrixp($prixp)
    {
        $this->prixp = $prixp;
    }

    /**
     * @return string
     */
    public function getImagePack()
    {
        return $this->imagePack;
    }

    /**
     * @param string $imagePack
     */
    public function setImagePack($imagePack)
    {
        $this->imagePack = $imagePack;
    }

    /**
     * @return mixed
     */
    public function getLignePacks()
    {
        return $this->lignePacks;
    }

    /**
     * @param mixed $lignePacks
     */
    public function setLignePacks($lignePacks)
    {
        $this->lignePacks = $lignePacks;
    }


}

