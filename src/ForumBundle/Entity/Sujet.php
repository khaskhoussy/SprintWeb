<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * Sujet
 *
 * @ORM\Table(name="sujet", indexes={@ORM\Index(name="IDX_2E13599DF9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Sujet
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
     * @ORM\Column(name="Nom_sujet", type="string", length=255, nullable=false)
     */
    private $nomSujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=255, nullable=false)
     */


    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="DatePub", type="string", length=255, nullable=true)
     */
    private $datepub;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSujet
     *
     * @param string $nomSujet
     *
     * @return Sujet
     */
    public function setNomSujet($nomSujet)
    {
        $this->nomSujet = $nomSujet;

        return $this;
    }

    /**
     * Get nomSujet
     *
     * @return string
     */
    public function getNomSujet()
    {
        return $this->nomSujet;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Sujet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set datepub
     *
     * @param string $datepub
     *
     * @return Sujet
     */
    public function setDatepub($datepub)
    {
        $this->datepub = $datepub;

        return $this;
    }

    /**
     * Get datepub
     *
     * @return string
     */
    public function getDatepub()
    {
        return $this->datepub;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sujet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set iduser
     *
     * @param \ForumBundle\Entity\User $iduser
     *
     * @return Sujet
     */
    public function setIduser(\ForumBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \ForumBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

}
