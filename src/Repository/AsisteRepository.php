<?php

namespace App\Repository;

use App\Entity\Asiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Asiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asiste[]    findAll()
 * @method Asiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsisteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Asiste::class);
    }

    // /**
    //  * @return Asiste[] Returns an array of Asiste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Asiste
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
