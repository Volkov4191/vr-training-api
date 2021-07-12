<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Модификатор для детального объекта
 *
 * @ORM\Table(name="DetailedObjectModificatorData")
 * @ORM\Entity
 */
class Detailedobjectmodificatordata
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="DetailedObjectID", type="string", length=255, nullable=true)
     */
    private $detailedobjectid;

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

    public function getDetailedobjectid(): ?string
    {
        return $this->detailedobjectid;
    }

    public function setDetailedobjectid(?string $detailedobjectid): self
    {
        $this->detailedobjectid = $detailedobjectid;

        return $this;
    }

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


}
