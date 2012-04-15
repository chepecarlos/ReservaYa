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
<div><img src="imagenes/Banner_Instalaccion.png" width="1000" height="288" alt="" id="Cabecera" /></div>
<div>
<?php	
if(isset ($_REQUEST['Paso'])){
	switch ($_REQUEST['Paso']){
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
	}
?>
</div>
</body> 
</html>

