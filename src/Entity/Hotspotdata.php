<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Настройки хотстпопа
 *
 * @ORM\Table(name="HotspotData")
 * @ORM\Entity
 */
class Hotspotdata
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="HexColor", type="string", length=255, nullable=true)
     */
    private $hexcolor;

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
     * @ORM\Column(name="Tooltip", type="string", length=255, nullable=true)
     */
    private $tooltip;

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
     * @var string|null
     *
     * @ORM\Column(name="SourceLocationID", type="string", length=255, nullable=true)
     */
    private $sourcelocationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TargetLocationID", type="string", length=255, nullable=true)
     */
    private $targetlocationid;

    /**
     * @var float|null
     *
     * @ORM\Column(name="VerticalPositionX", type="float", precision=10, scale=0, nullable=true)
     */
    private $verticalpositionx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="VerticalPositionY", type="float", precision=10, scale=0, nullable=true)
     */
    private $verticalpositiony;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CustomIcon", type="blob", length=65535, nullable=true)
     */
    private $customicon;

    public function getHexcolor(): ?string
    {
        return $this->hexcolor;
    }

    public function setHexcolor(?string $hexcolor): self
    {
        $this->hexcolor = $hexcolor;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;

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

    public function getSourcelocationid(): ?string
    {
        return $this->sourcelocationid;
    }

    public function setSourcelocationid(?string $sourcelocationid): self
    {
        $this->sourcelocationid = $sourcelocationid;

        return $this;
    }

    public function getTargetlocationid(): ?string
    {
        return $this->targetlocationid;
    }

    public function setTargetlocationid(?string $targetlocationid): self
    {
        $this->targetlocationid = $targetlocationid;

        return $this;
    }

    public function getVerticalpositionx(): ?float
    {
        return $this->verticalpositionx;
    }

    public function setVerticalpositionx(?float $verticalpositionx): self
    {
        $this->verticalpositionx = $verticalpositionx;

        return $this;
    }

    public function getVerticalpositiony(): ?float
    {
        return $this->verticalpositiony;
    }

    public function setVerticalpositiony(?float $verticalpositiony): self
    {
        $this->verticalpositiony = $verticalpositiony;

        return $this;
    }

    public function getCustomicon()
    {
        return $this->customicon;
    }

    public function setCustomicon($customicon): self
    {
        $this->customicon = $customicon;

        return $this;
    }


}
