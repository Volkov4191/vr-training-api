<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationdata
 *
 * @ORM\Table(name="LocationData")
 * @ORM\Entity
 */
class Locationdata
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var float|null
     *
     * @ORM\Column(name="OffsetRotationX", type="float", precision=10, scale=0, nullable=true)
     */
    private $offsetrotationx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="OffsetRotationY", type="float", precision=10, scale=0, nullable=true)
     */
    private $offsetrotationy;

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

    public function getId(): ?string
    {
        return $this->id;
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

    public function getOffsetrotationx(): ?float
    {
        return $this->offsetrotationx;
    }

    public function setOffsetrotationx(?float $offsetrotationx): self
    {
        $this->offsetrotationx = $offsetrotationx;

        return $this;
    }

    public function getOffsetrotationy(): ?float
    {
        return $this->offsetrotationy;
    }

    public function setOffsetrotationy(?float $offsetrotationy): self
    {
        $this->offsetrotationy = $offsetrotationy;

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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return trim($this->name);
    }


}
