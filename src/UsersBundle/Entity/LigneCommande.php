<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande", indexes={@ORM\Index(name="IDX_3170B74B72148FF6", columns={"IdCommande"}), @ORM\Index(name="IDX_3170B74BBBED0576", columns={"IdProduit"})})
 * @ORM\Entity
 */
class LigneCommande
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
     * @var integer
     *
     * @ORM\Column(name="Qte", type="integer", nullable=false)
     */
    private $qte;

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
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdProduit", referencedColumnName="id")
     * })
     */
    private $idproduit;


}

