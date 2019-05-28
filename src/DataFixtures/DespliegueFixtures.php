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
        $usuario->setDireccion("C/Leon");
        $usuario->setNPortal(23);
        $usuario->setPiso("2ºD");
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
        $usuario1->setDireccion("C/Caceres");
        $usuario1->setNPortal(43);
        $usuario1->setPiso("4ºB");
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
        $usuario2->setDireccion("C/Limon");
        $usuario2->setNPortal(52);
        $usuario2->setPiso("1ºD");
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
        $usuario3->setDireccion("C/Abedul");
        $usuario3->setNPortal(75);
        $usuario3->setPiso("Bajo I");
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
        $usuario4->setDireccion("C/Alcaravea");
        $usuario4->setNPortal(121);
        $usuario4->setPiso("5ºC");
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
        $usuario5->setDireccion("Pza. Ana Maria");
        $usuario5->setNPortal(321);
        $usuario5->setPiso("3ºA");
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
        $usuario6->setDireccion("Pza. Armería");
        $usuario6->setNPortal(72);
        $usuario6->setPiso("SN");
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
        $usuario7->setDireccion("Av. Abrantes");
        $usuario7->setNPortal(234);
        $usuario7->setPiso("3ºA");
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
        $usuario8->setDireccion("Pza. de los Abetos");
        $usuario8->setNPortal(42);
        $usuario8->setPiso("1ºI");
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
        $usuarioAdmin->setDireccion("c/Mayor");
        $usuarioAdmin->setNPortal(01);
        $usuarioAdmin->setPiso("1ºD");
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
        $usuarioProfesor->setDireccion("c/Mayor");
        $usuarioProfesor->setNPortal(01);
        $usuarioProfesor->setPiso("1ºD");
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
        $usuarioCliente->setDireccion("c/Mayor");
        $usuarioCliente->setNPortal(01);
        $usuarioCliente->setPiso("1ºD");
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


        $baloncesto = new GustosUsuarios();
        $baloncesto->setIdUsuario($usuario5);
        $baloncesto->setDeportesFavoritos("baloncesto");
        $baloncesto->setComentarios("");

        $manager->persist($baloncesto);


        $baloncesto = new GustosUsuarios();
        $baloncesto->setIdUsuario($usuario5);
        $baloncesto->setDeportesFavoritos("futbol");
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
        $noticia_1->setTitulo("Sport is Party - La Feria del Deporte");
        $noticia_1->setContenido("

En pro de la salud, el bienestar y la actividad física, contra el sedentarismo y la obesidad, se celebrará en Madrid la primera edición de Sport is Party. Un evento lúdico-deportivo en el que se conjugarán ocio y cultura, donde niños y adultos podrán disfrutar de más de 60 disciplinas deportivas. Una cita original y diferente en la que se unen actividades demostrativas, participativas y competitivas de todas las disciplinas deportivas, con zonas de exposición y en un ambiente lúdico-deportivo 100%.

Los visitantes a este gran evento recordarán para siempre una experiencia única y transformadora. Y todo sustentado con la versatilidad de una de las instalaciones feriales más modernas y mejor comunicadas del mundo, como es la Feria de Madrid.
");
        $noticia_1->setFechaCreacion(new \DateTime('@'.strtotime('now')));
        $noticia_1->setAutor("Luis pagandos");
        $noticia_1->setImgNoticia("https://www.madrid.es/UnidadesDescentralizadas/Deportes/Actividades/Actividades2018/06junio/Ficheros/imagenferiasport.jpg");
        $manager->persist($noticia_1);

        $noticia_2 = new Noticia();
        $noticia_2->setTitulo("XXXIV Carrera del árbol y 17ª Marcha por la salud y la integración");
        $noticia_2->setContenido("La carrera del Árbol no es una actividad competitiva; todos los participantes corren con el mismo dorsal.

Salida: avenida de Buenos Aires.

Llegada: Centro Deportivo Municipal Palomeras.");
        $noticia_2->setFechaCreacion(new \DateTime('@'.strtotime('now')));
        $noticia_2->setAutor("Nicolas Flores");
        $noticia_2->setImgNoticia("https://www.grupobrotons.es/wp-content/uploads/DSC_9099.jpg");
        $manager->persist($noticia_2);

        $noticia_3 = new Noticia();
        $noticia_3->setTitulo("VI Carrera hay salida contra la violencia de género");
        $noticia_3->setContenido("Un proyecto organizado por el grupo Zinet Media, para concienciar a la sociedad de la violencia de género que sufren miles de mujeres. Queremos posicionarnos contra el machismo y lanzar el mensaje de que cada persona puede luchar contra esta lacra. Lanzamos también un mensaje de apoyo a las mujeres: hay muchas personas dispuestas a creerte, ayudarte, a echarte una mano para que rehagas tu vida. Estos son los objetivos de la Carrera Hay Salida, que ya va por la 6ª Edición, por una sociedad libre de violencia de género. Porque acabar con la violencia machista es cosa de todos");
        $noticia_3->setFechaCreacion(new \DateTime('@'.strtotime('now')));
        $noticia_3->setAutor("Amaia garcia");
        $noticia_3->setImgNoticia("https://www.madridiario.es/fotos/1/142640_f1f9078668dcc80c968ae241f3cf5460_thumb_722.jpeg");
        $manager->persist($noticia_3);

//        FIN NOTICIA /////////////////////////////////////////////////////////////////////////////////////////////////
        $manager->flush();
    }//load
}
