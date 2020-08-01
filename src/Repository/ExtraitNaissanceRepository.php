<?php

namespace App\Repository;

use App\Entity\ExtraitNaissance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExtraitNaissance|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExtraitNaissance|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExtraitNaissance[]    findAll()
 * @method ExtraitNaissance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExtraitNaissanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExtraitNaissance::class);
    }

    // /**
    //  * @return ExtraitNaissance[] Returns an array of ExtraitNaissance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExtraitNaissance
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
