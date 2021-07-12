<?php

namespace App\Service\Step;

use App\Entity\Step;
use Exception;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Генератор JSON для шага по умолчанию
 *
 * Class DefaultJsonBuilder
 * @package App\Service\Step
 */
abstract class DefaultJsonBuilder implements iStepJsonBuilder
{
    /**
     * StepJsonBuilder constructor.
     * @param ManagerRegistry $registry
     * @param Step $step
     */
    public function __construct(
        protected ManagerRegistry $registry,
        protected Step $step
    )
    {
    }

    /**
     * @return array
     * @throws Exception
     */
    public function generateConfigJson(): array
    {
        throw new Exception('Redefine method: '.__METHOD__);
    }

    /**
     * @return array
     */
    public function generateEndStates(): array
    {
        return [];
    }
}