<?php

namespace App\Repository;

use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Dialog;
use App\Entity\Step;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dialog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dialog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dialog[]    findAll()
 * @method Dialog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DialogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dialog::class);
    }

    /**
     * Получить диалог в конкретном шаге
     *
     * @param Step $step
     * @return Dialog
     */
    public function findOneByStep(Step $step): Dialog
    {
        return $this->findOneBy(['step' => $step]);
    }
}
