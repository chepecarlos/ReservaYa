
<?php
	$VariableCaptura[0]=$_REQUEST["Nombre"];
	$VariableCaptura[1]=$_REQUEST["Apellido"];
	$VariableCaptura[2]=$_REQUEST["Email"];
	$VariableCaptura[3]=$_REQUEST["Reserva"];
	$VariableCaptura[4]=$_REQUEST["Captcha"];

	$consulta_[0] = "insert into (nombre,apellido,email) cliente values('".$_REQUEST["Nombre"]."','".$_REQUEST["Apellido"]."','".$_REQUEST["Email"]."')";

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

$result = mysql_query("SELECT * FROM cliente");

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id_cliente'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

	if( $VariableCaptura[4] == '2'){
		if($VariableCaptura[0] <> '' and $VariableCaptura[1] <> ''){
			if( eregi ("@",$VariableCaptura[2]) or  $VariableCaptura[2] == ""){
				echo "ingresar en la base de datos";
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