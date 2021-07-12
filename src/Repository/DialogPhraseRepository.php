<?php

namespace App\Repository;

use App\Entity\DialogPhrase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DialogPhrase|null find($id, $lockMode = null, $lockVersion = null)
 * @method DialogPhrase|null findOneBy(array $criteria, array $orderBy = null)
 * @method DialogPhrase[]    findAll()
 * @method DialogPhrase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DialogPhraseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DialogPhrase::class);
    }

    // /**
    //  * @return DialogPhrase[] Returns an array of DialogPhrase objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DialogPhrase
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
