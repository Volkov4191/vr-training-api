<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statusdata
 *
 * @ORM\Table(name="StatusData", uniqueConstraints={@ORM\UniqueConstraint(name="ID_UNIQUE", columns={"ID"})})
 * @ORM\Entity
 */
class Statusdata
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="DataID", type="string", length=255, nullable=true)
     */
    private $dataid;

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
     * @var string|null
     *
     * @ORM\Column(name="Value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="State", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="SortIndex", type="integer", nullable=false)
     */
    private $sortindex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OutlineColorHEX", type="string", length=255, nullable=true)
     */
    private $outlinecolorhex;

    public function getDataid(): ?string
    {
        return $this->dataid;
    }

    public function setDataid(?string $dataid): self
    {
        $this->dataid = $dataid;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getSortindex(): ?int
    {
        return $this->sortindex;
    }

    public function setSortindex(int $sortindex): self
    {
        $this->sortindex = $sortindex;

        return $this;
    }

    public function getOutlinecolorhex(): ?string
    {
        return $this->outlinecolorhex;
    }

    public function setOutlinecolorhex(?string $outlinecolorhex): self
    {
        $this->outlinecolorhex = $outlinecolorhex;

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
