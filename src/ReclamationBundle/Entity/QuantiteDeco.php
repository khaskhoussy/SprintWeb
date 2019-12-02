<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuantiteDeco
 *
 * @ORM\Table(name="quantite__deco", indexes={@ORM\Index(name="IDX_60BD5805BBED0576", columns={"IdProduit"}), @ORM\Index(name="IDX_60BD5805E38F058B", columns={"IdPack"})})
 * @ORM\Entity
 */
class QuantiteDeco
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
     * @ORM\Column(name="quantite_dec", type="integer", nullable=false)
     */
    private $quantiteDec;

    /**
     * @var string
     *
     * @ORM\Column(name="description_deco", type="string", length=255, nullable=false)
     */
    private $descriptionDeco;

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

