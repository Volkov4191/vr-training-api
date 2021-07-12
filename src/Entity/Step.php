<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Step
 *
 * @ORM\Table(name="step", indexes={@ORM\Index(name="IDX_43B9FE3CC54C8C93", columns={"type_id"}), @ORM\Index(name="IDX_43B9FE3C2298D193", columns={"stage_id"}), @ORM\Index(name="IDX_43B9FE3C29C1004E", columns={"video_id"})})
 * @ORM\Entity
 */
class Step
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     * @Gedmo\Slug(fields={"name"}, updatable=true, separator="-")
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort;

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
     * @var \Stage
     *
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     * })
     */
    private $stage;

    /**
     * @var \Tourvideodata
     *
     * @ORM\ManyToOne(targetEntity="Tourvideodata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="ID")
     * })
     */
    private $video;

    /**
     * @var \StepType
     *
     * @ORM\ManyToOne(targetEntity="StepType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Locationdata::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="ID")
     * })
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=StepAnimation::class, mappedBy="step")
     */
    private $stepAnimations;

    public function __construct()
    {
        $this->stepAnimations = new ArrayCollection();
    }

    public function getType(): ?StepType
    {
        return $this->type;
    }

    public function setType(?StepType $type): self
    {
        $this->type = $type;

        return $this;
    }

    #[Pure]
    public function __toString(): string
    {
        return $this->getName();
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

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

    public function getStage(): ?Stage
    {
        return $this->stage;
    }

    public function setStage(?Stage $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    public function getLocation(): ?Locationdata
    {
        return $this->location;
    }

    public function setLocation(?Locationdata $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|StepAnimation[]
     */
    public function getStepAnimations(): Collection
    {
        return $this->stepAnimations;
    }

    public function addStepAnimation(StepAnimation $stepAnimation): self
    {
        if (!$this->stepAnimations->contains($stepAnimation)) {
            $this->stepAnimations[] = $stepAnimation;
            $stepAnimation->setStep($this);
        }

        return $this;
    }

    public function removeStepAnimation(StepAnimation $stepAnimation): self
    {
        if ($this->stepAnimations->removeElement($stepAnimation)) {
            // set the owning side to null (unless already changed)
            if ($stepAnimation->getStep() === $this) {
                $stepAnimation->setStep(null);
            }
        }

        return $this;
    }
}
