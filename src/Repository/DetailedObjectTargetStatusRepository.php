<?php

namespace App\Repository;

use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Step;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailedObjectTargetStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailedObjectTargetStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailedObjectTargetStatus[]    findAll()
 * @method DetailedObjectTargetStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailedObjectTargetStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailedObjectTargetStatus::class);
    }

    /**
     * Получить целевые статусы для конкретного шага
     *
     * @param Step $step
     * @return DetailedObjectTargetStatus[]
     */
    public function findByStep(Step $step): array
    {
        return $this->findBy(['step' => $step]);
    }
}
