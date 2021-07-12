<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Таблица детальных объектов из unity
 *
 * @ORM\Table(name="DetailedObjectData", uniqueConstraints={@ORM\UniqueConstraint(name="ID_UNIQUE", columns={"ID"})})
 * @ORM\Entity
 */
class Detailedobjectdata
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="DefaultStatusID", type="string", length=255, nullable=true)
     */
    private $defaultstatusid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ID", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?string $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AlternativeName", type="string", length=255, nullable=true)
     */
    private $alternativename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tooltip", type="string", length=255, nullable=true)
     */
    private $tooltip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ShowOnlyOnHover", type="integer", nullable=true)
     */
    private $showonlyonhover;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ShowMaskOnHover", type="integer", nullable=true)
     */
    private $showmaskonhover;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ShowMaskBlur", type="integer", nullable=true)
     */
    private $showmaskblur;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsInactive", type="boolean", nullable=false)
     */
    private $isinactive = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisiblePopup", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isvisiblepopup = true;

    public function getDefaultstatusid(): ?string
    {
        return $this->defaultstatusid;
    }

    public function setDefaultstatusid(?string $defaultstatusid): self
    {
        $this->defaultstatusid = $defaultstatusid;

        return $this;
    }

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

    public function getAlternativename(): ?string
    {
        return $this->alternativename;
    }

    public function setAlternativename(?string $alternativename): self
    {
        $this->alternativename = $alternativename;

        return $this;
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

    public function getShowonlyonhover(): ?int
    {
        return $this->showonlyonhover;
    }

    public function setShowonlyonhover(?int $showonlyonhover): self
    {
        $this->showonlyonhover = $showonlyonhover;

        return $this;
    }

    public function getShowmaskonhover(): ?int
    {
        return $this->showmaskonhover;
    }

    public function setShowmaskonhover(?int $showmaskonhover): self
    {
        $this->showmaskonhover = $showmaskonhover;

        return $this;
    }

    public function getShowmaskblur(): ?int
    {
        return $this->showmaskblur;
    }

    public function setShowmaskblur(?int $showmaskblur): self
    {
        $this->showmaskblur = $showmaskblur;

        return $this;
    }

    public function getIsinactive(): ?bool
    {
        return $this->isinactive;
    }

    public function setIsinactive(bool $isinactive): self
    {
        $this->isinactive = $isinactive;

        return $this;
    }

    public function getIsvisiblepopup(): ?bool
    {
        return $this->isvisiblepopup;
    }

    public function setIsvisiblepopup(bool $isvisiblepopup): self
    {
        $this->isvisiblepopup = $isvisiblepopup;

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
