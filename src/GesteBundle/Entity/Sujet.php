<?php

namespace GesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 *
 * @ORM\Table(name="sujet", indexes={@ORM\Index(name="IDX_2E13599DF9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Sujet
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
     * @ORM\Column(name="Nom_sujet", type="string", length=255, nullable=false)
     */
    private $nomSujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="DatePub", type="string", length=255, nullable=true)
     */
    private $datepub;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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

