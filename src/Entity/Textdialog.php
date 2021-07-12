<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textdialog
 *
 * @ORM\Table(name="TextDialog", uniqueConstraints={@ORM\UniqueConstraint(name="ID_UNIQUE", columns={"ID"})})
 * @ORM\Entity
 */
class Textdialog
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
     * @ORM\Column(name="Dialog", type="text", length=65535, nullable=true)
     */
    private $dialog;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PhaseNumber", type="integer", nullable=true)
     */
    private $phasenumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ScenarioName", type="string", length=255, nullable=true)
     */
    private $scenarioname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StepNumber", type="integer", nullable=true)
     */
    private $stepnumber;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDialog(): ?string
    {
        return $this->dialog;
    }

    public function setDialog(?string $dialog): self
    {
        $this->dialog = $dialog;

        return $this;
    }

    public function getPhasenumber(): ?int
    {
        return $this->phasenumber;
    }

    public function setPhasenumber(?int $phasenumber): self
    {
        $this->phasenumber = $phasenumber;

        return $this;
    }

    public function getScenarioname(): ?string
    {
        return $this->scenarioname;
    }

    public function setScenarioname(?string $scenarioname): self
    {
        $this->scenarioname = $scenarioname;

        return $this;
    }

    public function getStepnumber(): ?int
    {
        return $this->stepnumber;
    }

    public function setStepnumber(?int $stepnumber): self
    {
        $this->stepnumber = $stepnumber;

        return $this;
    }


}
