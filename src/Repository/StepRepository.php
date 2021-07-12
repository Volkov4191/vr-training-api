<?php

namespace App\Repository;

use App\Entity\Stage;
use App\Entity\Step;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Step|null find($id, $lockMode = null, $lockVersion = null)
 * @method Step|null findOneBy(array $criteria, array $orderBy = null)
 * @method Step[]    findAll()
 * @method Step[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Step::class);
    }

    /**
     * Получить шаги внутри этапа
     *
     * @param Stage $stage
     * @param string $direction
     * @return Step[]
     */
    public function findByStage(Stage $stage, string $direction = 'ASC'): array
    {
        return $this->findBy(['stage' => $stage], ['sort' => $direction]);
    }
}
