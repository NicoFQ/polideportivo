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
                <a href="main_administrador.php">
                    <li class="  nav-item active btn btn-block ">Home</li>
                </a>
            </div>
            <div class="col-md-2" id="cols">
                <a href="lista_empleados.php">
                    <li class=" nav-item active btn btn-block ">Empleados</li>
                </a>
            </div>
            <div class="col-md-2" id="cols">
                <a href="lista_deportes.php">
                    <li class="  nav-item active btn btn-block ">Deportes</li>
                </a>
            </div>
            <div class="col-md-2" id="cols">
                <a href="anadir_clases.php">
                    <li class=" nav-item active btn btn-block ">Añadir clases</li>
                </a>
            </div>
            <div class="col-md-2" id="cols">
                <a href="enviar_correo.php">
                    <li class=" nav-item active btn btn-block ">Enviar correo</li>
                </a>
            </div>
        </ul>
    <?php }//navAdmin ?>

    <?php function navCliente()
    { ?>
        <ul class="navbar text-center">
            <div class="col-md-3" id="cols">
                <a href="main_usuario.php">
                    <li class="nav-item active btn btn-block ">Home</li>
                </a>
            </div>
            <div class="col-md-3" id="cols">
                <a href="noticias.php">
                    <li class="nav-item active btn btn-block ">Noticias</li>
                </a>
            </div>
            <div class="col-md-3" id="cols">
                <a href="localizacion.php">
                    <li class="nav-item active btn btn-block ">Localizacion</li>
                </a>
            </div>
            <div class="col-md-3" id="cols">
                <a href="">
                    <li class="nav-item active btn btn-block ">Reservas</li>
                </a>
            </div>
        </ul>
    <?php }//navCliente ?>
 

    <?php function navProfesor()
    { ?>
    <ul class="navbar text-center">
        <div class="col-md-6" id="cols">
            <a href="main_profesor.php">
                <li class="nav-item active btn btn-block ">Home</li>
            </a>
        </div>
        <div class="col-md-6" id="cols">
            <a href="horarios_profesor.php">
                <li class="nav-item active btn btn-block ">Horario</li>
            </a>
        </div>
    </ul>    
    <?php }//navProfesor ?>
