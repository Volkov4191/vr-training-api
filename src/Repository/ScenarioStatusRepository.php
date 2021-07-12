<?php

namespace App\Repository;

use App\Entity\ScenarioStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ScenarioStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScenarioStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScenarioStatus[]    findAll()
 * @method ScenarioStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScenarioStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScenarioStatus::class);
    }

    // /**
    //  * @return ScenarioStatus[] Returns an array of ScenarioStatus objects
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
    public function findOneBySomeField($value): ?ScenarioStatus
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
