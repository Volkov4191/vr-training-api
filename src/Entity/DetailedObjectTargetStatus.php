<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Целевой статус детального объекта
 *
 * @ORM\Table(name="detailed_object_target_status", indexes={@ORM\Index(name="IDX_13A86F71232D562B", columns={"object_id"}), @ORM\Index(name="FK_13A86F71232D562B", columns={"object_id"}), @ORM\Index(name="IDX_13A86F7173B21E9C", columns={"step_id"}), @ORM\Index(name="IDX_13A86F716BF700BD", columns={"status_id"}), @ORM\Index(name="FK_13A86F716BF700BD", columns={"status_id"})})
 * @ORM\Entity
 */
class DetailedObjectTargetStatus
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
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
     * @var \Statusdata
     *
     * @ORM\ManyToOne(targetEntity="Statusdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="ID")
     * })
     */
    private $status;

    /**
     * @var \Step
     *
     * @ORM\ManyToOne(targetEntity="Step")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     * })
     */
    private $step;

    /**
     * @ORM\ManyToOne(targetEntity=Tourvideodata::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="ID")
     * })
     */
    private $video;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getStatus(): ?Statusdata
    {
        return $this->status;
    }

    public function setStatus(?Statusdata $status): self
    {
        $this->status = $status;

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

    public function getVideo(): ?Tourvideodata
    {
        return $this->video;
    }

    public function setVideo(?Tourvideodata $video): self
    {
        $this->video = $video;

        return $this;
    }


}
