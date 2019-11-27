<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
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
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=255, nullable=false)
     */
    private $contenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_recla", type="datetime", nullable=false)
     */
    private $dateRecla;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_recla", type="string", length=255, nullable=false)
     */
    private $etatRecla;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCommande", referencedColumnName="id")
     * })
     */
    private $idcommande;

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
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param string $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return string
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * @param string $contenue
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    }

    /**
     * @return \DateTime
     */
    public function getDateRecla()
    {
        return $this->dateRecla;
    }

    /**
     * @param \DateTime $dateRecla
     */
    public function setDateRecla($dateRecla)
    {
        $this->dateRecla = $dateRecla;
    }

    /**
     * @return string
     */
    public function getEtatRecla()
    {
        return $this->etatRecla;
    }

    /**
     * @param string $etatRecla
     */
    public function setEtatRecla($etatRecla)
    {
        $this->etatRecla = $etatRecla;
    }

    /**
     * @return \Commande
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * @param \Commande $idcommande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;
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


}

