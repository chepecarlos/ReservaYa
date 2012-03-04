<?php  
/* pagina de inicio del sistema */
require("coneccion.php"); 
?>
<html>
<head>
<title>
Proyecto ADSII
</title>
</head>
<body> 
<div>
<?php 
require("cabecera.php");
?>
<div>
<?php
if(isset( $_REQUEST['id'])){
	echo "Con datos";
	}
else{
	require("reserva.php");
	}
?>
</div>
<?php
require("pie.php");
?>
</div>
</body> 
</html>
