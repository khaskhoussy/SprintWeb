<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity
 */
class Recette
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
     * @ORM\Column(name="nom_rec", type="string", length=255, nullable=false)
     */
    private $nomRec;

    /**
     * @var string
     *
     * @ORM\Column(name="rec_description", type="string", length=255, nullable=false)
     */
    private $recDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="type_rec", type="string", length=255, nullable=false)
     */
    private $typeRec;

    /**
     * @var string
     *
     * @ORM\Column(name="imagerecette", type="string", length=255, nullable=false)
     */
    private $imagerecette;


}

