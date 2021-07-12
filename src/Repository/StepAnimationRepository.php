<?php

namespace App\Repository;

use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Step;
use App\Entity\StepAnimation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepAnimation|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepAnimation|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepAnimation[]    findAll()
 * @method StepAnimation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepAnimationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepAnimation::class);
    }

    /**
     * Получить анимации для конкретного шага
     *
     * @param Step $step
     * @return DetailedObjectTargetStatus[]
     */
    public function findByStep(Step $step): array
    {
        return $this->findBy(['step' => $step]);
    }
}
