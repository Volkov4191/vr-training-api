<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mappointdata
 *
 * @ORM\Table(name="MapPointData")
 * @ORM\Entity
 */
class Mappointdata
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocationID", type="string", length=255, nullable=true)
     */
    private $locationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MapID", type="string", length=255, nullable=true)
     */
    private $mapid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PositionX", type="float", precision=10, scale=0, nullable=true)
     */
    private $positionx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PositionY", type="float", precision=10, scale=0, nullable=true)
     */
    private $positiony;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RotationW", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationw;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RotationX", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RotationY", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationy;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RotationZ", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TourName", type="string", length=255, nullable=true)
     */
    private $tourname;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLocationid(): ?string
    {
        return $this->locationid;
    }

    public function setLocationid(?string $locationid): self
    {
        $this->locationid = $locationid;

        return $this;
    }

    public function getMapid(): ?string
    {
        return $this->mapid;
    }

    public function setMapid(?string $mapid): self
    {
        $this->mapid = $mapid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPositionx(): ?float
    {
        return $this->positionx;
    }

    public function setPositionx(?float $positionx): self
    {
        $this->positionx = $positionx;

        return $this;
    }

    public function getPositiony(): ?float
    {
        return $this->positiony;
    }

    public function setPositiony(?float $positiony): self
    {
        $this->positiony = $positiony;

        return $this;
    }

    public function getRotationw(): ?float
    {
        return $this->rotationw;
    }

    public function setRotationw(?float $rotationw): self
    {
        $this->rotationw = $rotationw;

        return $this;
    }

    public function getRotationx(): ?float
    {
        return $this->rotationx;
    }

    public function setRotationx(?float $rotationx): self
    {
        $this->rotationx = $rotationx;

        return $this;
    }

    public function getRotationy(): ?float
    {
        return $this->rotationy;
    }

    public function setRotationy(?float $rotationy): self
    {
        $this->rotationy = $rotationy;

        return $this;
    }

    public function getRotationz(): ?float
    {
        return $this->rotationz;
    }

    public function setRotationz(?float $rotationz): self
    {
        $this->rotationz = $rotationz;

        return $this;
    }

    public function getTourname(): ?string
    {
        return $this->tourname;
    }

    public function setTourname(?string $tourname): self
    {
        $this->tourname = $tourname;

        return $this;
    }


}
