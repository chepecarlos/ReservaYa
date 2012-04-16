<?php
/* Archivo de instlacion del sistema */
require("../coneccion.php");
/* Inicia las variables de secion */
session_start();
?>

<html>
<head>
<title>
Instalacion de Reserva Ya
</title>
</head>

<style type="text/css">
div
{
text-align:justify;
text-justify:inter-word;
}
</style>

<body> 
<link rel="StyleSheet" href="estilo.css" type="text/css">

	<center>
		<div class="CI"></div>
      <div class="FORM">
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
	</center>
<?php
@mysql_close($conexion);
?>        
</body> 
</html>


