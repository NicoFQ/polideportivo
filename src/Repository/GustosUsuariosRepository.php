<?php

namespace App\Repository;

use App\Entity\GustosUsuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GustosUsuarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method GustosUsuarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method GustosUsuarios[]    findAll()
 * @method GustosUsuarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GustosUsuariosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GustosUsuarios::class);
    }

    // /**
    //  * @return GustosUsuarios[] Returns an array of GustosUsuarios objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GustosUsuarios
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
