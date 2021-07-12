<?php

namespace App\Service\Step;

use App\Entity\Step;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Интерфейс для создания генератора JSON конкретного шага
 *
 * Interface iStepJsonBuilder
 * @package App\Service\Step
 */
interface iStepJsonBuilder
{
    /**
     * iStepJsonBuilder constructor.
     * @param ManagerRegistry $registry
     * @param Step $step
     */
    public function __construct(ManagerRegistry $registry, Step $step);

    /**
     * Сформировать JSON
     *
     * @return array
     */
    public function generateConfigJson(): array;

    /**
     * Сформировать конечные состояния объектов, которые менялись в рамках шага
     *
     * @return array
     */
    public function generateEndStates(): array;
}