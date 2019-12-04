<?php

namespace BddBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\CategorieRepository")
 *
 * @UniqueEntity(fields="nomCat", message="Une categorie existe déjà avec ce nom")
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
     *  @Assert\NotBlank()
     *@Assert\Length(
     *     min = 2,
     *     minMessage="nom trop court"
     * )
     *
     * @ORM\Column(name="nom_cat", type="string", length=255, nullable=false)
     */

    private $nomCat;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min = 2,
     *     minMessage="nom trop court"
     * )
     * @ORM\Column(name="description_cat", type="string", length=255, nullable=false)
     */
    private $descriptionCat;


    /**
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="categorie", cascade={"remove"})
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }


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

