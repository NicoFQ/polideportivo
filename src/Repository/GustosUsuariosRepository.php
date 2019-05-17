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


    public function findById($id)
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
        return $this->createQueryBuilder('g')
            ->andWhere('g.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
