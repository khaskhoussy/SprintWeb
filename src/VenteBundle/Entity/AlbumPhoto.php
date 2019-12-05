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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDescriptionAlbum()
    {
        return $this->descriptionAlbum;
    }

    /**
     * @param string $descriptionAlbum
     */
    public function setDescriptionAlbum($descriptionAlbum)
    {
        $this->descriptionAlbum = $descriptionAlbum;
    }

    /**
     * @return \ListeTravail
     */
    public function getIdtravail()
    {
        return $this->idtravail;
    }

    /**
     * @param \ListeTravail $idtravail
     */
    public function setIdtravail($idtravail)
    {
        $this->idtravail = $idtravail;
    }




}

