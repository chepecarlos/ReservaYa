
<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Captcha"];


	$consulta_[0] = "insert into (nombre,apellido,email) cliente values('".$_SESSION["Nombre"]."','".$_SESSION["[Apellido]"]."','".$_SESSION["[Email]"]."')";

	if( $VariableCaptura[4] == '2'){
		if($VariableCaptura[0] <> '' and $VariableCaptura[1] <> ''){
			echo "A insertar base de datos";
			}
		else{
			echo "No se ingreso en nombre y/o Apellido";
			require("reserva.php"); 
			}
		}
	else{
		echo "<br>¿Erres real mente un humano?</br> <br> Error el Captcha </br>";
		require("reserva.php"); 
		}	
?>
