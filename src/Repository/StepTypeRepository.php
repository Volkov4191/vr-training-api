<?php

namespace App\Repository;

use App\Entity\StepType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepType[]    findAll()
 * @method StepType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepType::class);
    }

    // /**
    //  * @return StepType[] Returns an array of StepType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StepType
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
