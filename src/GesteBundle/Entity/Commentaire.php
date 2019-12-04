<?php

namespace GesteBundle\Entity;

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


}

