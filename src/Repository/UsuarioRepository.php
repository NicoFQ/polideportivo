<?php

namespace App\Repository;

use App\Entity\Usuario;
use App\Entity\TipoUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\Entity;

use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuario[]    findAll()
 * @method Usuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usuario::class);
    }

    /**
     * @return Usuario[] Returns an array of Usuario objects
     * SELECT COUNT(*)
     * FROM USUARIO U, TIPOUSUARIO T
     * WHERE T.ID = U.ID_TIPO_USUARIO
     * AND NOMBRE TIPO = ?
     */

    public function getTotalUsuariosBy(string $tipo_usuario)
    {
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
    }

    /**
     * @param $tipo_usuario
     * @return Arr de usuario
     * Funcino dql: Usa la sintaxis de symfony (Doctrine query language)
     * esta bien, es funcional, pero a la hora de hacer los templates
     * no podremos usar los getters de objetos y al hacer la select
     * tenemos que ser muy especificos en lo que queremos (4/10)
     */
    public function dql ($tipo_usuario)
    {
        $usuario = "App\Entity\Usuario";
        $em = $this->getEntityManager();
        $query = $em->createQuery('select u.nombre, u.apellido_1
                                        from App\Entity\Usuario u, App\Entity\TipoUsuario tu 
                                        where u.tipo_usuario = tu.id
                                        and tu.nombre_tipo = :tipo_usuario');
        $query->setParameter('tipo_usuario', $tipo_usuario);
        return $query->getResult();
    }

    /**
     * @param $tipo_usuario
     * @return mixed[]
     * @throws \Doctrine\DBAL\DBALException
     * Funcion sql: Es exactamente como lo haciamos antes, admite la union de tablas,
     * subconsultas y control de vars, a la hora de hacer los templates tampoco
     * podemos usar los getters, tendremos que pedir los atributos de la tabla (5/10)
     */
    public function sql($tipo_usuario)
    {
        $conn = $this->getEntityManager()->getConnection();

        $query = 'select * 
                  from usuario u, tipo_usuario tu 
                  where u.tipo_usuario_id = tu.id 
                  and tu.nombre_tipo = :tipo_usuario;';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['tipo_usuario' => $tipo_usuario]);
        return $stmnt->fetchAll();
    }
    public function getEmpleados()
    {
        $qb = $this->createQueryBuilder('u')
//            ->select('count(u)')
            ->innerJoin('App\Entity\TipoUsuario','t', 'WITH', 'u.tipo_usuario = t.id')
            ->andWhere('t.nombre_tipo IN (\'AD\',\'PR\') ');

        return $qb->getQuery()->getResult();
    }

    public function loadUserByEmail($email)
    {
        return $this->createQueryBuilder('u')
            ->where('')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function comprobarNumDocumento($num_documento)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.num_documento = :n_documento')
            ->setParameter('n_documento', $num_documento)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function comprobarEmail($email)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function getEmails()
    {
        return $this->createQueryBuilder('u')
            ->select("u.email")
            ->where('u.tipo_usuario IN (2,3)')
            ->getQuery()
            ->getResult();
    }

    public function getDataUser($id)
    {
        return $this->createQueryBuilder('u')
            ->select('u.id, u.nombre, u.email, u.nombre_usuario, u.nombre_usuario, u.imagen_perfil, u.apellido_1, u.imagen_perfil   ')
            ->where('u.id = :id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }
//    Para una futura version, pasar un array con todos los valores
//    y prepararlos dentro de la query
    public function updateUser($id,$nombre)
    {
        $conn = $this->getEntityManager()->getConnection();
        $query = 'UPDATE usuario
                   SET nombre = :nombre
                   WHERE id = :id';
        $stmnt = $conn->prepare($query);
        return $stmnt->execute(['id' => $id,'nombre' => $nombre]);
//        return $stmnt->fetchAll();
    }
    public function updateIMG($id, $nombreIMG)
    {
        $conn = $this->getEntityManager()->getConnection();
//        $nuevaRuta = "/src/DataFixtures/imgs/".$id."/".$nombreIMG;
        $nuevaRuta = "";
        if (empty($nombreIMG)){
            $nuevaRuta = "img/profile.png";
        }
        $nuevaRuta = "/imgs/".$id."/".$nombreIMG;
        $query = 'UPDATE usuario
                   SET imagen_perfil = :nuevaRuta
                   WHERE id = :id';
        $stmnt = $conn->prepare($query);
        return $stmnt->execute(['id' => $id, 'nuevaRuta' => $nuevaRuta]);
    }

}
