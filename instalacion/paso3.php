<?php
if(isset ($_REQUEST['Dui'])){

	$VariableCaptura[0]="Nombre";
	$VariableCaptura[1]="Apellido";
	$VariableCaptura[2]="Password";
	$VariableCaptura[3]="Email";
	$VariableCaptura[4]="Telefono";
	$VariableCaptura[5]="F_Nacimiento";
	$VariableCaptura[6]="Dui";
	$VariableCaptura[7]="Usuario";
	
	for($i = 0;$i <count($VariableCaptura);$i++){
		if($_REQUEST["$VariableCaptura[$i]"] <> ""){	
			$_SESSION["Administrador[$VariableCaptura[$i]]"]=$_REQUEST["$VariableCaptura[$i]"];
			}
		else{
			echo "Error con el ".$VariableCaptura[$i]."<br>";
			require("paso2.php");
			return;
			}
		}	
	}
	else{
	}
?>

Registro de Cantidad de Mesas
<form method="post" action="?Paso=777">
Taba de las Mesas Agregadas <br>
Ingrese en nombre de la mesa <br>
y capacidad de las mismas(numero)<br>
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
		  Nombre de Mesa
	 </td>
     <td>
		  Capacidad
     </td>
    </tr>
    <?php
	 for($i = 1; $i <= $_SESSION["Empresa[Mesas]"]; $i += 1){
	?>
	<tr> 
    <td>
		<input type="text" name="Nombre_<?php echo $i; ?>" id="Nombre_<?php echo $i; ?>" />
    </td>
    <td>
		 <input type="text" name="Capaidad_<?php echo $i; ?>" id="Capaidad_<?php echo $i; ?>" />
    </td>
    </tr>
    <?php } ?>
  </table>
  <p><br>
    <input type="reset" name="button" id="button" value="Limpiar" />
    <input type="submit" value="Siguiente" />
  </p>
</form>
