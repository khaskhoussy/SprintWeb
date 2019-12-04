<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneService
 *
 * @ORM\Table(name="ligne_service", indexes={@ORM\Index(name="IDX_7E04A4EBF9C28DE1", columns={"IdUser"}), @ORM\Index(name="IDX_7E04A4EB72148FF6", columns={"IdCommande"})})
 * @ORM\Entity
 */
class LigneService
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date", nullable=false)
     */
    private $datefin;

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


}

