<?php

namespace App\DataFixtures;

use App\Entity\Asiste;
use App\Entity\Clase;
use App\Entity\Deporte;
use App\Entity\GustosUsuarios;
use App\Entity\Instalacion;
use App\Entity\Noticia;
use App\Entity\Pago;
use App\Entity\Pista;
use App\Entity\Reserva;
use App\Entity\TipoBono;
use App\Entity\TipoPago;
use App\Entity\TipoUsuario;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DespliegueFixtures extends Fixture
{
//    Funcion que hara un hash a las contraseñas de los usuarios, necesaria para el login
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }
    public function load(ObjectManager $manager)
    {
//        TIPO USUARIO ////////////////////////////////////////////////////////////////////////////////////////////////
        $admin = new TipoUsuario();
        $admin->setNombreTipo('AD');

        $profesor = new TipoUsuario();
        $profesor->setNombreTipo('PR');

        $cliente = new TipoUsuario();
        $cliente->setNombreTipo("CL");

        $manager->persist($admin);
        $manager->persist($profesor);
        $manager->persist($cliente);

//        FIN TIPO USUARIO ////////////////////////////////////////////////////////////////////////////////////////////

//        USUARIO ////////////////////////////////////////////////////////////////////////////////////////////////////
        $usuario = new Usuario();
        $usuario->setEmail('nico@gm.com');
        $usuario->setNombreUsuario('nico_01');
        $usuario->setContrasena($this->passwordEncoder->encodePassword($usuario, '1234'));
        $usuario->setNumDocumento('1234n');
        $usuario->setNombre('Nicolas');
        $usuario->setApellido1('Flores');
        $usuario->setSexo(0);
        $usuario->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario->setTipoUsuario($admin);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario->setUsuarioActivo(1);
        $usuario->setRoles(['ROLE_ADMIN']);

        $manager->persist($usuario);

        $usuario1 = new Usuario();
        $usuario1->setEmail('kevin@gm.com');
        $usuario1->setNombreUsuario('kevin_01');
        $usuario1->setContrasena($this->passwordEncoder->encodePassword($usuario1, '1234'));
        $usuario1->setNumDocumento('1234k');
        $usuario1->setNombre('Kevin');
        $usuario1->setApellido1('Herbás');
        $usuario1->setSexo(0);
        $usuario1->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario1->setTipoUsuario($admin);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario1->setUsuarioActivo(1);
        $usuario1->setRoles(['ROLE_ADMIN']);

        $manager->persist($usuario1);

        $usuario2 = new Usuario();
        $usuario2->setEmail('javier@gm.com');
        $usuario2->setNombreUsuario('javi_01');
        $usuario2->setContrasena($this->passwordEncoder->encodePassword($usuario2, '1234'));
        $usuario2->setNumDocumento('1234j');
        $usuario2->setNombre('Javier');
        $usuario2->setApellido1('Moyano');
        $usuario2->setSexo(0);
        $usuario2->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario2->setTipoUsuario($admin);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario2->setUsuarioActivo(1);
        $usuario2->setRoles(['ROLE_ADMIN']);

        $manager->persist($usuario2);

        $usuario3 = new Usuario();
        $usuario3->setEmail('mario@gm.com');
        $usuario3->setNombreUsuario('mario_01');
        $usuario3->setContrasena($this->passwordEncoder->encodePassword($usuario3, '1234'));
        $usuario3->setNumDocumento('1234m');
        $usuario3->setNombre('Mario');
        $usuario3->setApellido1('Vazquez');
        $usuario3->setSexo(0);
        $usuario3->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario3->setTipoUsuario($cliente);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario3->setUsuarioActivo(1);
        $usuario3->setRoles(['ROLE_CLIENTE']);

        $manager->persist($usuario3);

        $usuario4 = new Usuario();
        $usuario4->setEmail('miguel@gm.com');
        $usuario4->setNombreUsuario('miguel_01');
        $usuario4->setContrasena($this->passwordEncoder->encodePassword($usuario4, '1234'));
        $usuario4->setNumDocumento('1234p');
        $usuario4->setNombre('Miguel');
        $usuario4->setApellido1('Perez');
        $usuario4->setSexo(0);
        $usuario4->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario4->setTipoUsuario($profesor);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario4->setUsuarioActivo(1);
        $usuario4->setRoles(['ROLE_PROFESOR']);

        $manager->persist($usuario4);

        $usuario5 = new Usuario();
        $usuario5->setEmail('laura@gm.com');
        $usuario5->setNombreUsuario('laura_01');
        $usuario5->setContrasena($this->passwordEncoder->encodePassword($usuario5, '1234'));
        $usuario5->setNumDocumento('1234l');
        $usuario5->setNombre('Laura');
        $usuario5->setApellido1('Gonzalez');
        $usuario5->setSexo(1);
        $usuario5->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario5->setTipoUsuario($cliente);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario5->setUsuarioActivo(1);
        $usuario5->setRoles(['ROLE_CLIENTE']);

        $manager->persist($usuario5);

        $usuario6 = new Usuario();
        $usuario6->setEmail('rebeca@gm.com');
        $usuario6->setNombreUsuario('rebeca_01');
        $usuario6->setContrasena($this->passwordEncoder->encodePassword($usuario6, '1234'));
        $usuario6->setNumDocumento('1234r');
        $usuario6->setNombre('Rebeca');
        $usuario6->setApellido1('Anton');
        $usuario6->setSexo(1);
        $usuario6->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario6->setTipoUsuario($cliente);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario6->setUsuarioActivo(1);
        $usuario6->setRoles(['ROLE_CLIENTE']);
        // $usuario6->addAsiste()

        $manager->persist($usuario6);


        //Añadir profesor
        $usuario7 = new Usuario();
        $usuario7->setEmail('joseMaria@gm.com');
        $usuario7->setNombreUsuario('JoseMaria');
        $usuario7->setContrasena($this->passwordEncoder->encodePassword($usuario7, '1234'));
        $usuario7->setNumDocumento('1234s');
        $usuario7->setNombre('Jose');
        $usuario7->setApellido1('Torresano');
        $usuario7->setSexo(0);
        $usuario7->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario7->setTipoUsuario($profesor);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario7->setUsuarioActivo(1);
        $usuario7->setRoles(['ROLE_PROFESOR']);

        $manager->persist($usuario7);

        $usuario8 = new Usuario();
        $usuario8->setEmail('jorge@gm.com');
        $usuario8->setNombreUsuario('Jorge');
        $usuario8->setContrasena($this->passwordEncoder->encodePassword($usuario8, '1234'));
        $usuario8->setNumDocumento('1234t');
        $usuario8->setNombre('Jorge');
        $usuario8->setApellido1('Dueñas');
        $usuario8->setApellido2('Lerin');
        $usuario8->setSexo(0);
        $usuario8->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuario8->setTipoUsuario($profesor);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuario8->setUsuarioActivo(1);
        $usuario8->setRoles(['ROLE_PROFESOR']);

        $manager->persist($usuario8);

        /**
         * ======== SUPER USUARIOS GENERALES DE LA APLICACION ========
         */
        $usuarioAdmin = new Usuario();
        $usuarioAdmin->setEmail('admin@gm.com');
        $usuarioAdmin->setNombreUsuario('admin');
        $usuarioAdmin->setContrasena($this->passwordEncoder->encodePassword($usuario6, '1234'));
        $usuarioAdmin->setNumDocumento('9999A');
        $usuarioAdmin->setNombre('Admin');
        $usuarioAdmin->setApellido1('Admin');
        $usuarioAdmin->setSexo(0);
        $usuarioAdmin->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuarioAdmin->setTipoUsuario($admin);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuarioAdmin->setUsuarioActivo(1);
        $usuarioAdmin->setRoles(['ROLE_ADMIN']);

        $manager->persist($usuarioAdmin);

        $usuarioProfesor = new Usuario();
        $usuarioProfesor->setEmail('profesor@gm.com');
        $usuarioProfesor->setNombreUsuario('profesor');
        $usuarioProfesor->setContrasena($this->passwordEncoder->encodePassword($usuario6, '1234'));
        $usuarioProfesor->setNumDocumento('9999P');
        $usuarioProfesor->setNombre('Profesor');
        $usuarioProfesor->setApellido1('Profesor');
        $usuarioProfesor->setSexo(0);
        $usuarioProfesor->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuarioProfesor->setTipoUsuario($profesor);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuarioProfesor->setUsuarioActivo(1);
        $usuarioProfesor->setRoles(['ROLE_PROFESOR']);

        $manager->persist($usuarioProfesor);

        $usuarioCliente = new Usuario();
        $usuarioCliente->setEmail('cliente@gm.com');
        $usuarioCliente->setNombreUsuario('cliente');
        $usuarioCliente->setContrasena($this->passwordEncoder->encodePassword($usuario6, '1234'));
        $usuarioCliente->setNumDocumento('9999C');
        $usuarioCliente->setNombre('Cliente');
        $usuarioCliente->setApellido1('Cliente');
        $usuarioCliente->setSexo(0);
        $usuarioCliente->setFechaAlta(new \DateTime('@'.strtotime('now')));
        $usuarioCliente->setTipoUsuario($cliente);//Este metodo solo acepta un objeto de tipo: TipoUsuario
        $usuarioCliente->setUsuarioActivo(1);
        $usuarioCliente->setRoles(['ROLE_CLIENTE']);

        $manager->persist($usuarioCliente);

        /**
         * ======== FIN DE SUPER USUARIOS ========
         */
//        FIN USUARIO /////////////////////////////////////////////////////////////////////////////////////////////////

//        GUSTOS USUARIO //////////////////////////////////////////////////////////////////////////////////////////////
        $futbol = new GustosUsuarios();
        $futbol->setIdUsuario($usuario);
        $futbol->setDeportesFavoritos("futbol");
        $futbol->setComentarios("");

        $manager->persist($futbol);

        $baloncesto = new GustosUsuarios();
        $baloncesto->setIdUsuario($usuario1);
        $baloncesto->setDeportesFavoritos("baloncesto");
        $baloncesto->setComentarios("");

        $manager->persist($baloncesto);
//        FIN GUSTOS USUARIO //////////////////////////////////////////////////////////////////////////////////////////

//        INSTALACION /////////////////////////////////////////////////////////////////////////////////////////////////
        $instalacion_1 = new Instalacion();
        $instalacion_1->setNombreInstalacion("PABELLON 1");

        $instalacion_2 = new Instalacion();
        $instalacion_2->setNombreInstalacion("PABELLON 2");

        $instalacion_3 = new Instalacion();
        $instalacion_3->setNombreInstalacion("PABELLON 3");

        $manager->persist($instalacion_1);
        $manager->persist($instalacion_2);
        $manager->persist($instalacion_3);
//        FIN INSTALACION ////////////////////////////////////////////////////////////////////////////////////////////

//        DEPORTES ////////////////////////////////////////////////////////////////////////////////////////////////////
        $futbol = new Deporte();
        $futbol->setNombreDeporte("FUTBOL");

        $baloncesto = new Deporte();
        $baloncesto->setNombreDeporte("BALONCESTO");

        $padel = new Deporte();
        $padel->setNombreDeporte("PADEL");

        $manager->persist($futbol);
        $manager->persist($baloncesto);
        $manager->persist($padel);
//        FIN DEPORTES ////////////////////////////////////////////////////////////////////////////////////////////////

//        PISTA ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $pista1 = new Pista();
        $pista1->setNombrePista("Pista de padel");
        $pista1->setPrecioHora(10);
        $pista1->setDisponible(1);
        $pista1->setIdDeporte($padel);
        $pista1->setIdInstalacion($instalacion_1);

        $manager->persist($pista1);
//        FIN PISTA ///////////////////////////////////////////////////////////////////////////////////////////////////




//        CLASES //////////////////////////////////////////////////////////////////////////////////////////////////////
        $clase1 = new Clase();
        $clase1->setIdDeporte($futbol);
        $clase1->setNombreClase("Clase de futbol");
        $clase1->setDiasSemana("L,X,V");
        $clase1->setHoraInicio("16:00");
        $clase1->setHoraFin("18:00");
        $clase1->setMaxAlumnos(15);
        $clase1->setMinAlumnos(8);
        $clase1->setDisponible(1);

        $clase2 = new Clase();
        $clase2->setIdDeporte($padel);
        $clase2->setNombreClase("Clase de padel");
        $clase2->setDiasSemana("L,X,J,V");
        $clase2->setHoraInicio("10:00");
        $clase2->setHoraFin("12:00");
        $clase2->setMaxAlumnos(4);
        $clase2->setMinAlumnos(2);
        $clase2->setDisponible(1);

        $clase3 = new Clase();
        $clase3->setIdDeporte($baloncesto);
        $clase3->setNombreClase("Clase de baloncesto");
        $clase3->setDiasSemana("L,X");
        $clase3->setHoraInicio("16:00");
        $clase3->setHoraFin("18:00");
        $clase3->setMaxAlumnos(18);
        $clase3->setMinAlumnos(10);
        $clase3->setDisponible(1);

        $clase4 = new Clase();
        $clase4->setIdDeporte($futbol);
        $clase4->setNombreClase("Clase de futbol");
        $clase4->setDiasSemana("L,X,V");
        $clase4->setHoraInicio("18:00");
        $clase4->setHoraFin("20:00");
        $clase4->setMaxAlumnos(15);
        $clase4->setMinAlumnos(8);
        $clase4->setDisponible(1);

        $clase5 = new Clase();
        $clase5->setIdDeporte($padel);
        $clase5->setNombreClase("Clase de padel");
        $clase5->setDiasSemana("S");
        $clase5->setHoraInicio("09:00");
        $clase5->setHoraFin("12:00");
        $clase5->setMaxAlumnos(6);
        $clase5->setMinAlumnos(2);
        $clase5->setDisponible(0);

        $clase6 = new Clase();
        $clase6->setIdDeporte($padel);
        $clase6->setNombreClase("Clase de baloncesto");
        $clase6->setDiasSemana("J,V");
        $clase6->setHoraInicio("16:00");
        $clase6->setHoraFin("18:00");
        $clase6->setMaxAlumnos(18);
        $clase6->setMinAlumnos(10);
        $clase6->setDisponible(1);

        $manager->persist($clase1);
        $manager->persist($clase2);
        $manager->persist($clase3);
        $manager->persist($clase4);
        $manager->persist($clase5);
        $manager->persist($clase6);


//        FIN CLASES ///////////////////////////////////////////////////////////////////////////////////////////////////

//        ASISTE ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $asiste1 = new Asiste();
        $asiste1->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste1->setUsuario($usuario5);
        $asiste1->setClase($clase2);

        $manager->persist($asiste1);

        $asiste2 = new Asiste();
        $asiste2->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste2->setUsuario($usuario4);
        $asiste2->setClase($clase2);

        $manager->persist($asiste2);

        $asiste3 = new Asiste();
        $asiste3->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste3->setUsuario($usuario2);
        $asiste3->setClase($clase2);

        $manager->persist($asiste3);

        $asiste4 = new Asiste();
        $asiste4->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste4->setUsuario($usuario1);
        $asiste4->setClase($clase2);

        $manager->persist($asiste4);

        $asiste5 = new Asiste();
        $asiste5->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste5->setUsuario($usuario5);
        $asiste5->setClase($clase2);

        $manager->persist($asiste5);

        $asiste6 = new Asiste();
        $asiste6->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste6->setUsuario($usuario3);
        $asiste6->setClase($clase1);

        $manager->persist($asiste6);

         //Asignamos a los usuarios profesores usuario8(Jorge) y usuario7 (Jose Maria)
        //a 3 clases

        //Jorge ->profesor en clase de futbol
        //      -> Profesor en calse de baloncesto
        $asiste7 = new Asiste();
        $asiste7->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste7->setUsuario($usuario8);
        $asiste7->setClase($clase1);

        $manager->persist($asiste7);

        $asiste7 = new Asiste();
        $asiste7->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste7->setUsuario($usuario8);
        $asiste7->setClase($clase6);

        $manager->persist($asiste7);

        //Jorge ->profesor en clase de baloncesto
        $asiste8 = new Asiste();
        $asiste8->setFechaAsisteClase(new \DateTime('2019-04-12'));
        $asiste8->setUsuario($usuario7);
        $asiste8->setClase($clase3);

        $manager->persist($asiste8);

//        FIN ASISTE ///////////////////////////////////////////////////////////////////////////////////////////////////

//        RESERVA /////////////////////////////////////////////////////////////////////////////////////////////////////
        $reserva1 = new Reserva();
        $reserva1->setPrecioReserva(12);
        $reserva1->setFechaDeReserva(new \DateTime('2019-04-14'));
        $reserva1->setHoraInicio('12:00');
        $reserva1->setHoraFin('14:00');
        $reserva1->setFechaCreacion(new \DateTime('@'.strtotime('now')));
        $reserva1->setUsuario($usuario3);
        $reserva1->setPista($pista1);

        $manager->persist($reserva1);
//        FIN RESERVA /////////////////////////////////////////////////////////////////////////////////////////////////

//        TIPO PAGO ///////////////////////////////////////////////////////////////////////////////////////////////////
        $paypal = new TipoPago();
        $paypal->setNombreTipo('Paypal');

        $manager->persist($paypal);
//        FIN TIPO PAGO ///////////////////////////////////////////////////////////////////////////////////////////////

//        TIPO BONO ///////////////////////////////////////////////////////////////////////////////////////////////////
        $basico = new TipoBono();
        $basico ->setNombreBono("basico");
        $basico ->setDuracionDias(30);
        $basico ->setPrecio(25);

        $premium = new TipoBono();
        $premium ->setNombreBono("premium");
        $premium ->setDuracionDias(30);
        $premium ->setPrecio(40);

        $manager->persist($basico);
        $manager->persist($premium);

//        FIN TIPO BONO ////////////////////////////////////////////////////////////////////////////////////////////////

//        PAGO ////////////////////////////////////////////////////////////////////////////////////////////////////////
        $pago1 = new Pago();
        $pago1->setConcepto("Reserva pista");
        $pago1->setFechaPago(new \DateTime('@'.strtotime('now')));
        $pago1->setUsuario($usuario3);
        $pago1->setTipoBono($premium);
        $pago1->setPago($paypal);

        $manager->persist($pago1);
//        FIN PAGO ////////////////////////////////////////////////////////////////////////////////////////////////////

//        NOTICIA /////////////////////////////////////////////////////////////////////////////////////////////////////
        $noticia_1 = new Noticia();
        $noticia_1->setTitulo("Muere un Fixture en Symfony");
        $noticia_1->setContenido("El hecho sucedio la pasada madrugada tras entrar a un merge. Relatan los testigos que intentaba robar datos.");
        $noticia_1->setFechaCreacion(new \DateTime('@'.strtotime('now')));
        $noticia_1->setAutor("Nicolas Flores");
        $manager->persist($noticia_1);
//        FIN NOTICIA /////////////////////////////////////////////////////////////////////////////////////////////////
        $manager->flush();
    }//load
}
