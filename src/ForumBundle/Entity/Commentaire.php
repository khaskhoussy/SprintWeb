<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="IDX_67F068BC5D23CE99", columns={"IdClient"}), @ORM\Index(name="IDX_67F068BCF66A231C", columns={"IdSujet"})})
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
     * @ORM\Column(name="DatePub", type="datetime", length=255, nullable=false)
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descriptionCommentaire
     *
     * @param string $descriptionCommentaire
     *
     * @return Commentaire
     */
    public function setDescriptionCommentaire($descriptionCommentaire)
    {
        $this->descriptionCommentaire = $descriptionCommentaire;

        return $this;
    }

    /**
     * Get descriptionCommentaire
     *
     * @return string
     */
    public function getDescriptionCommentaire()
    {
        return $this->descriptionCommentaire;
    }

    /**
     * Set datepub
     *
     * @param string $datepub
     *
     * @return Commentaire
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
     * Set idclient
     *
     * @param \ForumBundle\Entity\User $idclient
     *
     * @return Commentaire
     */
    public function setIdclient(\ForumBundle\Entity\User $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \ForumBundle\Entity\User
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set idsujet
     *
     * @param \ForumBundle\Entity\Sujet $idsujet
     *
     * @return Commentaire
     */
    public function setIdsujet(\ForumBundle\Entity\Sujet $idsujet = null)
    {
        $this->idsujet = $idsujet;

        return $this;
    }

    /**
     * Get idsujet
     *
     * @return \ForumBundle\Entity\Sujet
     */
    public function getIdsujet()
    {
        return $this->idsujet;
    }
}
