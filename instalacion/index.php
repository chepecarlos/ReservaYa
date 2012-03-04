<?php
/* Archivo de instlacion del sistema */
require("../coneccion.php");
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
if( $_REQUEST['Paso'] == 1){
	echo "enviado";
	}
	else{
?>	
<form method="post" action="">
Titulo de la pagina: 
<input type="text" name="Titulo">
<br>
<?php 
$_REQUEST['Paso'] = 1;
?>
<input type="submit" value="confirmar">
</form>
<?php
}
?>
</div>
</body> 
</html>

