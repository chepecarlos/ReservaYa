<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Captcha"];
	$VariableCaptura[5]=$_REQUEST["Mesa"];
	$variableCaptura[6]= "0";##ID del clienta

	if( $VariableCaptura[4] == '2'){
		if($VariableCaptura[0] <> '' and $VariableCaptura[1] <> ''){
			if( preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$VariableCaptura[2]) or  $VariableCaptura[2] == ""){
				## consulta de si exite el usuario
				$result = mysql_query("SELECT id_cliente FROM cliente where nombre='".$_REQUEST["Nombre"]."' and apellido='".$_REQUEST["Apellido"]."'");
				$row = mysql_fetch_array($result);
				
				if ($row['id_cliente'] == ''){
				$consulta_[0] = "insert into cliente (nombre, apellido, email) values('".$_REQUEST["Nombre"]."','".$_REQUEST["Apellido"]."','".$_REQUEST["Email"]."')";
				echo "<br>";
				echo $consulta_[0]."<br>";
				#Si no existe que lo agrege
				$row =  mysql_query($consulta_[0]) or die("Problemas en el ingresar de usuario: ".mysql_error());
				## busca el ide de nuevo
				$result = mysql_query("SELECT id_cliente FROM cliente where nombre='".$_REQUEST["Nombre"]."' and apellido='".$_REQUEST["Apellido"]."'");
				$row = mysql_fetch_array($result);
				}
				$variableCaptura[6] = $row['id_cliente'];
				
				echo "Usuario: ".$_REQUEST["Nombre"]." ".$_REQUEST["Apellido"]."<br>";
				##alguna mesa de n personas tiene reserva para para el intervalo de la mesas
				$Mesas_total ="SELECT COUNT(*) as cantidad FROM mesa";#consulta para obtener numero de mesas
				$result =  mysql_query($Mesas_total) or die("Problemas en el select de mesas:".mysql_error());
				$result  = mysql_fetch_array($result);
				echo "Total de mesas: ".$result['cantidad']."<br>";
				$Mesas_total = $result['cantidad'];
				##Consulta para saber canitdad de personas 
				$Mesas_reservadas = "select count(*) as reserva from reserva where timestampdiff(minute,`dia_reserva`,'".$_REQUEST["Reserva"]."') <30 and timestampdiff(minute,`dia_reserva`,'".$_REQUEST["Reserva"]."') >-30 ";
				$result =  mysql_query($Mesas_reservadas) or die("Problemas en el select de mesas:".mysql_error());
				$result  = mysql_fetch_array($result);
				echo "Mesas reservadas: ".$result['reserva']."<br>";
				$Mesas_reservadas = $result['reserva'];
				$procentaje = $Mesas_reservadas / $Mesas_total * 100;
				if($procentaje < 25){
					echo "No se puede ingresar";
					}
				else{
					echo "Se puede registrar existe bacantes";
					}	
				echo "<br>";	
				##ingresa en reserva el ide, nombre_mesa, fecha_reserva 
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
