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

    public function getIdTipoBono($nombre)
    {
        $conn = $this->getEntityManager()->getConnection();

        $query = 'select id, precio from tipo_bono t where t.nombre_bono = :nombre';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['nombre' => $nombre]);
        return $stmnt->fetchAll();
    }
}
