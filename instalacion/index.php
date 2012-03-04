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
if( $_REQUEST != null){
	echo "enviado";
	}
	else{
?>	
<form method="post" action="index.php">
Titulo de la pagina: 
<input type="text" name="Titulo">
<br>
<input type="submit" value="confirmar">
</form>
<?php
}
?>
</div>
</body> 
</html>

