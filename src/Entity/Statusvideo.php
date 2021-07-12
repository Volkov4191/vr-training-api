<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statusvideo
 *
 * @ORM\Table(name="StatusVideo")
 * @ORM\Entity
 */
class Statusvideo
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
     * @var string|null
     *
     * @ORM\Column(name="ImageID", type="string", length=255, nullable=true)
     */
    private $imageid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StatusID", type="string", length=255, nullable=true)
     */
    private $statusid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RepeatCount", type="integer", nullable=true)
     */
    private $repeatcount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IconID", type="string", length=255, nullable=true)
     */
    private $iconid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Speed", type="float", precision=10, scale=0, nullable=true)
     */
    private $speed;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getImageid(): ?string
    {
        return $this->imageid;
    }

    public function setImageid(?string $imageid): self
    {
        $this->imageid = $imageid;

        return $this;
    }

    public function getStatusid(): ?string
    {
        return $this->statusid;
    }

    public function setStatusid(?string $statusid): self
    {
        $this->statusid = $statusid;

        return $this;
    }

    public function getRepeatcount(): ?int
    {
        return $this->repeatcount;
    }

    public function setRepeatcount(?int $repeatcount): self
    {
        $this->repeatcount = $repeatcount;

        return $this;
    }

    public function getIconid(): ?string
    {
        return $this->iconid;
    }

    public function setIconid(?string $iconid): self
    {
        $this->iconid = $iconid;

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

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(?float $speed): self
    {
        $this->speed = $speed;

        return $this;
    }


}
