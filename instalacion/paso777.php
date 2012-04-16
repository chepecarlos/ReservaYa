Creacion de la todo los datos <br>
<?php
include("../funciones.php");
/*Ejecutando el escrip Base.sql*/
ejecutarSQL('./Base.sql',$conexion);
?>

<?php
if(isset ($_REQUEST['Nombre_1'])){

	for($i = 1; $i <= $_SESSION["Empresa[Mesas]"]; $i += 1){
	$_SESSION["Nombre_$i"]=$_REQUEST["Nombre_$i"];
	$_SESSION["Capaidad_$i"]=$_REQUEST["Capaidad_$i"];
	echo $_SESSION["Nombre_$i"];
	echo $_SESSION["Capaidad_$i"];
		}
	}
	else{
	 echo "no se enviaron datos";
	}
?>

<?php
$consulta_[0] = "insert into config values('Empresa_nombre','".$_SESSION["Empresa[Nombre]"]."')";
$consulta_[1] = "insert into config values('Empresa_direccion','".$_SESSION["Empresa[Direccion]"]."')";
$consulta_[2] = "insert into config values('Empresa_email',".$_SESSION["Empresa[Email]"]."')";
$consulta_[3] = "insert into config values('Empresa_website','".$_SESSION["Empresa[Website]"]."')";
$consulta_[4] = "insert into config values('Empresa_Telefono','".$_SESSION["Empresa[Telefono]"]."')";
$consulta_[5] = "insert into config values('Empresa_slogan','".$_SESSION["Empresa[slogan]"]."')";
$consulta_[6] = "insert into config values('Empresa_Mesas','".$_SESSION["Empresa[Mesas]"]."')";
$consulta_[7] = "insert into empleado (nombre, apellido, password, email,telefono,fecha_nacimiento,dui) values ('".$_SESSION["Administrador[Nombre]"]."','".$_SESSION["Administrador[Apellido]"]."','".$_SESSION["Administrador[Password]"]."','".$_SESSION["Administrador[Email]"]."','".$_SESSION["Administrador[Telefono]"]."','".$_SESSION["Administrador[F_Nacimiento]"]."','".$_SESSION["Administrador[Dui]"]."')";
echo $consulta_[0];
ejecutar_Sentencia($consulta_[0], $conexion);
?>

<form method="post" action="?Paso=777">
Pagina final: 

<input type="submit" value="Siquiente">
</form>


