<?php
if(isset ($_REQUEST['Dui'])){

	$VariableCaptura[0]="Nombre";
	$VariableCaptura[1]="Apellido";
	$VariableCaptura[2]="Password";
	$VariableCaptura[3]="Email";
	$VariableCaptura[4]="Telefono";
	$VariableCaptura[5]="F_Nacimiento";
	$VariableCaptura[6]="Dui";
	
	for($i = 0;$i <count($VariableCaptura);$i++){
		$_SESSION["Administrador[$VariableCaptura[$i]]"]=$_REQUEST["$VariableCaptura[$i]"];
		echo $_SESSION["Administrador[$VariableCaptura[$i]]"];
		echo "<br>";
		}	
	}
	else{
	
	}
?>

<p>Registro de Cantidad de Mesas</p>
<form method="post" action="?Paso=777">
<p>Tlaba de las Mesas Agregadas</p>
  <table width="37%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="34%">Cantidad</td>
      <td width="33%"># Personas</td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="Cantidad" id="Cantidad" />
      </td>
      <?php
      echo  $_SESSION["Empresa[Mesas]"];
      ?>
      <td><input type="text" name="PersonasxMesa" id="PersonasxMesa" /></td>
      <td><input type="submit" name="button2" id="button2" value="Agregar" />
      
      <input type="button" name="button3" id="button3" value="Eliminar" /></td>
    </tr>
  </table>
  <p><br>
    <input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" />
  </p>
</form>
