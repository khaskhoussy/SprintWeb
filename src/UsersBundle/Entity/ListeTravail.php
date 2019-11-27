<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeTravail
 *
 * @ORM\Table(name="liste_travail", indexes={@ORM\Index(name="IDX_21B3E2EAF9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class ListeTravail
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
     * @ORM\Column(name="description_travail", type="string", length=255, nullable=false)
     */
    private $descriptionTravail;

    /**
     * @var string
     *
     * @ORM\Column(name="date_travail", type="string", length=255, nullable=false)
     */
    private $dateTravail;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="id")
     * })
     */
    private $iduser;

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
    public function getDescriptionTravail()
    {
        return $this->descriptionTravail;
    }

    /**
     * @param string $descriptionTravail
     */
    public function setDescriptionTravail($descriptionTravail)
    {
        $this->descriptionTravail = $descriptionTravail;
    }

    /**
     * @return string
     */
    public function getDateTravail()
    {
        return $this->dateTravail;
    }

    /**
     * @param string $dateTravail
     */
    public function setDateTravail($dateTravail)
    {
        $this->dateTravail = $dateTravail;
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
     * @return \User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param \User $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }


}

