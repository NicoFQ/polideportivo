<?php

namespace App\Repository;

use App\Entity\Clase;
use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\Entity;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Clase|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clase|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clase[]    findAll()
 * @method Clase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClaseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Clase::class);
    }


    /** Funcion para extrar las clases que tiene asignadas cada profesor
     * @param $id_usuario-> id del profesor sobre el que vamos hacer la 
     *        consulta de sus clases
     * 
     */

   public function getClaseImparte($id_usuario)
    {

         $qb = $this->createQueryBuilder('clase,App\Entity\Asiste asiste')   
                     ->select('clase,asiste')
                     ->where('asiste.clase = clase.id ')
                     ->andWhere('asiste.usuario= :usuario')
                     ->setParameter('usuario',$id_usuario);

             return $qb->getQuery()->getResult();
                   
}
}
