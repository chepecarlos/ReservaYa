<?php  
/* pagina de inicio del sistema */
require("coneccion.php"); 
require("funciones.php");
?>
<html>
<head>
<title>
Reservacion...
</title>
	<script src="src/js/jscal2.js"></script>
    <script src="src/js/lang/es.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="src/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="src/css/steel/steel.css" />

<link rel="StyleSheet" href="estilo.css" type="text/css">
</head>
<body> 
<div>
<?php 
require("cabecera.php");
?>
<div class="reserva">
<?php
if(isset( $_REQUEST['Nombre'])){
	require("reservando.php");
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
