<?php

namespace App\Repository;

use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Step;
use App\Entity\StepQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepQuestion[]    findAll()
 * @method StepQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepQuestion::class);
    }

    /**
     * Получить вопросы для конкретного шага
     *
     * @param Step $step
     * @return DetailedObjectTargetStatus[]
     */
    public function findByStep(Step $step): array
    {
        return $this->findBy(['step' => $step]);
    }
}
