<?php  
/* pagina de inicio del sistema */
require("coneccion.php"); 
?>
<html>
<head>
<title>
Reservacion...
</title>
<link rel="StyleSheet" href="estilo.css" type="text/css">
</head>
<body> 
<div>
<?php 
require("cabecera.php");
?>
<div class="reserva">
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
