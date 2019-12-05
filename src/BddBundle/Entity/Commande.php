<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity
 */
class Commande
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
     * @ORM\Column(name="date_validation", type="string", length=255, nullable=false)
     */
    private $dateValidation;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_total", type="integer", nullable=false)
     */
    private $prixTotal;

    /**
     * @var \Livraison
     *
     * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLivraison", referencedColumnName="id")
     * })
     */
    private $idlivraison;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="id")
     * })
     */
    private $iduser;

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
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * @param string $dateValidation
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;
    }

    /**
     * @return int
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param int $prixTotal
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
    }

    /**
     * @return \Livraison
     */
    public function getIdlivraison()
    {
        return $this->idlivraison;
    }

    /**
     * @param \Livraison $idlivraison
     */
    public function setIdlivraison($idlivraison)
    {
        $this->idlivraison = $idlivraison;
    }

    /**
     * @return \User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param \User $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }


    /**
     * @ORM\OneToMany(targetEntity="BddBundle\Entity\LigneCommande", mappedBy="idcommande")
     */
    private $ligneCommandes;

    /**
     * @ORM\OneToMany(targetEntity="BddBundle\Entity\LigneService", mappedBy="idcommande")
     */
    private $ligneServices;

    /**
     * @return mixed
     */
    public function getLigneCommandes()
    {
        return $this->ligneCommandes;
    }

    /**
     * @param mixed $ligneCommandes
     */
    public function setLigneCommandes($ligneCommandes)
    {
        $this->ligneCommandes = $ligneCommandes;
    }

    /**
     * @return mixed
     */
    public function getLigneServices()
    {
        return $this->ligneServices;
    }

    /**
     * @param mixed $ligneServices
     */
    public function setLigneServices($ligneServices)
    {
        $this->ligneServices = $ligneServices;
    }



    /**
     * @ORM\OneToMany(targetEntity="BddBundle\Entity\Produit", mappedBy="idcommande")
     */
    private $produits;
//
}

