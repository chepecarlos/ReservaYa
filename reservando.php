
<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Captcha"];

	if( $VariableCaptura[4] == '2'){
		if($VariableCaptura[0] <> '' and $VariableCaptura[1] <> ''){
			if( preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$VariableCaptura[2]) or  $VariableCaptura[2] == "".$_REQUEST["Apellido"].""){
				echo "ingresar en la base de datos";
				## consulta de si exite el usuario
				$result = mysql_query("SELECT id_cliente FROM cliente where nombre='".$_REQUEST["Nombre"]."' and apellido=''");
				$row = ejecutar_Sentencia($result);
				$row = mysql_fetch_array($result);
				
				echo $row['id_cliente'];
				if ($row['id_cliente'] == ''){
				$consulta_[0] = "insert into (nombre,apellido,email) cliente values('".$_REQUEST["Nombre"]."','".$_REQUEST["Apellido"]."','".$_REQUEST["Email"]."')";
				#Si no existe que lo agrege
				$row = ejecutar_Sentencia($consulta_[0]);
				## busca el ide de nuevo
				$row = ejecutar_Sentencia($result);
				$row = mysql_fetch_array($result);
				}
				
				}
			else{
				echo "Error con el correco electonico";
				}
				
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
