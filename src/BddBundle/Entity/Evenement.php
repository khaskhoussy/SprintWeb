<?php

namespace BddBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="BddBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", length=255, nullable=false)
     */
    private $datedebut;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", length=255, nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participants", type="integer", nullable=false)
     */
    private $nbrParticipants = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="eveprix", type="integer", nullable=false)
     */
    private $eveprix;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_offre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

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
     * @ORM\OneToMany(targetEntity="EventComments", mappedBy="idevenement")
     */
    private $commentairesEvents;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param string $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return string
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param string $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return int
     */
    public function getNbrParticipants()
    {
        return $this->nbrParticipants;
    }

    /**
     * @param int $nbrParticipants
     */
    public function setNbrParticipants($nbrParticipants)
    {
        $this->nbrParticipants = $nbrParticipants;
    }

    /**
     * @return int
     */
    public function getEveprix()
    {
        return $this->eveprix;
    }

    /**
     * @param int $eveprix
     */
    public function setEveprix($eveprix)
    {
        $this->eveprix = $eveprix;
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

    /**
     * @return mixed
     */
    public function getCommentairesEvents()
    {
        return $this->commentairesEvents;
    }

    /**
     * @param mixed $commentairesEvents
     */
    public function setCommentairesEvents($commentairesEvents)
    {
        $this->commentairesEvents = $commentairesEvents;
    }



}

