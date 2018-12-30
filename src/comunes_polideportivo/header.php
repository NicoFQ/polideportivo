<?php 
require('logo.php');
/**Funcion Header 
 * params: Necesita un parametro de tipo cadena que pintara un contenido u otro
 * en funcion del tipo de usuario que sea.
 * Valores Admitidos:
 *      -admin
 *      -profesor
 *      -cliente
*/
function header_usuarios(string $usuario = 'cliente')
{ ?>
        <div class="container" id="header">
            <div class="row">
                <div class="col-md-3">
                    <?= logo();?>
                    <h3 id="h3">Polideportivo</h3>
                </div>
                <div class="col-md-9 navbar" id="nav">
                    <div class="row">            
                        <?php 
                            switch ($usuario) {
                                case 'cliente':
                                navCliente();
                                break;
                                
                                case 'admin':
                                navAdmin();
                                break;

                                case 'profesor':
                                navProfesor();
                                break;
                            }//switch
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php }//header_usuarios ?>
 <?php 
    function navAdmin()
    { ?>
        <ul class="navbar text-center">
            <div class="col-md-2" id="cols">
                <li class="  nav-item active btn btn-block ">
                    <a href="main_administrador.php">Home</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active btn btn-block ">
                    <a href="lista_empleados.php">Empleados</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class="  nav-item active btn btn-block ">
                    <a href="lista_deportes.php">Deportes</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active btn btn-block ">
                    <a href="anadir_clases.php">Añadir clases</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active btn btn-block ">
                    <a href="enviar_correo.php">Enviar correo</a>
                </li>
            </div>
        </ul>
    <?php }//navAdmin ?>

    <?php function navCliente()
    { ?>
        <ul class="navbar text-center">
            <div class="col-md-3" id="cols">
                <li class="nav-item active btn btn-block ">
                    <a href="main_usuario.php">Home</a>
                </li>
            </div>
            <div class="col-md-3" id="cols">
                <li class="nav-item active btn btn-block ">
                    <a href="noticias.php">Noticias</a>
                </li>
            </div>
            <div class="col-md-3" id="cols">
                <li class="nav-item active btn btn-block ">
                    <a href="localizacion.php">Localizacion</a>
                </li>
            </div>
            <div class="col-md-3" id="cols">
                <li class="nav-item active btn btn-block ">
                    <a href="">Reservas</a>
                </li>
            </div>
        </ul>
    <?php }//navCliente ?>
 

    <?php function navProfesor()
    { ?>
    <ul class="navbar text-center">
        <div class="col-md-6" id="cols">
            <li class="nav-item active btn btn-block ">
                <a href="main_profesor.php">Home</a>
            </li>
        </div>
        <div class="col-md-6" id="cols">
            <li class="nav-item active btn btn-block ">
                <a href="horarios_profesor.php">Horario</a>
            </li>
        </div>
    </ul>    
    <?php }//navProfesor ?>
