<?php


namespace App\Service\Step;

use App\Entity\DetailedObjectTargetStatus;
use App\Repository\DetailedObjectTargetStatusRepository;
use Doctrine\Persistence\ObjectRepository;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Билдер для генерации конфига для шага, тип которого - Перевод объектов в нужный статус
 * https://gitlab.com/aft-vr/virtual-reality-constructor/-/wikis/%D0%94%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F/%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4-%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BE%D0%B2-%D0%B2-%D0%BD%D1%83%D0%B6%D0%BD%D1%8B%D0%B9-%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81
 *
 *
 * Class DetailedObjectToTargetStatusJsonBuilder
 * @package App\Service\Step
 */
class DetailedObjectTargetStatusJsonBuilder extends DefaultJsonBuilder
{
    /**
     * @var DetailedObjectTargetStatus[]
     */
    private ?array $targetStatuses = null;

    private ?array $response = null;

    /**
     * @return array[]
     */
    #[ArrayShape(['CloseOnEnd' => "bool", 'ObjectStatuses' => "array"])]
    public function generateConfigJson(): array
    {
        return [
            'CloseOnEnd' => true,
            'ObjectStatuses' => $this->generateResponse()
        ];
    }

    /**
     * @return array
     */
    public function generateEndStates(): array
    {
        if (!is_null($this->response)) {
            $response =  $this->response;
        }else{
            $response = $this->generateResponse();
        }
        foreach ($response as &$row){
            unset($row['VideoID']);
        }
        return $response;
    }

    /**
     * Получить целевые статусы детальных объектов
     *
     * @return DetailedObjectTargetStatus[]
     */
    protected function getTargetStatuses(): array
    {
        if (!is_null($this->targetStatuses)) {
            return $this->targetStatuses;
        }
        $repository = $this->getRepository();
        $this->targetStatuses = $repository->findByStep($this->step);
        return $this->targetStatuses;
    }

    /**
     * @return array
     */
    private function generateResponse(): array
    {
        $this->response = [];
        foreach ($this->getTargetStatuses() as $targetStatus) {
            $row = $this->targetStatusToJson($targetStatus);
            $video = $targetStatus->getVideo();
            $row['VideoID'] = $video ? $video->getId() : '';
            $this->response[] = $row;
        }
        return $this->response;
    }

    /**
     * @return DetailedObjectTargetStatusRepository|ObjectRepository
     */
    private function getRepository(): ObjectRepository|DetailedObjectTargetStatusRepository
    {
        return $this->registry->getRepository(DetailedObjectTargetStatus::class);
    }

    /**
     * Конвертировать целевой статус в JSON
     *
     * @param DetailedObjectTargetStatus $targetStatus
     * @return array
     */
    #[ArrayShape(['ObjectID' => "null|string", 'StatusID' => "null|string"])]
    private function targetStatusToJson(DetailedObjectTargetStatus $targetStatus): array
    {
        return [
            'ObjectID' => $targetStatus->getObject()->getId(),
            'StatusID' => $targetStatus->getStatus()->getId(),
        ];
    }

}