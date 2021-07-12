<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Хотспоты детальных объектов
 *
 * @ORM\Table(name="DetailedObjectLink")
 * @ORM\Entity
 */
class Detailedobjectlink
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
     * @ORM\Column(name="ObjectID", type="string", length=255, nullable=true)
     */
    private $objectid;

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
     * @ORM\Column(name="VerticalRotationX", type="float", precision=10, scale=0, nullable=true)
     */
    private $verticalrotationx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="VerticalRotationY", type="float", precision=10, scale=0, nullable=true)
     */
    private $verticalrotationy;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Zoom", type="float", precision=10, scale=0, nullable=true)
     */
    private $zoom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RotationZ", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationz;

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

    public function getObjectid(): ?string
    {
        return $this->objectid;
    }

    public function setObjectid(?string $objectid): self
    {
        $this->objectid = $objectid;

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

    public function getVerticalrotationx(): ?float
    {
        return $this->verticalrotationx;
    }

    public function setVerticalrotationx(?float $verticalrotationx): self
    {
        $this->verticalrotationx = $verticalrotationx;

        return $this;
    }

    public function getVerticalrotationy(): ?float
    {
        return $this->verticalrotationy;
    }

    public function setVerticalrotationy(?float $verticalrotationy): self
    {
        $this->verticalrotationy = $verticalrotationy;

        return $this;
    }

    public function getZoom(): ?float
    {
        return $this->zoom;
    }

    public function setZoom(?float $zoom): self
    {
        $this->zoom = $zoom;

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


}
