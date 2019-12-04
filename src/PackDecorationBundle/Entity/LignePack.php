<?php

namespace PackDecorationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignePack
 *
 * @ORM\Table(name="ligne_pack", indexes={@ORM\Index(name="IDX_8DD662A1BBED0576", columns={"IdProduit"}), @ORM\Index(name="IDX_8DD662A1E38F058B", columns={"IdPack"})})
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

