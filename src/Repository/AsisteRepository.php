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

    public function getUsuApuntados($id){
            $qb = $this->createQueryBuilder('asiste')   
            ->select('count(asiste.usuario)')
            ->where('asiste.clase= :clase')
            ->setParameter('clase',$id);

            return $qb->getQuery()->getResult();
    }

    public function getFechaClase($id){
        $qb = $this->createQueryBuilder('asiste')   
        ->select('asiste.fecha_asiste_clase')
        ->where('asiste.clase= :clase')
        ->setParameter('clase',$id);

        return $qb->getQuery()->getResult();
}
}
