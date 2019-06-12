<?php

namespace App\Repository;

use App\Entity\Usuario;
use App\Entity\TipoUsuario;
use App\Entity\GustosUsuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\Entity;
use Symfony\Component\HttpFoundation\Session\Session;
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
    public function dql($tipo_usuario)
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
            ->select('u.id,
                            u.email,
                            u.imagen_perfil,
                            u.direccion,
                            u.n_portal,
                            u.piso,
                            u.num_telf,
                            g.deportes_favoritos,
                            g.comentarios
                            ')
            ->innerJoin('App\Entity\GustosUsuarios','g', 'WITH', 'u.id = g.id_usuario')
            ->andWhere('u.id = :id')
            //->where('u.id = :id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }
    public function getDataUserOnly($id)
    {
        return $this->createQueryBuilder('u')
            ->select('u.id, 
                            u.email, 
                            u.imagen_perfil,
                            u.direccion,
                            u.n_portal,
                            u.piso,
                            u.num_telf
                            ')
            ->where('u.id = :id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
//        $conn = $this->getEntityManager()->getConnection();
//        $query = 'SELECT email, nombre_usuario,
//                        imagen_perfil, direccion,
//                        n_portal, piso, num_telf
//                    FROM usuario
//                   WHERE id = :id';
//        $stmnt = $conn->prepare($query);
//        $stmnt->execute(['id' => $id]);
//        return $stmnt->fetchAll();
    }


//    Para una futura version, pasar un array con todos los valores
//    y prepararlos dentro de la query
    public function updateUser($id,$arr, $gu = null)
    {
        $conn = $this->getEntityManager()->getConnection();
        $conn2 = $this->getEntityManager();

        $gustos = $gu->findById($id);
        if (empty($gustos)) {
            $dataGustos["id"] = intval($id);
            $dataGustos["deportes_favoritos"] = ($arr["deportes_favoritos"] && $arr["deportes_favoritos"] != "undefined") ? $arr["deportes_favoritos"] : "null";
            $dataGustos["comentarios"] = ($arr["comentarios"] && $arr["comentarios"] != "undefined") ? $arr["comentarios"] : "null";
            $query = 'INSERT INTO  gustos_usuarios(id_usuario_id, deportes_favoritos, comentarios)
                        VALUES(:id, :deportes_favoritos, :comentarios)';
            $stmnt = $conn->prepare($query);
            return $stmnt->execute(["id" => $id, 
                                    "deportes_favoritos" => $dataGustos["deportes_favoritos"],
                                    "comentarios" => $dataGustos["comentarios"], 
                                    ]);
            return "GustosUsuario creado";
        }else{
            $query = 'UPDATE usuario
                        INNER JOIN
                        gustos_usuarios
                        ON
                        usuario.id = gustos_usuarios.id_usuario_id
                        SET usuario.email = :email,
                            usuario.direccion = :direccion,
                            usuario.n_portal = :n_portal,
                            usuario.piso = :piso,
                            usuario.num_telf = :num_telf,
                            gustos_usuarios.deportes_favoritos = :deportes_favoritos,
                            gustos_usuarios.comentarios = :comentarios
                            WHERE usuario.id = :id';
            $stmnt = $conn->prepare($query);
            return $stmnt->execute(['id' => $id,
                                    'email' => $arr["email"],
                                    'direccion' => $arr["direccion"],
                                    'n_portal' => $arr["n_portal"],
                                    'piso' => $arr["piso"],
                                    'num_telf' => $arr["num_telf"],
                                    'deportes_favoritos' => $arr["deportes_favoritos"],
                                    'comentarios' => $arr["comentarios"]
                                    ]);
        }

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

    public function getUserActivity($id){
      $reservas = self::getReservasUsuario($id);
      $clases = $this->getClasesUsuario($id);
      $activity = array_merge($reservas, $clases);
      return $activity;
    }

    public function getProfesorActivity($id){
        
        $clases = self::getClasesProfesor($id);
        
        return $clases;
      }

    private function getReservasUsuario($id){
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select "Reserva pista" as "titulo", r.fecha_de_reserva "fecha", r.hora_inicio "inicio", r.hora_fin "fin", i.nombre_instalacion "instalacion", p.num_pista "pista" from reserva r, instalacion i, pista p where r.usuario_id = :id and r.pista_id = p.id and i.id = p.id_instalacion_id;';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['id' => $id]);
        return $stmnt->fetchAll();
    }

    public function getClasesUsuario($id){
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select c.nombre_clase "titulo", a.fecha_asiste_clase "fecha", c.hora_inicio "inicio", c.hora_fin "fin" from asiste a, clase c where a.usuario_id = :id and a.clase_id = c.id';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['id' => $id]);
        return $stmnt->fetchAll();
    }

    private function getClasesProfesor($id){
        $conn = $this->getEntityManager()->getConnection();
        $query = 'select a.clase_id "clase", c.nombre_clase "titulo", a.fecha_asiste_clase "fecha", c.hora_inicio "inicio", c.hora_fin "fin" from asiste a, clase c where a.usuario_id = :id and a.clase_id = c.id';
        $stmnt = $conn->prepare($query);
        $stmnt->execute(['id' => $id]);
        return $stmnt->fetchAll();
    }

    private function getNumeroDeAlumnos($clases){
        $tamClases = count($clases);
        if ($tamClases > 0) {
            for ($i=0; $i < $tamClases; $i++) { 
                $conn = $this->getEntityManager()->getConnection();
                $query = 'select count(*) "alumnos" from asiste where clase_id = :id and fecha_asiste_clase = :fecha';
                $stmnt = $conn->prepare($query);
                $stmnt->execute(['id' => $clases[$i]["clase"], 'fecha' => $clases[$i]["fecha"]]);
                $numAlumnos = $stmnt->fetchAll()[0]["alumnos"]-1;
                array_shift($clases[$i]);
                $clases[$i]["alumnos"] = $numAlumnos;
            }
        }
        return $clases;

    }   
}
