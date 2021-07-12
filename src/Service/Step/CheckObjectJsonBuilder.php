<?php

namespace App\Service\Step;

use Exception;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Билдер для формирования JSON для проверки детальных объектов
 * https://gitlab.com/aft-vr/virtual-reality-constructor/-/wikis/%D0%94%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F/%D0%9F%D1%80%D0%BE%D0%B2%D0%B5%D1%80%D0%BA%D0%B0-%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F-%D0%BD%D0%B0-%D1%81%D1%86%D0%B5%D0%BD%D0%B5
 *
 * Class CheckObjectJsonBuilder
 * @package App\Service\Step
 */
class CheckObjectJsonBuilder extends QuestionJsonBuilder
{
    /**
     * @return array
     * @throws Exception
     */
    #[ArrayShape(['CheckParameter' => "string", 'WindowParameter' => "string", 'ObjectIDs' => "array", 'Questions' => "array"])]
    public function generateConfigJson(): array
    {
        $response = parent::generateConfigJson();
        $stepQuestions = $this->getStepQuestions();
        $objectIds = [];
        foreach ($stepQuestions as $stepQuestion) {
            $objectIds[] = $stepQuestion->getObject()->getId();
        }
        $response['ObjectIDs'] = $objectIds;
        $response['CheckParameter'] = 'All';
        $response['WindowParameter'] = 'DontOpen';
        return $response;
    }
}