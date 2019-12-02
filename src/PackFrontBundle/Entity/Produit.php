<?php

namespace PackFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="IDX_29A5EC27330B72B5", columns={"IdCategorie"}), @ORM\Index(name="IDX_29A5EC2777FFFCEE", columns={"IdOffre"})})
 * @ORM\Entity
 */
class Produit
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
     * @ORM\Column(name="nom_prod", type="string", length=255, nullable=false)
     */
    private $nomProd;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_prod", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixProd;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_description", type="string", length=255, nullable=false)
     */
    private $prodDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_offre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixOffre;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCategorie", referencedColumnName="id")
     * })
     */
    private $idcategorie;

    /**
     * @var \OffrePromotion
     *
     * @ORM\ManyToOne(targetEntity="OffrePromotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;

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
    public function getNomProd()
    {
        return $this->nomProd;
    }

    /**
     * @param string $nomProd
     */
    public function setNomProd($nomProd)
    {
        $this->nomProd = $nomProd;
    }

    /**
     * @return float
     */
    public function getPrixProd()
    {
        return $this->prixProd;
    }

    /**
     * @param float $prixProd
     */
    public function setPrixProd($prixProd)
    {
        $this->prixProd = $prixProd;
    }

    /**
     * @return string
     */
    public function getProdDescription()
    {
        return $this->prodDescription;
    }

    /**
     * @param string $prodDescription
     */
    public function setProdDescription($prodDescription)
    {
        $this->prodDescription = $prodDescription;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getPrixOffre()
    {
        return $this->prixOffre;
    }

    /**
     * @param float $prixOffre
     */
    public function setPrixOffre($prixOffre)
    {
        $this->prixOffre = $prixOffre;
    }

    /**
     * @return \Categorie
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * @param \Categorie $idcategorie
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;
    }

    /**
     * @return \OffrePromotion
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }

    /**
     * @param \OffrePromotion $idoffre
     */
    public function setIdoffre($idoffre)
    {
        $this->idoffre = $idoffre;
    }


}

