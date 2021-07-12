<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statusimage
 *
 * @ORM\Table(name="StatusImage")
 * @ORM\Entity
 */
class Statusimage
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
     * @ORM\Column(name="LinkID", type="string", length=255, nullable=true)
     */
    private $linkid;

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

    public function getLinkid(): ?string
    {
        return $this->linkid;
    }

    public function setLinkid(?string $linkid): self
    {
        $this->linkid = $linkid;

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
