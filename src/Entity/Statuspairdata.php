<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statuspairdata
 *
 * @ORM\Table(name="StatusPairData")
 * @ORM\Entity
 */
class Statuspairdata
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
     * @ORM\Column(name="SourceObjectID", type="string", length=255, nullable=false)
     */
    private $sourceobjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="SourceStatusID", type="string", length=255, nullable=false)
     */
    private $sourcestatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="TargetObjectID", type="string", length=255, nullable=false)
     */
    private $targetobjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="TargetStatusID", type="string", length=255, nullable=false)
     */
    private $targetstatusid;

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

    public function getSourceobjectid(): ?string
    {
        return $this->sourceobjectid;
    }

    public function setSourceobjectid(string $sourceobjectid): self
    {
        $this->sourceobjectid = $sourceobjectid;

        return $this;
    }

    public function getSourcestatusid(): ?string
    {
        return $this->sourcestatusid;
    }

    public function setSourcestatusid(string $sourcestatusid): self
    {
        $this->sourcestatusid = $sourcestatusid;

        return $this;
    }

    public function getTargetobjectid(): ?string
    {
        return $this->targetobjectid;
    }

    public function setTargetobjectid(string $targetobjectid): self
    {
        $this->targetobjectid = $targetobjectid;

        return $this;
    }

    public function getTargetstatusid(): ?string
    {
        return $this->targetstatusid;
    }

    public function setTargetstatusid(string $targetstatusid): self
    {
        $this->targetstatusid = $targetstatusid;

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
