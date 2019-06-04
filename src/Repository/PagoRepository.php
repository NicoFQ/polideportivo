<?php

namespace App\Repository;

use App\Entity\Pago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pago|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pago|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pago[]    findAll()
 * @method Pago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pago::class);
    }
    public function guardarPago($arr)
    {
        $conn = $this->getEntityManager()->getConnection();

        $query = 'insert into pago (usuario_id, pago_id, tipo_bono_id, concepto, fecha_pago) 
                    values (:usuario_id, :id_tipo_pago, :id_tipo_bono, :concepto, now());';
        $stmnt = $conn->prepare($query);
        return $stmnt->execute(['usuario_id' => $arr["usuario_id"],
                                'id_tipo_pago' => $arr["id_tipo_pago"],
                                'id_tipo_bono' => $arr["id_tipo_bono"],
                                    'concepto' => $arr["concepto"],
        ]);
    }
}
