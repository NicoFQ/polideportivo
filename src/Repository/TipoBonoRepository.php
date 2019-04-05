<?php

namespace App\Repository;

use App\Entity\TipoBono;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoBono|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoBono|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoBono[]    findAll()
 * @method TipoBono[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoBonoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoBono::class);
    }

    // /**
    //  * @return TipoBono[] Returns an array of TipoBono objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoBono
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
