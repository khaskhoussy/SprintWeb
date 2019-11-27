<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image = '/Images/Default.jpg';

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->roles[0];
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->addRole($role);
    }

    /**
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="iduser")
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="idclient")
     */
    private $commantaires;

    /**
     * @ORM\OneToMany(targetEntity="Participation", mappedBy="iduser")
     */
    private $participations;

    /**
     * @ORM\OneToMany(targetEntity="Reclamation", mappedBy="iduser")
     */
    private $reclamations;

    /**
     * @ORM\OneToMany(targetEntity="Sujet", mappedBy="iduser")
     */
    private $sujets;

    /**
     * @ORM\OneToMany(targetEntity="EventComments", mappedBy="iduser")
     */
    private $commentairesEvents;

    /**
     * @return mixed
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * @param mixed $commandes
     */
    public function setCommandes($commandes)
    {
        $this->commandes = $commandes;
    }

    /**
     * @return mixed
     */
    public function getCommantaires()
    {
        return $this->commantaires;
    }

    /**
     * @param mixed $commantaires
     */
    public function setCommantaires($commantaires)
    {
        $this->commantaires = $commantaires;
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

    /**
     * @return mixed
     */
    public function getParticipations()
    {
        return $this->participations;
    }

    /**
     * @param mixed $participations
     */
    public function setParticipations($participations)
    {
        $this->participations = $participations;
    }

    /**
     * @return mixed
     */
    public function getReclamations()
    {
        return $this->reclamations;
    }

    /**
     * @param mixed $reclamations
     */
    public function setReclamations($reclamations)
    {
        $this->reclamations = $reclamations;
    }

    /**
     * @return mixed
     */
    public function getSujets()
    {
        return $this->sujets;
    }

    /**
     * @param mixed $sujets
     */
    public function setSujets($sujets)
    {
        $this->sujets = $sujets;
    }








}

