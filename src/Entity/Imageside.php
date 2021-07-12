<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imageside
 *
 * @ORM\Table(name="ImageSide")
 * @ORM\Entity
 */
class Imageside
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
     * @ORM\Column(name="DataID", type="string", length=255, nullable=true)
     */
    private $dataid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LocationID", type="string", length=255, nullable=true)
     */
    private $locationid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Side", type="integer", nullable=true)
     */
    private $side;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDataid(): ?string
    {
        return $this->dataid;
    }

    public function setDataid(?string $dataid): self
    {
        $this->dataid = $dataid;

        return $this;
    }

    public function getLocationid(): ?string
    {
        return $this->locationid;
    }

    public function setLocationid(?string $locationid): self
    {
        $this->locationid = $locationid;

        return $this;
    }

    public function getSide(): ?int
    {
        return $this->side;
    }

    public function setSide(?int $side): self
    {
        $this->side = $side;

        return $this;
    }


}
