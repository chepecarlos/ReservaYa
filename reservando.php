<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Mesa"];
	$variableCaptura[5]= "0";##ID del clienta

	if(strtoupper($_REQUEST["captcha"]) == $_SESSION["captcha"]){
		$_SESSION["captcha"] = md5(rand()*time());
		if($VariableCaptura[0] <> '' and $VariableCaptura[1] <> ''){
			if( preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$VariableCaptura[2]) or  $VariableCaptura[2] == ""){
				## consulta de si exite el usuario
				$result = mysql_query("SELECT id_cliente FROM cliente where nombre='".$_REQUEST["Nombre"]."' and apellido='".$_REQUEST["Apellido"]."'");
				$row = mysql_fetch_array($result);
				
				if ($row['id_cliente'] == ''){
				$consulta_[0] = "insert into cliente (nombre, apellido, email) values('".$_REQUEST["Nombre"]."','".$_REQUEST["Apellido"]."','".$_REQUEST["Email"]."')";
				#Si no existe que lo agrege
				$row =  mysql_query($consulta_[0]) or die("Problemas en el ingresar de usuario: ".mysql_error());
				## busca el ide de nuevo
				$result = mysql_query("SELECT id_cliente FROM cliente where nombre='".$_REQUEST["Nombre"]."' and apellido='".$_REQUEST["Apellido"]."'");
				$row = mysql_fetch_array($result);
				}
				$variableCaptura[5] = $row['id_cliente'];
				
				echo "Usuario: ".$_REQUEST["Nombre"]." ".$_REQUEST["Apellido"]."<br>";
				##alguna mesa de n personas tiene reserva para para el intervalo de la mesas
				$Mesas_total ="SELECT COUNT(*) as cantidad FROM mesa";#consulta para obtener numero de mesas
				$result =  mysql_query($Mesas_total) or die("Problemas en el select de mesas:".mysql_error());
				$result  = mysql_fetch_array($result);
				$Mesas_total = $result['cantidad'];
				##Consulta para saber canitdad de personas 
				$Mesas_reservadas = "select count(*) as reserva from reserva where timestampdiff(minute,`dia_reserva`,'".$_REQUEST["Reserva"]."') <30 and timestampdiff(minute,`dia_reserva`,'".$_REQUEST["Reserva"]."') >-30 ";
				$result =  mysql_query($Mesas_reservadas) or die("Problemas en reserva:".mysql_error());
				$result  = mysql_fetch_array($result);
				$Mesas_reservadas = $result['reserva'];
				$Tiempo_Reserva = "SELECT dato FROM config where nombre='Duracion de Reserva'";
				$result =  mysql_query($Tiempo_Reserva) or die("Problemas en tiempo de reserva:".mysql_error());
				$result  = mysql_fetch_array($result);
				$Tiempo_Reserva = $result['dato'];
				$procentaje = $Mesas_reservadas / $Mesas_total * 100;
				if($procentaje > 25){
					echo "No se puede hacer la reserva se encuentra llega para hace hora<br>";
					echo "Intente otra horarios";
					require("reserva.php");
			        return;
					}
				else{
					echo "Se puede registrar existe bacantes<br>";
					echo "Lo esperamos a ".$VariableCaptura[3];
					
					$TiempoReserva ="select dato from config where nombre='Duracion Reserva'";
					$superconsulta = "select nombre_mesa from mesa where nombre_mesa != all (select nombre_mesa from reserva where timestampdiff(minute,`dia_reserva`,'".$VariableCaptura[3]."') <30 and timestampdiff(minute,`dia_reserva`,'".$VariableCaptura[3]."') >-30 ) 
and (capacidad = ".$VariableCaptura[4].")";
					$result =  mysql_query($superconsulta) or die("Problemas en Super Consulta:".mysql_error());
					$result  = mysql_fetch_array($result);
					$Mesa_Nombre = $result['nombre_mesa'];
					if($Mesa_Nombre <> ''){
						$result =  "insert into reserva (id_cliente,nombre_mesa,dia_reserva) values ('".$variableCaptura[5]."','".$Mesa_Nombre."','".$VariableCaptura[3]."')"; 
						$Final =  mysql_query($result) or die("Problemas en la insercion final:".mysql_error());
						}
					else{
						echo "Escoja otro horario";
						require("reserva.php"); 
						return;
						}
					}	
				echo "<br>";	
				##ingresa en reserva el ide, nombre_mesa, fecha_reserva 
				}
			else{
				echo "Error con el correco electonico";
				require("reserva.php"); 
				return;
				}
				
			}
		else{
			echo "No se ingreso en nombre y/o Apellido";
			require("reserva.php"); 
			return;
			}
		}
	else{
		$_SESSION["captcha"] = md5(rand()*time());
		echo "<br>¿Erres real mente un humano?</br> <br> Error el Captcha </br>";
		require("reserva.php"); 
		return;
		}	
?>
