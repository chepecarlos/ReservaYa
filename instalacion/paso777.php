Creacion de la todo los datos <br>
<?php
include("../funciones.php");
/*Ejecutando el escrip Base.sql*/
ejecutarSQL('./Base.sql',$conexion);
?>

<form method="post" action="?Paso=777">
Pagina final: 
<input type="text" name="Titulo">
<br>
<input type="submit" value="Siquiente">
</form>
