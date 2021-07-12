<?php

namespace App\Repository;

use App\Entity\Dialog;
use App\Entity\DialogMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DialogMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DialogMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DialogMessage[]    findAll()
 * @method DialogMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DialogMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DialogMessage::class);
    }
    
    /**
     * Получить список сообщений для диалога
     *
     * @param Dialog $dialog
     * @param string $direction
     * @return Dialog[]
     */
    public function findByDialog(Dialog $dialog, string $direction = 'ASC'): array
    {
        return $this->findBy(['dialog' => $dialog], ['sort' => $direction]);
    }
}
