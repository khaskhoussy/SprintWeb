<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignePack
 *
 * @ORM\Table(name="ligne_pack")
 * @ORM\Entity
 */
class LignePack
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
     * @ORM\Column(name="quantite_pack", type="integer", nullable=false)
     */
    private $quantitePack;

    /**
     * @var string
     *
     * @ORM\Column(name="description_pack", type="string", length=255, nullable=false)
     */
    private $descriptionPack;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdProduit", referencedColumnName="id")
     * })
     */
    private $idproduit;

    /**
     * @var \PackDecoration
     *
     * @ORM\ManyToOne(targetEntity="PackDecoration")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdPack", referencedColumnName="id")
     * })
     */
    private $idpack;


}

