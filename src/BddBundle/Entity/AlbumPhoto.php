<?php

namespace BddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlbumPhoto
 *
 * @ORM\Table(name="album_photo")
 * @ORM\Entity
 */
class AlbumPhoto
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
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description_album", type="string", length=255, nullable=false)
     */
    private $descriptionAlbum;

    /**
     * @var \ListeTravail
     *
     * @ORM\ManyToOne(targetEntity="ListeTravail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdTravail", referencedColumnName="id")
     * })
     */
    private $idtravail;


}

