<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tourvideodata
 *
 * @ORM\Table(name="TourVideoData")
 * @ORM\Entity
 */
class Tourvideodata
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return trim($this->name);
    }

}
