<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Minimapdata
 *
 * @ORM\Table(name="MiniMapData")
 * @ORM\Entity
 */
class Minimapdata
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="TourName", type="string", length=255, nullable=true)
     */
    private $tourname;

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

    public function getTourname(): ?string
    {
        return $this->tourname;
    }

    public function setTourname(?string $tourname): self
    {
        $this->tourname = $tourname;

        return $this;
    }


}
