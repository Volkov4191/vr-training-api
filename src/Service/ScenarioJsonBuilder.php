<?php

namespace App\Service;

use App\Entity\Scenario;
use App\Entity\Stage;
use App\Repository\StageRepository;
use Doctrine\Persistence\ManagerRegistry;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Формирование JSON для Unity-конструктора
 *
 * Class ScenarioJsonBuilder
 * @package App\Service
 */
class ScenarioJsonBuilder
{
    private DOStatusMatrix $matrix;
    private StageJsonBuilder $builder;

    /**
     * ScenarioJsonBuilder constructor.
     * @param ManagerRegistry $managerRegistry
     * @param Scenario|null $scenario
     */
    public function __construct(
        private ManagerRegistry $managerRegistry,
        private ?Scenario $scenario
    )
    {
        $this->matrix = new DOStatusMatrix($this->managerRegistry);
        $this->builder = new StageJsonBuilder($this->managerRegistry);
    }

    /**
     * Сформировать JSON для сценария
     *
     * TODO: Вынести текст ошибки в БД
     * TODO: Вынести кешируемые локации в список БД
     * TODO: Вынести тэги в список в БД
     *
     * @return array
     */
    #[ArrayShape(['Name' => "string", 'ErrorMessage' => "string", 'LocationCache' => "string[]", 'Tags' => "string[]", 'Stages' => "\string[][][]"])]
    public function generate(): array
    {
        /** @var StageRepository $repository */
        $repository = $this->managerRegistry->getRepository(Stage::class);
        $stages = $repository->findByScenario($this->getScenario());

        $json = [
            'Name' => $this->scenario->getName(),
            'ErrorMessage' => 'Описание ошибки при выполнении сценария',
            'LocationCache' => ['В102р /', 'Операторная'],
            'Tags' => ['Компрессор В', 'В102р'],
            'Stages' => [],
            'InitStates' => $this->matrix->generateInitStates(),
            'InitModificatorsStates' => $this->matrix->generateModificatorStates(),
        ];
        foreach ($stages as $stage){
            $json['Stages'][] = $this->builder
                ->setStage($stage)
                ->generate();
        }

        return $json;
    }

    /**
     * Получить сценарий
     *
     * @return Scenario
     */
    public function getScenario(): Scenario
    {
        return $this->scenario;
    }

    /**
     * Установить сценарий, по которому нужно сформировать JSON
     *
     * @param Scenario|null $scenario
     * @return ScenarioJsonBuilder
     */
    public function setScenario(?Scenario $scenario): ScenarioJsonBuilder
    {
        $this->scenario = $scenario;
        return $this;
    }
}