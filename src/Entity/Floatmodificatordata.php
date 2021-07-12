<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Floatmodificatordata
 *
 * @ORM\Table(name="FloatModificatorData")
 * @ORM\Entity
 */
class Floatmodificatordata
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="DefaultValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $defaultvalue;

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

    public function getDefaultvalue(): ?float
    {
        return $this->defaultvalue;
    }

    public function setDefaultvalue(?float $defaultvalue): self
    {
        $this->defaultvalue = $defaultvalue;

        return $this;
    }

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


}
