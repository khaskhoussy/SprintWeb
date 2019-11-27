<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="description_commentaire", type="string", length=255, nullable=false)
     */
    private $descriptionCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="DatePub", type="string", length=255, nullable=false)
     */
    private $datepub;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Sujet
     *
     * @ORM\ManyToOne(targetEntity="Sujet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdSujet", referencedColumnName="id")
     * })
     */
    private $idsujet;

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
    public function getDescriptionCommentaire()
    {
        return $this->descriptionCommentaire;
    }

    /**
     * @param string $descriptionCommentaire
     */
    public function setDescriptionCommentaire($descriptionCommentaire)
    {
        $this->descriptionCommentaire = $descriptionCommentaire;
    }

    /**
     * @return string
     */
    public function getDatepub()
    {
        return $this->datepub;
    }

    /**
     * @param string $datepub
     */
    public function setDatepub($datepub)
    {
        $this->datepub = $datepub;
    }

    /**
     * @return \User
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * @param \User $idclient
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
    }

    /**
     * @return \Sujet
     */
    public function getIdsujet()
    {
        return $this->idsujet;
    }

    /**
     * @param \Sujet $idsujet
     */
    public function setIdsujet($idsujet)
    {
        $this->idsujet = $idsujet;
    }


}

