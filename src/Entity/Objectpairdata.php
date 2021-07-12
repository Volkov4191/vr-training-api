<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectpairdata
 *
 * @ORM\Table(name="ObjectPairData")
 * @ORM\Entity
 */
class Objectpairdata
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
     * @var string
     *
     * @ORM\Column(name="Source", type="string", length=255, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="Target", type="string", length=255, nullable=false)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="PresetName", type="string", length=255, nullable=false)
     */
    private $presetname;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getPresetname(): ?string
    {
        return $this->presetname;
    }

    public function setPresetname(string $presetname): self
    {
        $this->presetname = $presetname;

        return $this;
    }


}
