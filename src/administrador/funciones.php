<?php function pintarTHEAD(array $thead)
    { ?>
        <thead>
            <tr>
    <?php foreach ($thead as $value) { ?>
            <th><?= $value?></th>    
    <?php }//forE ?>
            </tr>
        </thead>
<?php }//pintarTHEAD 

function pintarDatosHTML($datos)
{ 
    $id = "";
    ?>
    <tbody>
    <?php foreach ($datos as $value) { ?>
        <tr>
        <?php foreach ($value as $clave => $valor) { 
                if ($clave == "id") {
                    $id = $valor;
                }//if
                if ($clave == "sexo") {
                    if ($valor == 0) {
                        $valor = "Masculino";
                    }else{
                        $valor = "Femenino";
                    }
                }
            ?>
                <td><?= $valor?></td>
            <?php }//forE ?>
            <td><a href="eliminar_usuarios.php?id=<?= $id?>" class="btn btn-danger btn-block">Borrar</a></td>
        </tr>
    <?php }//forE ?>
    </tbody>
<?php }//pintarDatosHTML
function pintarDatosLimpios($datos)
{ ?>
    <tbody>
    <?php foreach ($datos as $value) { ?>
        <tr>
        <?php foreach ($value as $clave => $valor) { ?>
                <td><?= $valor?></td>
            <?php }//forE ?>
        </tr>
    <?php }//forE ?>
    </tbody>
<?php }//pintarDatosLimpios

function pintarEncontrados(array $tabla, $thead)
{ ?>
    <table class="table">
    <caption class="text-center bg-dark">Usuarios encontrados</caption>
        <?= pintarTHEAD($thead);?>
        <?= pintarDatosHTML($tabla); ?>
    </table>
<?php }//pintarEncontrados

/**
 * $captionTabla = Encabezado / titulo de la tabla
 * $tabla = Array de datos obtenidos por la query
 * $thead = Cabecera de las tablas, se crea un array a fuego con los elmentos que se 
 *  obtendran de la query
 * $limpios = Estara iniciado a 0.
 *  Sirve para elegir como se quiere que se pinten los datos
 *  -Si se elige 1, pintara los datos SIN botones para poder modificar / eliminar usuarios
 */
function pintarTablaDatosCompletos($captionTabla, array $tabla, $thead, $limpios = 0)
    { ?>
        <table class="table">
        <caption class="text-center bg-dark">Lista de <?= $captionTabla?></caption>
            <?= pintarTHEAD($thead)?>
            <?php 
                if ($limpios == 1) {
                    pintarDatosLimpios($tabla);
                }else{
                    pintarDatosHTML($tabla);
                }//else
            ?>
            
        </table>
<?php }//pintarTabla

function plantillaBuscadorHTML()
{ ?>

    <h3>Buscador</h3>
        <div class="row">
            <form action="#" method="get">
                <div class="col-md-3">
                    <label for="nombre">Nombre: </label>
                    <input type="search" name="nombre" class="form-control" placeholder = "&#128269;">
                </div>
                <div class="col-md-3">
                    <label for="apellido">Primer Apellido: </label>
                    <input type="search" name="apellido" class="form-control" placeholder = "&#128269;">
                </div>
                <div class="col-md-3">
                    <label for="dni">DNI: </label>
                    <input type="search" name="dni" class="form-control" placeholder = "&#128269;">
                </div>
                <div class="col-md-2">
                    <input type="submit" name="enviar" value="Buscar" class="btn btn-info btn-block">
                </div>
            </form>
        </div>
<?php }//plantillaBuscadorHTML ?>

<?php 


?>

