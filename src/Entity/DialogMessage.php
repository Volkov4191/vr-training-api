<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Сообщение диалога
 *
 * @ORM\Table(name="dialog_message", indexes={@ORM\Index(name="IDX_9BAC30205E46C4E2", columns={"dialog_id"})})
 * @ORM\Entity
 */
class DialogMessage
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
     * @ORM\Column(name="from_role", type="string", length=255, nullable=false)
     */
    private $fromRole;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=255, nullable=false)
     */
    private $authorName;

    /**
     * @var string
     *
     * @ORM\Column(name="correct_phrase", type="text", length=0, nullable=false)
     */
    private $correctPhrase;

    /**
     * @var string
     *
     * @ORM\Column(name="wrong_phrase", type="text", length=0, nullable=false)
     */
    private $wrongPhrase;

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
     * @var \Dialog
     *
     * @ORM\ManyToOne(targetEntity="Dialog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dialog_id", referencedColumnName="id")
     * })
     */
    private $dialog;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromRole(): ?string
    {
        return $this->fromRole;
    }

    public function setFromRole(string $fromRole): self
    {
        $this->fromRole = $fromRole;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getCorrectPhrase(): ?string
    {
        return $this->correctPhrase;
    }

    public function setCorrectPhrase(string $correctPhrase): self
    {
        $this->correctPhrase = $correctPhrase;

        return $this;
    }

    public function getWrongPhrase(): ?string
    {
        return $this->wrongPhrase;
    }

    public function setWrongPhrase(string $wrongPhrase): self
    {
        $this->wrongPhrase = $wrongPhrase;

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

    public function getDialog(): ?Dialog
    {
        return $this->dialog;
    }

    public function setDialog(?Dialog $dialog): self
    {
        $this->dialog = $dialog;

        return $this;
    }


}
