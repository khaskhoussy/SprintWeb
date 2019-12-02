<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GesteDuMois
 *
 * @ORM\Table(name="geste_du_mois")
 * @ORM\Entity
 */
class GesteDuMois
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
     * @ORM\Column(name="nom_geste", type="string", length=255, nullable=false)
     */
    private $nomGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="mois_geste", type="string", length=255, nullable=false)
     */
    private $moisGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_geste", type="string", length=255, nullable=false)
     */
    private $descGeste;

    /**
     * @var string
     *
     * @ORM\Column(name="image_geste", type="string", length=255, nullable=false)
     */
    private $imageGeste;


}

