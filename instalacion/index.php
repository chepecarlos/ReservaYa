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
if(isset ($_REQUEST['Paso'])){

    if( $_REQUEST['Paso'] == 1){
	    require("paso1.php");
	    }
	else if( $_REQUEST['Paso'] == 2){
		echo "paso 2";
		}}
	else{
		require("paso0.php");
		}
?>
</div>
</body> 
</html>

