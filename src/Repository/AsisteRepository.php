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

        public function usuarioAsiste($id)
    {
/*
        //        Se define la tabla que usaras con el alias
        $qb = $this->createQueryBuilder('u')
//            Si no se especifica la SELECT, dara todos los datos
                   ->select('count(u)')
//            Join: Equivalente a la union de tablas
                   ->innerJoin('App\Entity\TipoUsuario','t', 'WITH', 'u.tipo_usuario = t.id')
                   ->andWhere('t.nombre_tipo = :tipo_usuario')
                   ->setParameter('tipo_usuario',$tipo_usuario);
//        permite ver el resultao de la query (como el pre)
//        dump($qb->getQuery()->getResult());
        return $qb->getQuery()->getResult();

*/
        return $this->createQueryBuilder('a')
            ->andWhere('a.usuario = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
    

}
