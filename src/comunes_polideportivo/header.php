<?php 
/**Funcion Header 
 * params: Necesita un parametro de tipo cadena que pintara un contenido u otro
 * en funcion del tipo de usuario que sea.
 * Valores Admitidos:
 *      -admin
 *      -profesor
 *      -cliente
*/
function header_usuarios(string $usuario = 'cliente')
{ 
    // Listado de usuarios con las paginas de navegacion de cada usuario
    $usuarios = ["cliente" => ["Home","Noticias","Localización","Reservas"],
                 "admin" => ["Home","Deportes","Empleados","Añadir Clases","Enviar Correos"],
                 "profesor" => ["Home","Horario"]
                ];
    ?>
    <!-- Quitar estos links cuando esten cada uno en su pagina -->
<link rel="stylesheet" href="../../public/css/header.css">
<link rel="stylesheet" href="../../public/css/bootstrap/dist/css/bootstrap.min.css">
        <div class="container" id="header">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div id="logo">
                        <span>P</span>
                        <p>Polideportivo</p>
                    </div>
                </div>
                <div class="col-md-9 navbar" id="nav">
                    <div class="row">            
                        <?php 
                            switch ($usuario) {
                                case 'cliente':
                                    pintarNav($usuarios["cliente"]);
                                break;
                                
                                case 'admin':
                                pintarNav($usuarios["admin"]);
                                break;

                                case 'profesor':
                                    pintarNav($usuarios["profesor"]);
                                break;
                            }//switch
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php }//header_usuarios ?>
 <?php 
 function pintarNav(array $arr)
 {
    //  Numero de columnas que se aplicaran al estilo de bootstrap
     $n_cols = round(12/(count($arr))); ?>
     <ul class="navbar text-center">
     <?php foreach ($arr as $value) { ?>
        <div class="col-md-<?= $n_cols?>" id="cols" >
        <li class="nav-item active btn btn-block "><a href="#"><?= $value?></a></li>
        </div>
      <?php }//forE ?>
      </ul>
<?php }//pinatrNav ?>

 