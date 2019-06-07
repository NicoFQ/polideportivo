<?php

namespace App\Repository;

use App\Entity\Deporte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Deporte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deporte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deporte[]    findAll()
 * @method Deporte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeporteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Deporte::class);
    }

    // /**
    //  * @return Deporte[] Returns an array of Deporte objects
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
    public function findOneBySomeField($value): ?Deporte
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function nombreClases(){
        return $this ->createQueryBuilder('c')
                 ->select('distinct  c.id,c.nombre_clase')
                 //->innerJoin('App\Entity\Deporte','a', 'WITH', 'c.id_deporte = a.id_deporte')
                 ->getQuery()
                 ->getResult();
     
                
             // $conn = $this->getEntityManager()->getConnection();
             // $query ='select distinct nombre_clase, id_deporte_id
             //                                 from clase  
             //                                 ';
             //  $stmnt = $conn->prepare($query);
             // return $query->getResult($stmnt);
       }
}
