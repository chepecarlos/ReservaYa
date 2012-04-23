<?php

if(isset ($_REQUEST['Website'])){
	
	$VariableCaptura[0]="Nombre";
	$VariableCaptura[1]="Direccion";
	$VariableCaptura[2]="Email";
	$VariableCaptura[3]="Website";
	$VariableCaptura[4]="Telefono";
	$VariableCaptura[5]="slogan";
	$VariableCaptura[6]="Mesas";
	
	for($i = 0;$i <count($VariableCaptura);$i++){
		if( $_REQUEST["$VariableCaptura[$i]"] <> ''){
			$_SESSION["Empresa[$VariableCaptura[$i]]"]=$_REQUEST["$VariableCaptura[$i]"];
				if($i ==  2 and !preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$_REQUEST["$VariableCaptura[2]"])){
					echo "Falto ingresar ".$VariableCaptura[$i]."<br>";
			        require("paso1.php");
			        return;
					}
			}
		else{
			echo "Falto ingresar ".$VariableCaptura[$i]."<br>";
			require("paso1.php");
			return;
			}
		}	
	}
else{
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
    <input type="text" name="F_Nacimiento" id="F_Nacimiento" DISABLED /><button id="f_Nacimiento"><img src="../imagenes/cal.gif" alt="Calendario" /></button><br />
    <script type="text/javascript">//<![CDATA[
    var now = new Date();
      Calendar.setup({
        inputField : "F_Nacimiento",
        trigger    : "f_Nacimiento",
        onSelect   : function() { this.hide() },
        max       : now,
        dateFormat : "%Y-%m-%d"
      });
    //]]></script> 
  </p>
  <p>Dui :
    <input type="text" name="Dui" id="Dui" />
  </p>
   <p>Usuario :
    <input type="text" name="Usuario" id="Usuario" />
  </p>
  <p>    <br>
   <input type="reset" name="button" id="button" value="Limpiar" />
   <input type="submit" value="Siguiente" />
  </p>
</form>
