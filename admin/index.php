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
	}##fin ingresar al sistema
	
if(isset ($_SESSION["ID"])){
	echo "Cuerpo del sistema<br>";
	
	if(isset($_GET['Estado'])){
		switch ($_GET['Estado']){
			case 1:
			echo "HOLA";
			session_unset();
			session_destroy();
			require("login.php");
			return;
			break;
		}
	}
	?>

<a href="?Estado=1">Salir</a> <br>
<a href="?Estado=2">Perfil</a>	
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
