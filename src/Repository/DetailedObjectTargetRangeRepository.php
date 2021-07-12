<?php

namespace App\Repository;

use App\Entity\DetailedObjectTargetRange;
use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Step;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailedObjectTargetRange|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailedObjectTargetRange|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailedObjectTargetRange[]    findAll()
 * @method DetailedObjectTargetRange[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailedObjectTargetRangeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailedObjectTargetRange::class);
    }

    /**
     * Получить целевые диапазоны для конкретного шага
     *
     * @param Step $step
     * @return DetailedObjectTargetStatus[]
     */
    public function findByStep(Step $step): array
    {
        return $this->findBy(['step' => $step]);
    }

}
