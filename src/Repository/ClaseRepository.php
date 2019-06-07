<?php

namespace App\Repository;

use App\Entity\Clase;
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

    // /**
    //  * @return Clase[] Returns an array of Clase objects
    //  */
    
    public function findClasesById($id)
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
        return $this->createQueryBuilder('c')
            ->select('nombre_clase')
            ->innerJoin('App\Entity\Asiste','a', 'WITH', 'c.id = a.id')
            ->andWhere('a.id_usuario = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
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

  /*Funcion que duvuelve el nombre de todas las clases deportivas creadas
  
  */

  public function nombreClases(){
            $conn = $this->getEntityManager()->getConnection();
            $query = 'select distinct c.nombre_clase, c.id_deporte_id from clase c';
            $sts = $conn->prepare($query);
            $sts->execute();
            return $sts -> fetchAll();
  }


  public function getDatosClaseByName($nombre_clase)
  {
      $conn = $this->getEntityManager()->getConnection();
      $query = 'SELECT dias_semana, hora_inicio, hora_fin, max_alumnos, disponible
                FROM clase 
                WHERE nombre_clase = :nombre_clase
                AND disponible = 1';
      $stmnt = $conn->prepare($query);
      return $stmnt->execute(['nombre_clase' => $nombre_clase]);
  }
}
