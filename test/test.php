<?php 
$pass = "";
$nico = "nico";

if (count($_GET) > 0) {
    $pass = $_GET["pass"];
    
}
echo $pass."<br>";
$serializado = password_hash($pass,2);
 echo $serializado;
 
 if (password_verify($nico,$serializado)) {
     echo "<br>done";
 }else{
     echo "<br>fuera";
 }


?>
<form action="#" method="get">
<input type="password" name="pass" >
<input type="submit" value="Enviar">
</form>