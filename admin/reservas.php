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
 <?php
 if(isset ($_REQUEST['Reserva'])){
	echo $_REQUEST['Reserva'];
	$ConsultaFinal="";
	
 } 
 ?>
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
<tr>
<td></td>
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
