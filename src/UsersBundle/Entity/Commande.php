<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="IDX_6EEAA67D5AE6B449", columns={"idLivraison"}), @ORM\Index(name="IDX_6EEAA67DF9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Commande
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
     * @ORM\Column(name="date_validation", type="string", length=255, nullable=false)
     */
    private $dateValidation;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_total", type="integer", nullable=false)
     */
    private $prixTotal;

    /**
     * @var \Livraison
     *
     * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLivraison", referencedColumnName="id")
     * })
     */
    private $idlivraison;

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

