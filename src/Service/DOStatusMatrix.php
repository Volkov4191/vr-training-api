<?php

namespace App\Service;

use App\Entity\DetailedObjectMatrix;
use App\Entity\DetailedObjectMatrixType;
use App\Entity\Stage;
use App\Repository\DetailedObjectMatrixRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Матрицы состояния объектов
 *
 * Class StepMatrix
 * @package App\Service
 */
class DOStatusMatrix
{
    /**
     * DOStatusMatrix constructor.
     * @param ManagerRegistry $managerRegistry
     */
    public function __construct(private ManagerRegistry $managerRegistry)
    {

    }

    /**
     * Сформировать начальные статусы для сценария
     *
     * @return array
     */
    public function generateInitStates(): array
    {
        return $this->generateResponse(DetailedObjectMatrixType::InitStates);
    }

    /**
     * @return array
     */
    public function generateModificatorStates() : array
    {
        return $this->generateResponse(DetailedObjectMatrixType::ModificatorStates);
    }

    /**
     * @param int $typeId
     * @return array
     */
    private function generateResponse(int $typeId): array
    {

        $repository = $this->getRepository();
        $rows = $repository->findByType($typeId);

        $response = [];
        foreach ($rows as $row) {

            switch ($typeId){
                case DetailedObjectMatrixType::InitStates:{
                    $key = 'StatusID';
                    $value = $row->getValue();
                    break;
                }
                default:{
                    $key = 'Value';
                    $value = intval($row->getValue());
                    break;
                }
            }

            $response[] = [
                'ObjectID' => $row->getObject()->getId(),
                $key => $value
            ];
        }
        return $response;
    }

    /**
     * @return DetailedObjectMatrixRepository
     */
    private function getRepository(): DetailedObjectMatrixRepository
    {
        return $this->managerRegistry->getRepository(DetailedObjectMatrix::class);
    }
}