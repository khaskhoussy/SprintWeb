<?php

namespace GesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackDecoration
 *
 * @ORM\Table(name="pack_decoration")
 * @ORM\Entity
 */
class PackDecoration
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
     * @ORM\Column(name="nom_pack", type="string", length=255, nullable=false)
     */
    private $nomPack;

    /**
     * @var string
     *
     * @ORM\Column(name="typeP", type="string", length=255, nullable=false)
     */
    private $typep;

    /**
     * @var string
     *
     * @ORM\Column(name="description_pack", type="string", length=255, nullable=false)
     */
    private $descriptionPack;

    /**
     * @var float
     *
     * @ORM\Column(name="prixP", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixp;

    /**
     * @var string
     *
     * @ORM\Column(name="image_pack", type="string", length=255, nullable=false)
     */
    private $imagePack;


}

