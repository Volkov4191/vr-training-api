<?php

namespace App\Repository;

use App\Entity\DetailedObjectMatrix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailedObjectMatrix|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailedObjectMatrix|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailedObjectMatrix[]    findAll()
 * @method DetailedObjectMatrix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailedObjectMatrixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailedObjectMatrix::class);
    }

    /**
     * @param $typeId
     * @return DetailedObjectMatrix[]
     */
    public function findByType($typeId): array
    {
        return $this->findBy(['type' => $typeId]);
    }
}
