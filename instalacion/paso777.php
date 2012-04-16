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

<form method="post" action="?Paso=777">
Pagina final: 

<input type="submit" value="Siquiente">
</form>
