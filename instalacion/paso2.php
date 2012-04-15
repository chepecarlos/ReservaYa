<?php

if(isset ($_REQUEST['Nombre'])){
	
	$VariableCaptura[0]="Nombre";
	$VariableCaptura[1]="Direccion";
	$VariableCaptura[2]="Email";
	$VariableCaptura[3]="Website";
	$VariableCaptura[4]="Telefono";
	$VariableCaptura[5]="slogan";
	
	for($i = 0;$i <=count($VariableCaptura);$i++){
		$_SESSION["Empresa[$VariableCaptura[$i]]"]=$_REQUEST["$VariableCaptura[$i]"];
		}	
	}
else{
	echo "Reenvide el anterior formlario";
	}
?>

<p>Registro de Datos del Administrador</p>
<form method="post" action="?Paso=3">
  <p>Nombre:
    <input type="text" name="Nombre" id="Nombre">
  </p>
  <p>Apellido :
    <input type="text" name="Apellido" id="Apellido" />
</p>
  <p>Password :
    <input type="password" name="Password" id="Password" />
</p>
  <p>Re - Password:
    <input type="password" name="Re-Password" id="Re-Password" />
  </p>
  <p>Email :
    <input type="text" name="Email" id="Email" />
  </p>
  <p>Telefono:
    <input type="text" name="Telefono" id="Telefono" />
  </p>
  <p>Fecha - Nacimiento :
    <input type="text" name="F_Nacimiento" id="F_Nacimiento" />
</p>
  <p>Dui :
    <input type="text" name="Dui" id="Dui" />
  </p>
  <p>    <br>
   <input type="reset" name="button" id="button" value="Limpiar" />
    <?php
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><input type="button" name="button" id="button" value="Atras" /></a>';
	?>
    <input type="submit" value="Siquiente" />
  </p>
</form>
