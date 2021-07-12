<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statusmodificatorfloatrange
 *
 * @ORM\Table(name="StatusModificatorFloatRange")
 * @ORM\Entity
 */
class Statusmodificatorfloatrange
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
     * @var float|null
     *
     * @ORM\Column(name="MinValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $minvalue;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MaxValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxvalue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ParentID", type="string", length=255, nullable=true)
     */
    private $parentid;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getMinvalue(): ?float
    {
        return $this->minvalue;
    }

    public function setMinvalue(?float $minvalue): self
    {
        $this->minvalue = $minvalue;

        return $this;
    }

    public function getMaxvalue(): ?float
    {
        return $this->maxvalue;
    }

    public function setMaxvalue(?float $maxvalue): self
    {
        $this->maxvalue = $maxvalue;

        return $this;
    }

    public function getParentid(): ?string
    {
        return $this->parentid;
    }

    public function setParentid(?string $parentid): self
    {
        $this->parentid = $parentid;

        return $this;
    }


}
