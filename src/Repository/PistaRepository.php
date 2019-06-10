<?php

namespace App\Repository;

use App\Entity\Pista;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pista|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pista|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pista[]    findAll()
 * @method Pista[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PistaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pista::class);
    }

    // /**
    //  * @return Pista[] Returns an array of Pista objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pista
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function nombrePista()
    {
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select distinct nombre_pista from  pista';
        $sts = $conn->prepare($query);
        $sts->execute();
        return $sts->fetchAll();
    }

    public function getDatosPistaPorDeporte($nombre)
    {
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select * from pista where nombre_pista= :nombre';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['nombre' => $nombre]);
        return $stmnt->fetchAll();
    }
}
