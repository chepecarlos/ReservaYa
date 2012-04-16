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

consulta_0 = "insert into config values('Empresa_nombre','$_SESSION[Nombre]')"
consulta_1 = "insert into config values('Empresa_direccion','$_SESSION[Direccion]')"
consulta_2 = "insert into config values('Empresa_email','$_SESSION[Email]')"
consulta_3 = "insert into config values('Empresa_website','$_SESSION[Website]')"
consulta_4 = "insert into config values('Empresa_Telefono','$_SESSION[Telefono]')"
consulta_5 = "insert into config values('Empresa_slogan','$_SESSION[slogan]')"
consulta_6 = "insert into config values('Empresa_Mesas','$_SESSION[Mesas]')"

consulta_7 = "insert into empleado (nombre, apellido, password, email,telefono,fecha_nacimiento,dui) values ('$_SESSION[Nombre]','$_SESSION[Apellido]','$_SESSION[Password]','$_SESSION[Email]','$_SESSION[Telefono]','$_SESSION[F_Nacimiento]','$_SESSION[Dui]')";

<form method="post" action="?Paso=777">
Pagina final: 

<input type="submit" value="Siquiente">
</form>


