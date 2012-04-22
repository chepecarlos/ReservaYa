<?php  
/* pagina de inicio del sistema */
require("coneccion.php"); 
?>
<script language="javascript" type="text/javascript" src="datetimepicker.js">

//Date Time Picker script- by TengYong Ng of http://www.rainforestnet.com
//Script featured on JavaScript Kit (http://www.javascriptkit.com)
//For this script, visit http://www.javascriptkit.com 

</script>
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
