<?php
/* Archivo de instlacion del sistema */
require("../coneccion.php");
/* Inicia las variables de secion */
//session_start();
session_write_close();
?>

<html>
<head>
<title>
Instalacion del Sistema de Mesas
</title>
</head>
<body> 
<div>
<?php	
if(isset ($_SESSION['Paso'])){
	switch ($_SESSION['Paso']){
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
	require("paso0.php");
	$_SESSION['Paso']=1;
	}
?>
</div>
</body> 
</html>

