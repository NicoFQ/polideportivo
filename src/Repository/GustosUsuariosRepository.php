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
        return $this->createQueryBuilder('g')
            ->andWhere('g.id_usuario = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
