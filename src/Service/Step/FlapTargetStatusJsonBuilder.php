<?php

namespace App\Service\Step;

use JetBrains\PhpStorm\ArrayShape;

/**
 * Билдер для формирования JSON для шага с первеодом клапана
 *
 * Class FlapTargetStatusJsonBuilder
 * @package App\Service\Step
 */
class FlapTargetStatusJsonBuilder extends DetailedObjectTargetStatusJsonBuilder
{
    /**
     * @return array[]
     * TODO: Переделать MapID под колонку
     */
    #[ArrayShape(['CheckType' => "string", 'MapID' => "string", 'Objects' => "array"])]
    public function generateConfigJson(): array
    {
        $response = ['CheckType' => 'All', 'MapID' => '39b8c323-2726-4e88-8273-5bcf5e9f166e', 'Objects' => []];
        foreach ($this->getTargetStatuses() as $targetStatus) {
            $response['Objects'][] = $targetStatus->getObject()->getId();
        }
        return $response;
    }
}