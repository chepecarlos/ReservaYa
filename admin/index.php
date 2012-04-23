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
		}
	else{
		echo "Usuario no valido";
		}	

	echo $Consulta;
	}
	
if(isset ($_REQUEST['Paso'])){
	switch ($_REQUEST['Paso'])
    {
	case 1:
		require("paso1.php");
    break;
	case 2:
		require("paso2.php");
	break;
	case 3:
		require("paso3.php");
	break;
	case 777:
		require("paso777.php");
	break;
		}
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
