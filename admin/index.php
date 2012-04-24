<?php  
/* pagina de inicio del sistema */
require("../coneccion.php"); 
session_start();
?>
<html>
<head>
<title>
Proyecto ADSII
</title>
<link rel="StyleSheet" href="../estilo.css" type="text/css">
</head>

<body> 
<div>
<?php 
require ("../cabecera.php");
?>
<div class="reserva"><center>
<?php	

if(isset ($_REQUEST['login'])){
	$Consulta= "SELECT id_empleado , rol FROM empleado WHERE usuario = \"".$_REQUEST['login']."\" AND password = \"".$_REQUEST['password']."\"";
	$result =  mysql_query($Consulta) or die("Problemas en el select de usuarios:".mysql_error());
	$result  = mysql_fetch_array($result);
	if($result['id_empleado'] <> '' and $result['rol'] <> ''){
		echo "Usuaio valido";
		$_SESSION['ID'] = $result['id_empleado'];
		$_SESSION['ROL'] = $result['rol'];
		}
	else{
		echo "Usuario no valido";
		}	
	echo $Consulta;
	}##fin ingresar al sistema
else if(isset($_GET['Estado'])){
	if ( $_GET['Estado'] 	= "Salir"){
	session_unset();
	session_destroy();
		}
	}
if(isset ($_SESSION["ID"])){
	echo "Cuerpo del sistema<br>";?>

<a href="?Estado=Salir">Salir</a> 
<a href="?Estado=Perfil">Perfil</a>	
<?php
	}
else{
	require("login.php");
	}
?></center>
</div>
<?php
require("../pie.php");
?>
</div>
</body> 
</html>
