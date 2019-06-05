<?php

namespace App\Repository;

use App\Entity\TipoPago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoPago|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoPago|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoPago[]    findAll()
 * @method TipoPago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoPagoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoPago::class);
    }

    /** Funcion que obtiene Array asociativo con el ID del tipo de pago asignado al nombre
     * @param $nombre: Nombre del tipo de pago
     * @return mixed[]
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getIdTipoPago($nombre)
    {
        $conn = $this->getEntityManager()->getConnection();

        $query = 'select id from tipo_pago t where t.nombre_tipo = :nombre';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['nombre' => $nombre]);
        return $stmnt->fetchAll();
    }
}
