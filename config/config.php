<?php 
// **Comprobar necesidad de implementacion de esta funcion**

spl_autoload_register(function ($class) {
    $classPath = "./../src/";
    require("$classPath${class}.php");
});
?>