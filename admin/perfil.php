<?php
  if(isset ($_REQUEST['Nombre'])){
  if($_REQUEST['Password'] == $_REQUEST['Re-Password'] and $_REQUEST['Password'] <> ''){
		$Consulta = "";
		##$result =  mysql_query($Consulta) or die("Problemas en el select de mesas:".mysql_error());
		echo "Actulizado";
		}
	else{
	echo "error con la contraseña";	
		}	  
  }
  
  $Consulta = "SELECT * FROM `empleado` WHERE `id_empleado`= '".$_SESSION["ID"]."'";
  $result =  mysql_query($Consulta) or die("Problemas en el select de mesas:".mysql_error());
  $result  = mysql_fetch_array($result);				
?>

<div class="reserva">
<p> Perfil</p><center>
<form id="form1" name="form1" method="post" action="">
  <table width="100px" border="0" cellspacing="0" cellpadding="0">
    <tr>
      </p><td>Nombre:</td>
      <td><input type="text" name="Nombre" id="Nombre" value="<?php echo $result['nombre'] ?>"/></td>
    </tr>
    <tr>
      <td>Apellido :</td>
      <td><input type="text" name="Apellido" id="Apellido" value="<?php echo $result['apellido'] ?>" /></td>
    </tr>
    <tr>
      <td>Password :</td>
      <td><input type="password" name="Password" id="Password"  /></td>
    </tr>
     <tr>
      <td>Re-Password :</td>
      <td><input type="password" name="Re-Password" id="Re-Password"  /></td>
    </tr>
    <tr>
      <td>Email :</td>
      <td><input type="text" name="Email" id="Email" value="<?php echo $result['email'] ?>" /></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><input type="text" name="Telefono" id="Telefono" value="<?php echo $result['telefono'] ?>" /></td>
    </tr>
    <tr>
      <td>Fecha-Nacimiento:</td>
      <td><input type="text" name="F_Nacimiento" id="F_Nacimiento" readonly  value="<?php echo $result['fecha_nacimiento'] ?>" /><button id="f_Nacimiento"><img src="../imagenes/cal.gif" alt="Calendario" /></button><br />
    <script type="text/javascript">//<![CDATA[
    var now = new Date();
      Calendar.setup({
        inputField : "F_Nacimiento",
        trigger    : "f_Nacimiento",
        onSelect   : function() { this.hide() },
        max       : now,
        dateFormat : "%Y-%m-%d"
      });
    //]]></script></td>
    </tr>
    <tr>
      <td>Dui :</td>
      <td><input type="text" name="Dui" id="Dui" value="<?php echo $result['dui'] ?>" /></td>
    </tr>
    <tr>
      <td><input  type="submit"  name="button" id="button" value="Actualizar" /></td>
    </tr>
  </table>
</form></center>
