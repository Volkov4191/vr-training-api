<?php


namespace App\Service;

use App\Entity\Stage;
use App\Entity\Step;
use App\Repository\StepRepository;
use Doctrine\Persistence\ManagerRegistry;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Билдер для формирования JSON для этапов внутри сценариев
 *
 * Class StageJsonBuilder
 * @package App\Service
 */
class StageJsonBuilder
{
    /**
     * @var Stage
     */
    private Stage $stage;

    /**
     * StageJsonBuilder constructor.
     * @param ManagerRegistry $managerRegistry
     */
    public function __construct(
        private ManagerRegistry $managerRegistry,
    )
    {

    }

    /**
     * Сформировать JSON для этапа
     * TODO: Вынести сообщение об ошибке в БД
     *
     * @return array
     */
    #[ArrayShape(["Name" => "string", "ErrorMessage" => "string", 'Steps' => "\string[][]"])]
    public function generate(): array
    {
        $response = [
            "Name" => $this->stage->getName(),
            "ErrorMessage" => "Описание ошибки выполнения этапа",
            'Steps' => [],
        ];

        /** @var StepRepository $repository */
        $repository = $this->managerRegistry->getRepository(Step::class);
        $steps = $repository->findByStage($this->stage);

        $stepJsonBuilder = new StepJsonBuilder($this->managerRegistry);
        foreach ($steps as $step) {
            $response['Steps'][] = $stepJsonBuilder
                ->setStep($step)
                ->generate();
        }

        return $response;
    }

    /**
     * Установить этап
     *
     * @param Stage|null $stage
     * @return StageJsonBuilder
     */
    public function setStage(?Stage $stage): StageJsonBuilder
    {
        $this->stage = $stage;
        return $this;
    }
}