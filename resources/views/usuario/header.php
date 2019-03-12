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
                <li class="  nav-item active ">
                    <a href="main_administrador.php" class="btn btn-block">Inicio</a>
                </li>            
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active">
                    <a href="lista_empleados.php" class="btn btn-block">Empleados</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class="  nav-item active ">
                    <a href="lista_clases.php" class="btn btn-block">Clases</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active">
                    <a href="anadir_clases.php" class="btn btn-block">Añadir clases</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class=" nav-item active">
                    <a href="enviar_correo.php" class="btn btn-block">Enviar correo</a>
                </li>
            </div>
            <div class="col-md-1 col-md-offset-1" id="cols">
                <li class="nav-item active ">
                    <a href="../../public/index.php">
                        <i class="fas fa-sign-out-alt" id="log-out"></i>
                    </a>
                </li>
            </div>
        </ul>
    <?php }//navAdmin ?>

    <?php function navCliente()
    { ?>
        <ul class="navbar text-center">
            <div class="col-md-2" id="cols">
                <li class="nav-item active ">
                    <a href="main_usuario.php" class="btn btn-block">Inicio</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class="nav-item active ">
                    <a href="noticias.php" class="btn btn-block">Noticias</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class="nav-item active  ">
                    <a href="localizacion.php" class="btn btn-block">Localizacion</a>
                </li>
            </div>
            <div class="col-md-2" id="cols">
                <li class="nav-item active ">
                    <a href="reservas.php" class="btn btn-block">Reservas</a>
                </li>
            </div>
            <div class="col-md-1" id="cols">
                <li class="nav-item active ">
                    <a href="configuracion.php">
                        <i class="fas fa-user-cog" id="icon-user"></i>
                    </a>   
                </li>
            </div>
            <div class="col-md-1" id="cols">
                <li class="nav-item active ">
                    <a href="../../public/index.php">
                        <i class="fas fa-sign-out-alt" id="log-out"></i>
                    </a>
                </li>
            </div>
        </ul>
    <?php }//navCliente ?>
 

    <?php function navProfesor()
    { ?>
    <ul class="navbar text-center">
        <div class="col-md-3" id="cols">
            <li class="nav-item active">
                <a href="main_profesor.php" class="btn btn-block">Inicio</a>
            </li>
        </div>
        <div class="col-md-3" id="cols">
            <li class="nav-item active "">
                <a href="horarios_profesor.php" class="btn btn-block ">Horario</a>
            </li>
        </div>
        <div class="col-md-3" id="cols">
            <li class="nav-item active "">
                <a href="modificar_clases.php" class="btn btn-block ">Modificar clases</a>
            </li>
        </div>
        <div class="col-md-1 col-md-offset-1" id="cols">
                <li class="nav-item active ">
                    <a href="./../profesor/configuracion_perfil_profesor.php">
                        <i class="fas fa-user-cog" id="icon-user"></i>
                    </a>   
                </li>
            </div>
            <div class="col-md-1" id="cols">
                <li class="nav-item active ">
                    <a href="../../public/index.php">
                        <i class="fas fa-sign-out-alt" id="log-out"></i>
                    </a>
                </li>
            </div>
    </ul>    
    <?php }//navProfesor ?>