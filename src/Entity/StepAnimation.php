<?php

namespace App\Entity;

use App\Repository\StepAnimationRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=StepAnimationRepository::class)
 */
class StepAnimation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Step::class, inversedBy="stepAnimations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $step;

    /**
     * @ORM\ManyToOne(targetEntity=Detailedobjectdata::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="ID", nullable=false)
     * })
     */
    private $object;

    /**
     * @ORM\ManyToOne(targetEntity=Statusdata::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_status_id", referencedColumnName="ID", nullable=false)
     * })
     */
    private $from_status;

    /**
     * @ORM\ManyToOne(targetEntity=Statusdata::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_status_id", referencedColumnName="ID", nullable=false)
     * })
     */
    private $to_status;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active = 1;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_deleted = 0 ;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getObject(): ?Detailedobjectdata
    {
        return $this->object;
    }

    public function setObject(?Detailedobjectdata $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getFromStatus(): ?Statusdata
    {
        return $this->from_status;
    }

    public function setFromStatus(?Statusdata $from_status): self
    {
        $this->from_status = $from_status;

        return $this;
    }

    public function getToStatus(): ?Statusdata
    {
        return $this->to_status;
    }

    public function setToStatus(?Statusdata $to_status): self
    {
        $this->to_status = $to_status;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->is_deleted;
    }

    public function setIsDeleted(bool $is_deleted): self
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
