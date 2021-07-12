<?php


namespace App\Repository;


use App\Entity\Detailedobjectdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Репозиторий детальных объектов
 *
 * Class DetailedObjectRepository
 * @package App\Repository
 */
class DetailedObjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Detailedobjectdata::class);
    }
}