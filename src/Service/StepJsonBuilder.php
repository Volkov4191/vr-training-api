<?php

namespace App\Service;

use App\Encoder\JsonEncoder;
use App\Entity\Step;
use App\Helper\StringHelper;
use App\Service\Step\CheckObjectJsonBuilder;
use App\Service\Step\DetailedObjectTargetStatusJsonBuilder;
use App\Service\Step\DialogJsonBuilder;
use App\Service\Step\FlapTargetStatusJsonBuilder;
use App\Service\Step\iStepJsonBuilder;
use App\Service\Step\QuestionJsonBuilder;
use App\Service\Step\UndefinedJsonBuilder;
use App\Service\Step\ValveTargetRangeJsonBuilder;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Билдер для формирования JSON для шагов внутри этапов
 *
 * Class StepJsonBuilder
 * @package App\Service
 */
class StepJsonBuilder
{
    private Step $step;

    /**
     * StepJsonBuilder constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(
        private ManagerRegistry $registry,
    )
    {
    }

    /**
     * Сформировать JSON для шага
     *
     * TODO: вынести сообщение об ошибке в БД
     *
     * @return string[]
     */
    #[ArrayShape(['Name' => "string", 'BriefingMessage' => "string", 'Type' => "null|string", 'VideoID' => "null|string", 'ErrorMessage' => "string", 'ConfigJson' => "array", 'StartLocation' => "null|string", 'LocationDescription' => "null|string", 'EndStates' => "array"])]
    public function generate(): array
    {
        $type = $this->step->getType();
        $typeCode = $type->getCode();
        $builder = $this->getBuilderByType($typeCode);

        $jsonEncoder = new JsonEncoder();
        $configJson = $builder->generateConfigJson();
        // Unity требует конвертации JSON внутри JSON в строку
        $configJson = $jsonEncoder->encode($configJson, JsonEncoder::FORMAT);

        $description = $this->prettifyString($this->step->getDescription());

        $video = $this->step->getVideo();
        $location = $this->step->getLocation();
        return [
            'Name' => $this->prettifyString($this->step->getName()),
            'BriefingMessage' => $description,
            'Type' => $typeCode,
            'VideoID' => $video ? $video->getId() : '',
            'ErrorMessage' => 'В данный момент необходимо '.StringHelper::mb_lcfirst($this->prettifyString($description, '.')),
            'ConfigJson' => $configJson,
            'StartLocation' => $location ? $location->getId() : '',
            'LocationDescription' => $this->step->getTitle(),
            'EndStates' => $builder->generateEndStates(),
        ];
    }

    /**
     * @param Step|null $step
     * @return StepJsonBuilder
     */
    public function setStep(?Step $step): StepJsonBuilder
    {
        $this->step = $step;
        return $this;
    }

    /**
     * Получить конкретный сборщик JSON исходя из типа шага
     *
     * @param string $typeCode
     * @return iStepJsonBuilder
     */
    private function getBuilderByType(string $typeCode) : iStepJsonBuilder
    {
        $builders = [
            'ChangeObjectStatus' => DetailedObjectTargetStatusJsonBuilder::class,
            'ClickMnemonicToggle' => FlapTargetStatusJsonBuilder::class,
            'SetupModificator' => ValveTargetRangeJsonBuilder::class,
            'Chat' => DialogJsonBuilder::class,
            'CheckObject' => CheckObjectJsonBuilder::class,
            'Question' => QuestionJsonBuilder::class,
        ];
        if (isset($builders[$typeCode])){
            $builderClass = $builders[$typeCode];
            $builder = new $builderClass($this->registry, $this->step);
        }else{
            $builder = new UndefinedJsonBuilder($this->registry, $this->step);
        }
        return $builder;
    }

    /**
     * Подготовить текст для отображения
     *
     * @param string $string
     * @param string $needleLastSymbol
     * @return string
     */
    protected function prettifyString(string $string, string $needleLastSymbol = ';') : string
    {

        $string = preg_replace('/<br\s?\/?>/ius', "\n", $string);
        $string = strip_tags($string);
        $string = str_replace(['&nbsp;'], '', $string);

        $lastSymbol = mb_substr($string, -1, 1, 'UTF-8');
        if (!in_array($lastSymbol, ['.', ';'])){
            $string .= ';';
        }else{
            $fullString = mb_substr($string, 0, -1, 'UTF-8');
            $string = $fullString.$needleLastSymbol;
        }
        return $string;
    }



}