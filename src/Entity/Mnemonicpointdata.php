<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mnemonicpointdata
 *
 * @ORM\Table(name="MnemonicPointData")
 * @ORM\Entity
 */
class Mnemonicpointdata
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
     * @var string|null
     *
     * @ORM\Column(name="ObjectID", type="string", length=255, nullable=true)
     */
    private $objectid;

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

    /**
     * @var float|null
     *
     * @ORM\Column(name="ScaleX", type="float", precision=10, scale=0, nullable=true)
     */
    private $scalex;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ScaleY", type="float", precision=10, scale=0, nullable=true)
     */
    private $scaley;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ScaleZ", type="float", precision=10, scale=0, nullable=true)
     */
    private $scalez;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SizeX", type="float", precision=10, scale=0, nullable=true)
     */
    private $sizex;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SizeY", type="float", precision=10, scale=0, nullable=true)
     */
    private $sizey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LabelSettings", type="text", length=65535, nullable=true)
     */
    private $labelsettings;

    /**
     * @var bool
     *
     * @ORM\Column(name="ShowModificatorValue", type="boolean", nullable=false)
     */
    private $showmodificatorvalue = '0';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getObjectid(): ?string
    {
        return $this->objectid;
    }

    public function setObjectid(?string $objectid): self
    {
        $this->objectid = $objectid;

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

    public function getScalex(): ?float
    {
        return $this->scalex;
    }

    public function setScalex(?float $scalex): self
    {
        $this->scalex = $scalex;

        return $this;
    }

    public function getScaley(): ?float
    {
        return $this->scaley;
    }

    public function setScaley(?float $scaley): self
    {
        $this->scaley = $scaley;

        return $this;
    }

    public function getScalez(): ?float
    {
        return $this->scalez;
    }

    public function setScalez(?float $scalez): self
    {
        $this->scalez = $scalez;

        return $this;
    }

    public function getSizex(): ?float
    {
        return $this->sizex;
    }

    public function setSizex(?float $sizex): self
    {
        $this->sizex = $sizex;

        return $this;
    }

    public function getSizey(): ?float
    {
        return $this->sizey;
    }

    public function setSizey(?float $sizey): self
    {
        $this->sizey = $sizey;

        return $this;
    }

    public function getLabelsettings(): ?string
    {
        return $this->labelsettings;
    }

    public function setLabelsettings(?string $labelsettings): self
    {
        $this->labelsettings = $labelsettings;

        return $this;
    }

    public function getShowmodificatorvalue(): ?bool
    {
        return $this->showmodificatorvalue;
    }

    public function setShowmodificatorvalue(bool $showmodificatorvalue): self
    {
        $this->showmodificatorvalue = $showmodificatorvalue;

        return $this;
    }


}
