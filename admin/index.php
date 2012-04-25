<?php  
/* pagina de inicio del sistema */
require("../coneccion.php"); 
session_start();
?>
<html>
<head>
<title>
Administracion de Reservas
</title>
	<link rel="StyleSheet" href="../estilo.css" type="text/css">
	<script src="../src/js/jscal2.js"></script>
    <script src="../src/js/lang/es.js"></script>
    <link rel="stylesheet" type="text/css" href="../src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/steel/steel.css" />
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
	if(isset($_GET['Estado'])){
		switch ($_GET['Estado']){
			case 1:
				session_unset();
				session_destroy();
				require("login.php");
			return;
			break;
			case 2:
				require("perfil.php");
			break;
			case 3:
				require("reservas.php");
			break;	
			case 4:
				require("
			break;
		}
	}
	?>

<a href="?Estado=1">Salir</a> <br>
<a href="?Estado=2">Perfil</a> <br>
<a href="?Estado=3">Reservas</a> <br>
<a href="?Estado=4">Administracion de usuarios</a>
	
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
