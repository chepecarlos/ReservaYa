
<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Captcha"];
	
	if( $VariableCaptura[4] == '2'){
		echo "listo";
		}
	else{
		echo "¿Erres real mente un humano? <br> Error el Captcha <br>";
		require("reserva.php"); 
		}	
?>
