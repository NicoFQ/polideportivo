<?php

namespace App\Repository;

use App\Entity\Instalacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Instalacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Instalacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Instalacion[]    findAll()
 * @method Instalacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstalacionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Instalacion::class);
    }

    // /**
    //  * @return Instalacion[] Returns an array of Instalacion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Instalacion
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
     /*Funcion que duvuelve el nombre de todas las clases deportivas creadas

    */

    public function nombreInstalacion()
    {
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select distinct i.nombre_instalacion, i.id from instalacion i';
        $sts = $conn->prepare($query);
        $sts->execute();
        return $sts->fetchAll();
    }

    public function nombreInstalacionPorId($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select nombre_instalacion from instalacion  where id = :id';
        $sts = $conn->prepare($query);
        $sts->execute(['id' => $id]);
        return $sts->fetchAll();
    }
}
