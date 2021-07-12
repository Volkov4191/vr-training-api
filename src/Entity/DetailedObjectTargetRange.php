<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Диапазон возможных значений для детального объекта
 *
 * @ORM\Table(name="detailed_object_target_range", indexes={@ORM\Index(name="IDX_E63ECF9B232D562B", columns={"object_id"}), @ORM\Index(name="IDX_E63ECF9B73B21E9C", columns={"step_id"})})
 * @ORM\Entity
 */
class DetailedObjectTargetRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value_from", type="float", precision=10, scale=0, nullable=true)
     */
    private $valueFrom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value_to", type="float", precision=10, scale=0, nullable=true)
     */
    private $valueTo;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = 0;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Detailedobjectdata
     *
     * @ORM\ManyToOne(targetEntity="Detailedobjectdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="ID")
     * })
     */
    private $object;

    /**
     * @var \Step
     *
     * @ORM\ManyToOne(targetEntity="Step")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     * })
     */
    private $step;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValueFrom(): ?float
    {
        return $this->valueFrom;
    }

    public function setValueFrom(?float $valueFrom): self
    {
        $this->valueFrom = $valueFrom;

        return $this;
    }

    public function getValueTo(): ?float
    {
        return $this->valueTo;
    }

    public function setValueTo(?float $valueTo): self
    {
        $this->valueTo = $valueTo;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getObject(): ?Detailedobjectdata
    {
        return $this->object;
    }

    public function setObject(?Detailedobjectdata $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getStep(): ?Step
    {
        return $this->step;
    }

    public function setStep(?Step $step): self
    {
        $this->step = $step;

        return $this;
    }


}
