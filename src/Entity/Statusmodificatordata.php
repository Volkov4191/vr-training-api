<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statusmodificatordata
 *
 * @ORM\Table(name="StatusModificatorData")
 * @ORM\Entity
 */
class Statusmodificatordata
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
     * @ORM\Column(name="ModificatorID", type="string", length=255, nullable=true)
     */
    private $modificatorid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StatusID", type="string", length=255, nullable=true)
     */
    private $statusid;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getModificatorid(): ?string
    {
        return $this->modificatorid;
    }

    public function setModificatorid(?string $modificatorid): self
    {
        $this->modificatorid = $modificatorid;

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


}
