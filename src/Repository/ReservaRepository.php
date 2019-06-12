<?php

namespace App\Repository;

use App\Entity\Reserva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reserva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reserva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reserva[]    findAll()
 * @method Reserva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reserva::class);
    }

    // /**
    //  * @return Reserva[] Returns an array of Reserva objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reserva
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function getDisponibilidad($idPista,$datos)
    {
       
        $conn = $this->getEntityManager()->getConnection();
        $query = "select *  from reserva where hora_inicio = :horaI 
                and hora_fin = :horaF and fecha_de_reserva= :fechaR
                and pista_id = :idPista";
        $sts = $conn->prepare($query);
        $sts->execute(['horaI' => $datos['horaInicio'],
                        'horaF' => $datos['horaFin'],
                        'fechaR' => $datos['fecha'],
                        'idPista' =>$idPista

                         ]);

        return $sts->fetchAll();
    }

    public function setReserva($arr)
    {
        $time = strtotime($arr["fecha"]);
        $newformat = date('Y-m-d',$time);
        $pista = (int)$arr["id_pista"];
        $conn = $this->getEntityManager()->getConnection();
        $query = "INSERT INTO reserva (usuario_id, pista_id, precio_reserva, fecha_de_reserva, hora_inicio, hora_fin, fecha_creacion) 
                  VALUES (:usuario,:pista_id,:precio,:fechaRes,:horaInicio, :horaFin, now());";
        $stmnt = $conn->prepare($query);
        return $stmnt->execute([
            'usuario' => $arr["id"],
            'pista_id' => $pista,
            'precio' => $arr["precio"],
            'fechaRes' => $arr["fecha"],
            'horaInicio' => $arr["horaInicio"],
            'horaFin' => $arr["horaFin"],
        ]);
    }
}
