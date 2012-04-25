<?php
include("../funciones.php");
?>

<?php
if(isset ($_REQUEST['Nombre_1'])){

	for($i = 1; $i <= $_SESSION["Empresa[Mesas]"]; $i += 1){
		if($_REQUEST["Nombre_$i"] <> "" and $_REQUEST["Capaidad_$i"] >= 1){
			$_SESSION["Nombre_$i"]=$_REQUEST["Nombre_$i"];
			$_SESSION["Capaidad_$i"]=$_REQUEST["Capaidad_$i"];
			}
		else{
			echo "Error ingresando el nombre y/o capadidad";
			require("paso3.php");
			return;
			}
		}
	}
	else{
	}
?>

<?php

/*Ejecutando el escrip Base.sql*/
ejecutarSQL('./Base.sql',$conexion);

$consulta_[0] = "insert into config values('Empresa_nombre','".$_SESSION["Empresa[Nombre]"]."')";
$consulta_[1] = "insert into config values('Empresa_direccion','".$_SESSION["Empresa[Direccion]"]."')";
$consulta_[2] = "insert into config values('Empresa_email','".$_SESSION["Empresa[Email]"]."')";
$consulta_[3] = "insert into config values('Empresa_website','".$_SESSION["Empresa[Website]"]."')";
$consulta_[4] = "insert into config values('Empresa_Telefono','".$_SESSION["Empresa[Telefono]"]."')";
$consulta_[5] = "insert into config values('Empresa_slogan','".$_SESSION["Empresa[slogan]"]."')";
$consulta_[6] = "insert into config values('Empresa_Mesas','".$_SESSION["Empresa[Mesas]"]."')";
$consulta_[7] = "insert into empleado (nombre, apellido, rol, password, email,telefono,fecha_nacimiento,dui,usuario) values ('".$_SESSION["Administrador[Nombre]"]."','".$_SESSION["Administrador[Apellido]"]."','administrador','".$_SESSION["Administrador[Password]"]."','".$_SESSION["Administrador[Email]"]."','".$_SESSION["Administrador[Telefono]"]."','".$_SESSION["Administrador[F_Nacimiento]"]."','".$_SESSION["Administrador[Dui]"]."','".$_SESSION["Administrador[Usuario]"]."')";
$consulta_[8] = "insert into config values('Duracion de Reserva','30')";

for($i = 1; $i <= 8 ; $i += 1){
#echo $consulta_[$i];
ejecutar_Sentencia($consulta_[$i], $conexion);
#echo "<br>";
}
for($i = 1; $i <= $_SESSION["Empresa[Mesas]"]; $i += 1){
$consulta = "insert into mesa (nombre_mesa,capacidad) values ('".$_SESSION["Nombre_$i"]."','".$_SESSION["Capaidad_$i"]."')";
#echo $consulta;
#echo "<br>";
ejecutar_Sentencia($consulta, $conexion);	
}
session_unset();
session_destroy();
?>
Felicidades ya tiene instalado el sistema <br>
Ya puede borrar el directorio instalacion <br>
Que disfrute el sistema
<!--<form method="post" action="?Paso=777">
#Pagina final: 

<input type="submit" value="Siquiente">
</form>
-->

