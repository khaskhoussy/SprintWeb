<?php

namespace PackDecorationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\Column(name="nom_cat", type="string", length=255, nullable=false)
     */
    private $nomCat;

    /**
     * @var string
     *
     * @ORM\Column(name="description_cat", type="string", length=255, nullable=false)
     */
    private $descriptionCat;


}

