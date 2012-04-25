 <form name="form1" method="post" action="">
  <p>Fecha de Reserva : 
  <input type="Text" name="Reserva" id="Reserva" readonly /><button id="f_Reserva"><img src="imagenes/cal.gif" alt="Calendario" /></button>
    <script type="text/javascript">//<![CDATA[
    var now = new Date();
      Calendar.setup({
        inputField : "Reserva",
        trigger    : "f_Reserva",
        onSelect   : function() { this.hide() },
        min       : now,
        dateFormat : "%Y-%m-%d"
      });
    //]]></script> 
  
 <input type="submit" name="button" id="button" value="Enviar">
 </p>
 <table>
<tr>
<td>Nombre</td>
<td>Apellido</td>
<td>Password</td>
<td>email</td>
<td>telefono</td>
<td>fecha de nacimiento</td>
<td>dui</td>
<td></td>
<td></td>
</tr>
 <?php
 if(isset ($_REQUEST['Reserva'])){
	$ConsultaFinal="SELECT * FROM reserva inner join cliente on reserva.id_cliente where reserva.id_cliente=cliente.id_cliente ORDER BY '".$_REQUEST['Reserva']."' ASC";
	$result = mysql_query($ConsultaFinal) or die("Problemas en tiempo de reserva:".mysql_error());
?>
<td>
<?php

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";	  
  echo "<tb>".$row['id_cliente']."</tb>";

  echo "</tr>";
  
  }
 } 
 ?>


</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
