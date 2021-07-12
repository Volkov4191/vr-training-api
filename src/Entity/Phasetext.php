<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phasetext
 *
 * @ORM\Table(name="PhaseText")
 * @ORM\Entity
 */
class Phasetext
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cause", type="text", length=65535, nullable=true)
     */
    private $cause;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ErrorText", type="text", length=65535, nullable=true)
     */
    private $errortext;

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
     * @ORM\Column(name="ScenarioName", type="string", length=255, nullable=true)
     */
    private $scenarioname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ScenarioPhase", type="integer", nullable=true)
     */
    private $scenariophase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Title", type="text", length=65535, nullable=true)
     */
    private $title;

    public function getCause(): ?string
    {
        return $this->cause;
    }

    public function setCause(?string $cause): self
    {
        $this->cause = $cause;

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

    public function getErrortext(): ?string
    {
        return $this->errortext;
    }

    public function setErrortext(?string $errortext): self
    {
        $this->errortext = $errortext;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
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

    public function getScenariophase(): ?int
    {
        return $this->scenariophase;
    }

    public function setScenariophase(?int $scenariophase): self
    {
        $this->scenariophase = $scenariophase;

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


}
