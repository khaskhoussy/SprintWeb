<?php

namespace PackDecorationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="IDX_B26681E77FFFCEE", columns={"IdOffre"})})
 * @ORM\Entity
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
     * @var string
     *
     * @ORM\Column(name="datedebut", type="string", length=255, nullable=false)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="string", length=255, nullable=false)
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
    private $nbrParticipants;

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


}

