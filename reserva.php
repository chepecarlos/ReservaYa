<p>Reservas Online</p>
<form name="form1" method="post" action="">
  <p>Nombre : 
    <input type="text" name="Nombre" id="Nombre">
  </p>
  <p>Apellido : 
    <input type="text" name="Apellido" id="Apellido">
  </p>
  <p>Email (opcional) :
    <input type="text" name="Email" id="Email">
  </p>
  <p>Fecha de Reserva : 
  <input type="Text" name="Reserva" id="Reserva" DISABLED /><button id="f_Reserva"><img src="imagenes/cal.gif" alt="Calendario" /></button>
    <script type="text/javascript">//<![CDATA[
    var now = new Date();
      Calendar.setup({
        inputField : "Reserva",
        trigger    : "f_Reserva",
        onSelect   : function() { this.hide() },
        min       : now,
        showTime   : 12,
        dateFormat : "%Y-%m-%d %H:%M"
      });
    //]]></script> 
  </p>
  <p>
<?php
   $consulta="SELECT min(capacidad) as capacidad FROM mesa WHERE capacidad group by capacidad";
?>
   Reservar una mesa para:
   <select name="Mesa">
<?php
$result = mysql_query($consulta) or die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($result))
  {
  echo "<option value=\"".$row['capacidad']."\">".$row['capacidad']." Personas</option>";
  }
?> 
   </select>
  </p>
  <p>
    <img src="captcha.php" /><br/>
	<input type="text" size="16" name="captcha" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
</form>
