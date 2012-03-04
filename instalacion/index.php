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
	switch ($_REQUEST['Paso'])
    {
	case 1:
		require("paso1.php");
    break;
	case 2:
		require("paso2.php");
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

